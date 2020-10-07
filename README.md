# proyecto-final

#Pre-requisitos

1) Es necesario tener previamente instalado lo siguiente:

2) Un editor de código, para este desarrollo se utilizó la última versión de Visual Studio Code https://code.visualstudio.com/
3) Un programa que levante un servidor Apache, para este desarrollo se utilizó XAMPP que además permite manejar bases de datos con PHP my admin https://www.apachefriends.org/es/index.html
Php 7.2.29
4) Laravel 7.* la documentación de cómo hacerlo la encuentras en https://laravel.com/docs/7.x#installing-laravel

#Instalación

1) Abrimos nuestro VSC y colocamos en la terminal la siguiente ruta git clone https://github.com/erikaMirella91/proyecto_final.git
2) Una vez que hayamos descargado el proyecto, lo abrimos dentro de la misma aplicación.
3) En seguida, corremos el comando: composer update
4) Mientras se actualiza el proyecto, iniciamos nuestra aplicación XAMPP y corremos el servicio de apache y MySql.
5) En la consola ejecutar los siguentes comandos $ cp .env.example .env y despues $php artisan key:generate
6) Abrimos el navegador de preferencia e ingresamos a la ruta https://localhost/phpmyadmin/
7) Una vez que ingresamos generamos una base de datos llamada "maestros"
8) Volvemos a nuestro VSC y ejecutamos php artisan migrate para generar las tablas que tiene nuestro proyecto.
9) Terminadas las migraciones ejecutamos php artisan serve
10) Ahora volvemos a nuestro navegador y colocamos 127.0.0.1:8000/ que es la ruta por default que nos levanta el servidor.
11) Y listo!

