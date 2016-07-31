#!/bin/bash
PROYECTO="/var/www/empresas.com/$1"
COLOR=`cat color.txt`
if [ -f /var/www/neas.com/public/log.txt ] ;then
rm /var/www/neas.com/public/log.txt
fi
echo "Se recibieron los Parametros: "$1", "$2", "$3", "$4", "$5", "$6", "$7", "$8 >> log.txt
if [ -d $PROYECTO ] ;then
echo "si existia" >> log.txt
rm -rf /var/www/empresas.com/$1
fi
echo $PROYECTO >> log.txt
cp -p -R /var/www/empresas.com/generica /var/www/empresas.com/$1
echo "Se creo Carpeta" >> log.txt
chmod -R 777 /var/www/empresas.com/$1
cp -p -R /var/www/neas.com/public/css /var/www/empresas.com/$1/public/css
cp -p -R /var/www/neas.com/public/js /var/www/empresas.com/$1/public/js
cp -p -R /var/www/neas.com/public/fonts /var/www/empresas.com/$1/public/fonts
mkdir /var/www/empresas.com/$1/public/img
cp -p /var/www/neas.com/storage/app/$2.jpg /var/www/empresas.com/$1/public/img
cp -p /var/www/neas.com/storage/app/$3.jpg /var/www/empresas.com/$1/public/img
cp -p /var/www/neas.com/storage/app/$4.jpg /var/www/empresas.com/$1/public/img
cp -p /var/www/neas.com/storage/app/$5.jpg /var/www/empresas.com/$1/public/img
cp -p /var/www/neas.com/storage/app/$6.jpg /var/www/empresas.com/$1/public/img
cp -p /var/www/neas.com/storage/app/$7.jpg /var/www/empresas.com/$1/public/img
cp -p /var/www/neas.com/storage/app/$8.jpg /var/www/empresas.com/$1/public/img
cp -p /var/www/neas.com/public/id.txt /var/www/empresas.com/$1/public/
cp -p /var/www/neas.com/public/routes_Generica.php /var/www/empresas.com/$1/app/Http/routes.php
cp -p /var/www/neas.com/resources/views/plantilla.blade.php /var/www/empresas.com/$1/resources/views/principal.blade.php
cp -p /var/www/neas.com/public/controllerGenerico.php /var/www/empresas.com/$1/app/Http/Controllers/controllerGenerico.php
cp -p /var/www/neas.com/app/datos_empresa.php /var/www/empresas.com/$1/app/datos_empresa.php
cp -p /var/www/neas.com/.env /var/www/empresas.com/$1/.env
perl -pi -e "s[18BC9C][$COLOR]g" /var/www/empresas.com/$1/public/css/freelancer.min.css
perl -pi -e "s[18bc9c][$COLOR]g" /var/www/empresas.com/$1/resources/views/principal.blade.php
chmod -R 777 /var/www/empresas.com/$1
