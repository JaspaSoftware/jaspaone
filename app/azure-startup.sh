#!/bin/bash

# --- 1. SETUP CRON FOR LARAVEL SCHEDULER ---
apt-get update -qq && apt-get install cron -yqq

# Export existing environment variables into a file that cron can read
set | grep -E '^DB_|^MAIL_|^APP_|^MYSQL_' > /etc/profile.d/laravel_env.sh

# Add the Laravel scheduler task to crontab
# Runs every minute: php artisan schedule:run
(crontab -l 2>/dev/null; echo "* * * * * . /etc/profile && /usr/local/bin/php /home/site/wwwroot/artisan schedule:run >> /home/site/wwwroot/storage/logs/cron.log 2>&1") | crontab -

# Start the cron service
service cron start

# --- 2. START WEB SERVER ---
/usr/sbin/apache2ctl -D FOREGROUND
