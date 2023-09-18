#!/usr/bin/env bash
echo "Running composer"
composer install --no-dev --working-dir=/var/www/html

echo "Existing Repo to Render"
php artisan make:auth

echo "generating application key"
php artisan key:generate --show

echo "Caching config..."
php artisan config:cache

echo "Caching routes..."
php artisan route:cache

echo "Clearing Routes in Production...."
php artisan route:clear

echo "Running migrations..."
php artisan migrate --force