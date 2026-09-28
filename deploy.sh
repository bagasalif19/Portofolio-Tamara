#!/bin/bash
set -e

echo "🚀 Starting Deployment for Portofolio Tamara..."

# Pull latest changes from git
git pull origin main

# Install composer dependencies
composer install --no-dev --optimize-autoloader --no-interaction

# Create database file if not exists (for SQLite)
if [ ! -f database/database.sqlite ]; then
    touch database/database.sqlite
    echo "📁 Created database/database.sqlite"
fi

# Run migrations
php artisan migrate --force

# Clear and cache configurations for optimal production speed
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Ensure storage symlink exists
php artisan storage:link || true

# Set correct folder permissions for web server
sudo chown -R www-data:www-data storage bootstrap/cache database
sudo chmod -R 775 storage bootstrap/cache database

echo "✅ Deployment completed successfully!"
