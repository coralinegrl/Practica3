# Vue 3, Laravel 10 y Tailwind CSS - Proyecto Móvil

Este proyecto es una aplicación web que utiliza Vue 3 para el frontend, Laravel 10 para el backend con API Restful, y Tailwind CSS para el diseño.

## Requisitos Previos

Para comenzar, asegúrate de tener instalado:

- [XAMPP](https://www.apachefriends.org/index.html) (incluye PHP, MySQL, phpMyAdmin)
- [Composer](https://getcomposer.org/) (gestor de dependencias de PHP)
- [Node.js y npm](https://nodejs.org/)
- [Git](https://git-scm.com/) (sistema de control de versiones)

Además, debes clonar este repositorio, copiar el link y pegarlo en el editor de código (por ejemplo en visual studio code, en el apartado que dice 'clonar repositorio').

Configuración del Entorno de Desarrollo
## Paso 1: Instalar Laravel

En la terminal, instala Composer y navega al directorio del proyecto:

```bash
cd Taller2
composer install

```

## Paso 2: Configuración de XAMPP y Base de Datos

-Inicia XAMPP y hay que asegurar de que MySQL y Apache funcionen, es decir, se debe abrir la aplicación (XAMPP Control Panel) y apretar 'Start' en las primeras dos filas.

-Abre phpMyAdmin en http://localhost/phpmyadmin o simplemente apretando el botón 'Admin' en la fila My SQL.

-Se debe crear la base de datos y llamarla 'taller2'.

-Copia el archivo '.env.example' y pégalo creando otro llamado '.env'. Actualiza el archivo .env en la raíz del proyecto de Laravel con las credenciales de la base de datos (lo mismo del archivo de ejemplo):


```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=taller2
DB_USERNAME=root
DB_PASSWORD=
```

SIN CONTRASEÑA

## Paso 3: Instalar Dependencias de Laravel
Ejecuta dentro del proyecto Laravel:

```bash
composer install
php artisan key:generate
php artisan migrate
```

## Paso 4: Instalar Vue 3
Instala Vue 3 en el proyecto:

```bash
npm install vue@next
```

## Paso 5: Instalar Tailwind CSS

```bash
npm install -D tailwindcss postcss autoprefixer
npx tailwindcss init
```

Para asegurarte de que esté todo instalado:

```bash
npm i
```
## Paso 6: Añadir seeders
Para rellenar los seeders creados, escribe en la terminal:

```bash
php artisan db:seed
```

## Paso 7: Desarrollo del Frontend
Para ejecutar el frontend, escribe en la terminal:

```bash
npm run dev
```

## Paso 8: Ejecutar el Servidor de Desarrollo de Laravel
Inicia el servidor de desarrollo de Laravel:

```bash
php artisan serve
```
Esto va a inicializar tanto el backend como el frontend visitando: http://localhost:8000

## Paso 9: Instalar Ionic
Para ejecutar la aplicación móvil, necesitas tener Ionic instalado. Si aún no lo has instalado, puedes hacerlo utilizando el siguiente comando:


```bash
npm install -g @ionic/cli

```
Ahora ejecutalo:

```bash
ionic serve
```



### Consideraciones Adicionales

Para agregar autenticación JWT:

```bash
composer require tymon/jwt-auth
```

Para generar la clave secreta:

```bash
php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"
php artisan jwt:secret
```

Para probar la API, puedes usar [Postman](https://www.postman.com/downloads/).
