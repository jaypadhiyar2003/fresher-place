#!/bin/sh

# Run Laravel migrations
php artisan migrate --force

# Start PHP-FPM
php-fpm
