#!/bin/bash
DIRECTORIO= "/Applications/XAMPP/xamppfiles/htdocs/empresas"
PROYECTO= "/Applications/XAMPP/xamppfiles/htdocs/empresas/$1"
if [ ! -d $DIRECTORIO];then
mkdir empresas
fi
if [ -d $PROYECTO];then
pwd >> archivo.txt
rm -rf /Applications/XAMPP/xamppfiles/htdocs/empresas/$1
fi
/Users/Nicolas/composer.phar create-project laravel/laravel /Applications/XAMPP/xamppfiles/htdocs/empresas/$1
#php artisan make:controller controllerGenerico
#php artisan make:model datos_empresa
chmod -R 777 /Applications/XAMPP/xamppfiles/htdocs/empresas/$1
cp -p -R /Applications/XAMPP/xamppfiles/htdocs/GeneradorDeImagenEmpresarial/public/css /Applications/XAMPP/xamppfiles/htdocs/empresas/$1/public/css
cp -p -R /Applications/XAMPP/xamppfiles/htdocs/GeneradorDeImagenEmpresarial/public/js /Applications/XAMPP/xamppfiles/htdocs/empresas/$1/public/js
cp -p -R /Applications/XAMPP/xamppfiles/htdocs/GeneradorDeImagenEmpresarial/public/fonts /Applications/XAMPP/xamppfiles/htdocs/empresas/$1/public/fonts
mkdir /Applications/XAMPP/xamppfiles/htdocs/empresas/$1/public/img
cp -p /Applications/XAMPP/xamppfiles/htdocs/GeneradorDeImagenEmpresarial/storage/app/$2.jpg /Applications/XAMPP/xamppfiles/htdocs/empresas/$1/public/img
cp -p /Applications/XAMPP/xamppfiles/htdocs/GeneradorDeImagenEmpresarial/storage/app/$3.jpg /Applications/XAMPP/xamppfiles/htdocs/empresas/$1/public/img
cp -p /Applications/XAMPP/xamppfiles/htdocs/GeneradorDeImagenEmpresarial/storage/app/$4.jpg /Applications/XAMPP/xamppfiles/htdocs/empresas/$1/public/img
cp -p /Applications/XAMPP/xamppfiles/htdocs/GeneradorDeImagenEmpresarial/storage/app/$5.jpg /Applications/XAMPP/xamppfiles/htdocs/empresas/$1/public/img
cp -p /Applications/XAMPP/xamppfiles/htdocs/GeneradorDeImagenEmpresarial/storage/app/$6.jpg /Applications/XAMPP/xamppfiles/htdocs/empresas/$1/public/img
cp -p /Applications/XAMPP/xamppfiles/htdocs/GeneradorDeImagenEmpresarial/storage/app/$7.jpg /Applications/XAMPP/xamppfiles/htdocs/empresas/$1/public/img
cp -p /Applications/XAMPP/xamppfiles/htdocs/GeneradorDeImagenEmpresarial/storage/app/$8.jpg /Applications/XAMPP/xamppfiles/htdocs/empresas/$1/public/img
cp -p /Applications/XAMPP/xamppfiles/htdocs/GeneradorDeImagenEmpresarial/public/id.txt /Applications/XAMPP/xamppfiles/htdocs/empresas/$1/public/
cp -p /Applications/XAMPP/xamppfiles/htdocs/GeneradorDeImagenEmpresarial/public/routes_Generica.php /Applications/XAMPP/xamppfiles/htdocs/empresas/$1/app/Http/routes.php
cp -p /Applications/XAMPP/xamppfiles/htdocs/GeneradorDeImagenEmpresarial/resources/views/plantilla.blade.php /Applications/XAMPP/xamppfiles/htdocs/empresas/$1/resources/views/principal.blade.php
cp -p /Applications/XAMPP/xamppfiles/htdocs/GeneradorDeImagenEmpresarial/public/controllerGenerico.php /Applications/XAMPP/xamppfiles/htdocs/empresas/$1/app/Http/Controllers/controllerGenerico.php
cp -p /Applications/XAMPP/xamppfiles/htdocs/GeneradorDeImagenEmpresarial/app/datos_empresa.php /Applications/XAMPP/xamppfiles/htdocs/empresas/$1/app/datos_empresa.php
cp -p /Applications/XAMPP/xamppfiles/htdocs/GeneradorDeImagenEmpresarial/.env /Applications/XAMPP/xamppfiles/htdocs/empresas/$1/.env
chmod -R 777 /Applications/XAMPP/xamppfiles/htdocs/empresas/$1