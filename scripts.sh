#!/bin/sh

php artisan migrate
php artisan passport:install
