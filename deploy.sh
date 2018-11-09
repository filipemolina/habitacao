#!/bin/bash

cd /var/www/fw_habitacao

#git pull origin marcelo
git pull

#composer update --optimize-autoloader --no-dev

#php artisan config:cache

#php artisan route:cache

cp -R /var/www/fw_habitacao/public/css /var/www/html/habitacao/
cp -R /var/www/fw_habitacao/public/fonts /var/www/html/habitacao/
cp -R /var/www/fw_habitacao/public/img /var/www/html/habitacao/
cp -R /var/www/fw_habitacao/public/js /var/www/html/habitacao/
cp -R /var/www/fw_habitacao/public/vendor /var/www/html/habitacao/
cp -R /var/www/fw_habitacao/public/vendors /var/www/html/habitacao/

#/etc/init.d/apache2 restart

