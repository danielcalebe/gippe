#!/bin/bash

# Execute Laravel migrations
php artisan migrate --force

# Seed the database if needed
php artisan db:seed --force

# Start PHP-FPM server
exec php-fpm
