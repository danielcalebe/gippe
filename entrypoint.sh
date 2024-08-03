#!/bin/bash

# Run migrations
php artisan migrate --force

# Seed the database (optional)
php artisan db:seed --force

# Execute the command passed to the entrypoint
exec "$@"
