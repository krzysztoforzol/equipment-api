#!/usr/bin/env bash

php composer.phar install
php artisan migrate:reset
php artisan migrate
php artisan db:seed --force
