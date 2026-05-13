#!/bin/sh

echo "Checking database migrations..."

php artisan migrate --force

echo "Checking if seeding is needed..."

# OPTIONAL: only seed if table is empty
if [ "$(php artisan tinker --execute=\"echo DB::table('projects')->count();\")" = "0" ]; then
    echo "Seeding database..."
    php artisan db:seed --force
else
    echo "Seed skipped (data already exists)"
fi

echo "Starting Laravel server..."
php artisan serve --host=0.0.0.0 --port=10000