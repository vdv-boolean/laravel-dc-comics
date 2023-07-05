#! /bin/sh
php artisan make:controller Guest/PageController
php artisan make:controller Guest/$1\Controller

php artisan make:model $1

php artisan make:migration create_$2\s_table

echo > config/$2\s.php
