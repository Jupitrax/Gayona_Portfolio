#!/bin/sh

echo "Running migrations..."

php artisan migrate --force

echo "Running seeders..."

php artisan db:seed --force || true

echo "Starting Laravel server..."

php artisan serve --host=0.0.0.0 --port=10000