<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

## TO-DO LIST

Este es un proyecto desarrollado con Laravel 9. Este README proporciona los pasos necesarios para ejecutar el proyecto localmente.

## Requisitos

PHP >= 8.0<br>
Composer<br>
Node.js >= 14.x<br>
NPM o Yarn<br>
Servidor de base de datos (MySQL)<br>
Instalación<br>

## Quick install

Clonar el repositorio:

```bash
git clone https://github.com/GermanVq/laravel-to-do-list.git

cd laravel-to-do-list

```

Instalando composer:

```bash
composer install

```

Copiar el archivo de configuración:

```bash
cp .env.example .env

```

Generar la clave de la aplicación:

```bash
php artisan key:generate

```

Configurar la base de datos:

Abrir el archivo .env y configurar las credenciales de la base de datos.
`

Ejecutar las migraciones y semillas:

```bash
php artisan migrate

```

Instalar dependencias de frontend:

```bash
npm install
```
o

```bash
yarn
```

Corremos dependencias de front

```bash
npm run dev
```

Ejecución
Para ejecutar el servidor de desarrollo de Laravel, utiliza el siguiente comando:

```bash
php artisan serve
```

El servidor se ejecutará por defecto en http://localhost:8000.

## Quick install Docker

Clonar el repositorio:

```bash
git clone https://github.com/GermanVq/laravel-to-do-list.git

cd laravel-to-do-list

```

Mondando contenedor

```bash
docker compose up -d
```

Ejecutando Composer

```bash
docker exec -it php_todo composer install
```

Copiar el archivo de configuración:

```bash
cp .env.example .env

```

Generar la clave de la aplicación:

```bash
php artisan key:generate

```

Ejecutar las migraciones y semillas:

```bash
php artisan migrate

```

Instalar dependencias de frontend:

```bash
npm install
```

o

```bash
yarn
```

Corremos dependencias de front

```bash
npm run dev
```

Ejecución
Para ejecutar el servidor de desarrollo de Laravel, utiliza el siguiente comando:

```bash
php artisan serve
```

El servidor se ejecutará por defecto en http://localhost:8000.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
