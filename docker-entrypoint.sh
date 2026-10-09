#!/bin/sh
set -e

# Configure port if Render assigns a dynamic $PORT
if [ -n "$PORT" ]; then
    sed -i "s/Listen 80/Listen $PORT/g" /etc/apache2/ports.conf
    sed -i "s/<VirtualHost \*:80>/<VirtualHost \*:$PORT>/g" /etc/apache2/sites-available/000-default.conf
fi

# Ensure storage directories exist
mkdir -p /var/www/html/storage/framework/cache
mkdir -p /var/www/html/storage/framework/sessions
mkdir -p /var/www/html/storage/framework/views
mkdir -p /var/www/html/storage/logs
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Generate key if not present
if [ -z "$APP_KEY" ]; then
    php artisan key:generate --force
fi

# Clear & Cache for optimal production performance
php artisan config:clear || true
php artisan route:clear || true
php artisan view:clear || true
php artisan view:cache || true

# Start Apache in foreground
exec apache2-foreground
