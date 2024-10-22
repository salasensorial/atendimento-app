#!/bin/bash

# Execute os comandos de cache do Artisan após iniciar o container
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Inicie o PHP-FPM
php-fpm
