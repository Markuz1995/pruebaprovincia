# Proyecto Laravel de ABM de Provincia y API de Ciudades

Este proyecto Laravel está diseñado para proporcionar una aplicación web con funcionalidades de ABM (Alta, Baja y Modificación) para Provincias, así como una API RESTful para consultar Ciudades junto con sus respectivas Provincias. Además, incluye un comando personalizado para crear Ciudades desde la línea de comandos.

## Requisitos

- PHP >= 8.2
- Composer
- Laravel >= 11
- Base de datos compatible con Laravel MySQL
## Instalación

1. Clona este repositorio en tu máquina local:

   ```bash
   git clone <URL_del_repositorio>

2. Instala las dependencias

    ```bash
    git clone <URL_del_repositorio>

3. Configura las variables de entorno

    ```bash
    cp .env.example .env

4. Genera la clave generica de laravel
    
    ```bash
    php artisan key:generate


5. Correr las migraciones

    ```bash
    php artisan migrate

6. Correr los datos iniciales

    ```bash
    php artisan db:seed

Comandos para crear las ciudades

    ```bash
    php artisan create:city "Nombre_Ciudad, Nombre_Provincia"
    #ejemplo: php artisan create:city "Paraná, Entre Ríos"
