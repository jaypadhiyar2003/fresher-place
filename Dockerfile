FROM ubuntu:latest
LABEL authors="jaypadhiyar"
# Use official PHP image
FROM php:8.2-fpm

# Set working directory
WORKDIR /var/www/html

# Install dependencies
RUN apt-get update && apt-get install -y libpng-dev libonig-dev libxml2-dev sqlite3 unzip && \
    docker-php-ext-install pdo pdo_sqlite mbstring exif pcntl bcmath gd

# Copy Laravel code
COPY . .

# Copy and make the start.sh script executable
COPY start.sh /start.sh
RUN chmod +x /start.sh

# Set entrypoint to the script
ENTRYPOINT ["/start.sh"]

# Image config
ENV SKIP_COMPOSER 1
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1

# Laravel config
ENV APP_ENV production
ENV APP_DEBUG false
ENV LOG_CHANNEL stderr

# Allow composer to run as root
ENV COMPOSER_ALLOW_SUPERUSER 1


CMD ["/start.sh"]

