#!/usr/bin/env bash

# Exit if any command fails
set -e

# Install dependencies
composer install --no-interaction --prefer-dist --optimize-autoloader

# Set file permissions (important!)
chmod -R 775 storage bootstrap/cache

# Create storage symlink
php artisan storage:link

# Run migrations
php artisan migrate --force

# (Optional) Cache config
php artisan config:cache
