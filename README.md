# Examen1-PhoneZone
API para una tienda
# API de Tienda PhoneZone - Laravel + Sanctum

Este proyecto es una API RESTful desarrollada con **Laravel 12.0**. Permite el registro e inicio de sesión de usuarios, y ofrece un CRUD de **marcas** y **productos** protegidos con autenticación mediante **Laravel Sanctum**.

## Requisitos

- PHP >= 8.2
- Composer
- MySQL o MariaDB
- Laravel 12+

## Instalación del Proyecto

Sigue estos pasos para levantar el proyecto en local:

1. Clona el repositorio:
https://github.com/Israel192619/Examen1-PhoneZone.git
cd PhoneZone

2. Instala dependencias de PHP
composer install

3. Copia el archivo .env y configura tus variables:
cp .env.example .env
Edita el archivo .env y modifica:
DB_DATABASE=nombre_basedatos
DB_USERNAME=usuario
DB_PASSWORD=contraseña

4. Genera la clave de la aplicación:
php artisan key:generate

5. Ejecuta migraciones y seeders:
php artisan migrate --seed

6. Levanta el servidor de desarrollo:
php artisan serve

## Autenticación
Este proyecto utiliza Laravel Sanctum. Asegúrate de incluir el token en el encabezado Authorization para acceder a rutas protegidas:
Authorization: Bearer TU_TOKEN

## Pruebas
- Postman
- Insomnia
- Extensiones de navegador para llamadas API
