#!/bin/bash

cd /var/www/api

if [ "$1" = "migrate" ]
then
    php artisan migrate:refresh --database=testing
fi

./vendor/bin/phpunit