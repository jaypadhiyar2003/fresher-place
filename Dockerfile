# Use PHP and Node for Laravel + Vite
FROM php:8.2

# Set working directory
WORKDIR /var/www/html

# Install dependencies
RUN apt-get update && apt-get install -y \
    curl zip unzip git nodejs npm

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy application files
COPY . .

# Copy application files (including .env) to the container
COPY . /var/www/html

# Set proper permissions for storage and cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Install PHP & Node dependencies and build Vite assets
RUN composer install --no-dev --optimize-autoloader && \
    npm install && npm run build && \
    php artisan storage:link && \
    php artisan config:cache && \
    php artisan route:cache && \
    php artisan view:cache

# Expose the port for Laravel
EXPOSE 8000

# Start the app
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
