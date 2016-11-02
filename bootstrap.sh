#!/bin/bash

composer install

cp .env.example .env
php artisan key:generate

sudo chmod 777 -R storage/