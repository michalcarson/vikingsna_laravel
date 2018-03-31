#!/bin/sh

cd /var/www/api

echo '########## SETTING PERMISSIONS ##########'
chmod -R 777 ./storage
chmod 777 ./bootstrap/cache

echo '########## RUNNING MIGRATIONS ##########'
php artisan migrate

echo '########## RUNNING PHP-FPM ##########'
php-fpm
