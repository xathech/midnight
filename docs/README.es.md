# Sobre Midnight

Midnight es una aplicación web basada en el framework Laravel, destinada a proporcionar un servicio de gestión de reseñas y usuarios.

## Idiomas

Esta documentación también esta disponible en estos idiomas:

- [Inglés](../README.md)

## Características principales 

- Creación y gestión de reseñas.
- Creación y gestión de usuarios.
- Buscador de reseñas con paginación y filtros opcionales.
- Sistema de comentarios.
- Paginas multidioma.

## Requisitos

- Servidor PHP XAMPP:

  - [Windows](https://www.apachefriends.org/download.html#download-windows)
  - [Linux](https://www.apachefriends.org/download.html#download-linux)
  - [macOS](https://www.apachefriends.org/download.html#download-apple)

- Gestor de dependencias Composer:

  - [Windows](https://getcomposer.org/doc/00-intro.md#installation-windows)
  - [Linux / Unix / macOS](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos)

### Requisitos opcionales:

- Controlador de versiones GIT:

  - [Windows](https://git-scm.com/download/win)
  - [Linux](https://git-scm.com/download/linux)
  - [macOS](https://git-scm.com/download/mac)

## Instalación

1. Descarga el zip del proyecto o [clónalo](https://git-scm.com/book/es/v1/Fundamentos-de-Git-Obteniendo-un-repositorio-Git#Clonando-un-repositorio-existente) 
    >Para clonarlo necesitas GIT.
2. Abre una consola de comandos [sobre la carpeta](https://www.interadictos.es/2014/07/07/abrir-carpeta-desde-cmd/) del proyecto y ejecuta:

    ```
    composer install
    ```
    >Espera hasta que el proyecto descargue todo lo que necesita.

3. Copia el archivo .env.example y pégalo con el nombre .env :

    ```
    copy .env.example .env
    ```

    >Recuerda estar situado sobre la carpeta del proyecto

4. Busca y sustituye los valores del archivo env por estos:

    APP_NAME=Midnight

    DB_DATABASE=midnight

    DB_USERNAME=**TU USUARIO DE PHPMYADMIN** (por defecto es root)

    DB_PASSWORD=**TU CONTRASEÑA DE PHPMYADMIN** (por defecto el campo está vacío)

5. Crea una base de datos llamada midnight.

    >Tienes que estableces la codificación de caráteres a **utf8_unicode_ci**
    
6. Ejecuta estos comandos:

    ```
    php artisan key:generate
    ```
    ```
    php artisan migrate
    ```
    ```
    php artisan serve
    ```

    >Al terminar deja la consola abierta, pero si la has cerrado por accidente vuelve a escribir **php artisan serve**
7. Abre el navegador y escribe en la URL:

    http://localhost:8000


## Licencia

Midnight es un proyecto bajo la [Licencia MIT](https://opensource.org/licenses/MIT).
