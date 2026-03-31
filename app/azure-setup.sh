#!/bin/bash

# 1. Create necessary directories
mkdir -p /home/site/wwwroot/storage/logs
mkdir -p /home/site/wwwroot/storage/framework/views
mkdir -p /home/site/wwwroot/storage/framework/sessions
mkdir -p /home/site/wwwroot/storage/framework/cache/data
mkdir -p /home/site/wwwroot/bootstrap/cache

# 2. Set permissions
chmod -R 777 /home/site/wwwroot/storage
chmod -R 777 /home/site/wwwroot/bootstrap/cache

# 3. Handle .env file
if [ ! -f /home/site/wwwroot/.env ]; then
    cp /home/site/wwwroot/env.example /home/site/wwwroot/.env
fi

# 4. Inject Production Database Credentials (using environment variables if present, or hardcoded from previous turn)
# Note: It's better to use variables, but if the Portal is failing, let's inject them once.
sed -i "s|DB_HOST=127.0.0.1|DB_HOST=mysql-server-prod.mysql.database.azure.com|g" /home/site/wwwroot/.env
sed -i "s|DB_DATABASE=laravel|DB_DATABASE=jaspaone-saas-db|g" /home/site/wwwroot/.env
sed -i "s|DB_USERNAME=root|DB_USERNAME=jaspaadmin|g" /home/site/wwwroot/.env
sed -i "s|DB_PASSWORD=|DB_PASSWORD=1qazxsw2#EDC|g" /home/site/wwwroot/.env

# 5. Skip Installer lock file
touch /home/site/wwwroot/storage/installed

# 6. Configure Nginx
sed -i "s|root /home/site/wwwroot;|root /home/site/wwwroot/public;|g" /etc/nginx/sites-available/default
sed -i "s|location / {|location / { try_files \$uri \$uri/ /index.php?\$query_string;|g" /etc/nginx/sites-available/default

# 7. Finalize Laravel
cd /home/site/wwwroot
php artisan key:generate --force
php artisan config:clear
service nginx reload

echo "Jaspa One Setup Complete!"
