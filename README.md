<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

<h1>Changelog Laravel</h1>

<p>Pequeña app para probar los Git Hooks, en esta ocasión, utilizo el post-commit. Cada vez que se realiza un commit, se guarda en la carpeta public 
una línea en el fichero changelog.txt con la información de ese commit. Por ejemplo:<p>

<p>85e8fa1 - Hector Nevado, 0 seconds ago : Añadida comprobación de si existe el fichero changelog en el controlador</p>

<p>Cuando accedemos a la home, se carga este fichero y se muestra en una tabla línea a línea, además de incluir un enlace al propio fichero txt. Si este 
fichero no existe, simplemente se muestra el mensaje de "No existe el fichero changelog en la carpeta public"</p>

<p>El fichero generado en la carpeta .git\hooks para que guarde la información de los commits ha sido el post-commit (sin extensión) que tiene el siguiente contenido</p>

<pre>
#!/bin/bash

# Define el nombre del archivo de changelog
CHANGELOG_FILE="public/changelog.txt"

# Genera el changelog usando git log y guarda el resultado en el archivo
git log --pretty=format:"%h - %an, %ar : %s" > $CHANGELOG_FILE
</pre>

<p>Este script se puede personalizar como se quiera</p>

<p><img src="https://github.com/hnevado/laravelChangeLog/blob/master/public/img/captura.png"></p>
