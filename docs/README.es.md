# Sobre Midnight

Midnight es una aplicación web construida sobre el framework Laravel, destinada a proporcionar un servicio de gestión de reseñas y usuarios.

## Idiomas

Esta documentación también está disponible en estos idiomas:

- [Inglés](../README.md)

## Tabla de contenidos

- [Características principales](#características-principales)
- [Requisitos](#requisitos)
  - [Requisitos opcionales](#requisitos-opcionales)
- [Instalación](#instalación)
- [Licencia](#licencia)


## Características principales 

- Creación y gestión de reseñas.
- Creación y gestión de usuarios.
- Sistema de roles de usuario.
- Comentarios.
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
    >Mientras el proyecto descarga todo lo que necesita, sigue con el siguiente paso.

3. Copia el archivo .env.example y pégalo con el nombre .env :

    ```
    copy .env.example .env
    ```

    >Recuerda hacerlo en la consola y estar situado sobre la carpeta del proyecto.

4. Busca y sustituye los valores del archivo .env por estos:

    DB_USERNAME=**USUARIO DE PHPMYADMIN** (por defecto es root)

    DB_PASSWORD=**CONTRASEÑA DE PHPMYADMIN** (por defecto está vacío)

5. En XAMPP crea una base de datos llamada **midnight**.

    >Tienes que establecer la codificación de caráteres a **utf8mb4_unicode_ci**
    
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

    >Al terminar deja la consola abierta, pero si la has cerrado por accidente abre una nueva y escribe **php artisan serve**
7. Abre el navegador y escribe en la URL:

    http://localhost:8000


## Licencia

Midnight es un proyecto bajo la [Licencia MIT](https://opensource.org/licenses/MIT).
