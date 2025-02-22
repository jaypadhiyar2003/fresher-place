#!/usr/bin/env bash

# Install PHP dependencies
composer install --no-dev --optimize-autoloader

# Install Node dependencies and build assets
npm install
npm run build

# Cache Laravel configurations
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Ensure storage link is created
php artisan storage:link

# Run database migrations (optional, only if needed)
php artisan migrate --force
