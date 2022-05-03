<h1 align="center">Prueba Red Capital</h1>
<p align="center">
</p>

## Acerca del Proyecto
Este proyecto realizado para Red Capital consta de los siguientes requerimientos:

### Requisitos Funcionales:
- Login de Usuario.
- Los usuarios deben tener roles y permisos.
- El sistema debe tener Menús y Sub-Menús.
- Cargar archivos al sistema.
- Histórico de los archivos con opción de descargar.

### Requisitos No Funcionales:
- Laravel 6+.
- PHP-UNIT.
- Eloquent.
- GIT.

## Desarrollo del Sistema
Tomando en consideración los requerimientos solicitados se comenzó instalando las herramientas necesarias para el sistema. Que fueron las siguientes:
- Laragon: Como servidor local.
- MySql 8.0.19: Como gestor de Base de Datos.
- PHP 7.4.19: Lenguaje de programacion.
- Composer 2.0.12: Para gestionar Laravel.
- Laravel 6.20.26: Framework de PHP
- Visual Studio Code: IDE.

Después, se definieron las tareas a realizar según los requerimientos solicitados en el documento. Las cuales se resumen en:

<b>Tareas Iniciales:</b>
- Crear repositorio en Github.
- Craer proyecto de Laravel.
- Diseñar la BD.

<b>Tareas en el proyecto:</b>
- Crear el login:
	- Parte visual.
	- Controlador del login.
	- Middleware de login.
- Interfaz de usuario:
	- Menús.
	- Sub Menús.
	- Controladores de los menús.
- Subir Archivos:
	- Interfaz visual.
	- Controlador.
- Migrar la BD.
- Seeders (Para los modelos que lo requieren).
- Mensajes del sistema.

### Diseño de la Base de Datos
Se creó un Diagrama de Entidad-Relación para retratar los requisitos solicitados. El diagrama es el siguiente:

![Image text](https://github.com/Guren94/prueba_redcapital/blob/master/Capturas/diagrama%20bd%20fondo.png)

### Tareas en el proyecto

Una vez desarrolladas las tareas iniciales, siguiendo las buenas prácticas, asegurando tener un control de errores y una codificación limpia, se realizaron las pruebas correspondientes para comprobar de que el sistema funciona correctamente, en el procedimiento que se describe acontinuación:

En la carga de archivos se realizaron las pruebas de testeo creando un error intencionado, como se observa en la siguiente imagen:

![Image text](https://github.com/Guren94/prueba_redcapital/blob/master/Capturas/Codigo%20Ejemplo%20testeo.PNG)

Arrojando el siguiente mensaje una vez ejecutado:

![Image text](https://github.com/Guren94/prueba_redcapital/blob/master/Capturas/Error%20Archivos.PNG)

En el caso de que se suba el archivo correctamente se mostrará el siguiente mensaje:

![Image text](https://github.com/Guren94/prueba_redcapital/blob/master/Capturas/Archivo%20Cargado%20Correctamente.PNG)

Una vez se carguen los archivos, se puede acceder a ellos desde el histórico para <u>ver y descargar</u>. (El histórico tiene una vista definida según los permisos que el usuario posea para ver el histórico ya sea unicamente el propio o el del sistema).

Los archivos se almacenan de la siguiente forma:

![Image text](https://github.com/Guren94/prueba_redcapital/blob/master/Capturas/Archivos%20de%20usuarios.PNG)

Se testearon las descargas y funcionaron correctamente como se aprecia en la imagen:

![Image text](https://github.com/Guren94/prueba_redcapital/blob/master/Capturas/Descarga%20del%20archivo.png)

## ¿Cómo ejecutar la app?

Para poder ejecutar corretamente esta aplicación se deben seguir los siguientes pasos:

### Paso 1

Tener instalado los requisitos mínimos de la aplicación, que son los siguientes:
- Un servidor local (como Laragon).
- Instalar Composer:
	- Fijar en el PATH la versión de php que referencia a composer en sistema. Si no se tiene con antelación, se puede realizar durante la instalación.
- Gestor de datos MySql acorde a la versión utilizada.

### Paso 2

Para obtener  el repositorio puede elegir una de las siguientes opciones:

1. Para descargar el proyecto se debe seleccionar el botón "code" y luego "Download ZIP" (En el caso de descargar y descomprimir el ZIP, asegurarse de borrar el "-master" del nombre de la carpeta del proyecto). Puede acceder al repositorio desde [aqui](https://github.com/Guren94/prueba_redcapital.git "link github").

2. Para clonar el proyecto debe utilizar en la terminal el siguiente comando: git clone https://github.com/Guren94/prueba_redcapital.git

Asegurese de descomprimir o clonar el proyecto en la carpeta correspondiente del servidor local, en el caso de Laragon la ruta es la siguiente: <b>C:\laragon\www</b>.

### Paso 3

Abrir su gestor de base de datos MySql y crear la base de datos <b>"prueba_redcapital"</b> y en el caso que tenga un usuario distinto al root y/o contraseña en su gestor de base de datos, debe modificar el archivo <b>".env"</b> con sus datos, en donde muestra la siguiente imagen. (Lo mismo aplica si decide nombrar la base de datos de otra forma)

![Image text](https://github.com/Guren94/prueba_redcapital/blob/master/Capturas/Archivo%20env.PNG)

### Paso 4

Iniciar la terminal en a carpeta del proyecto, en caso de utilizar Laragon (C:\laragon\www\prueba_redcapital) y ejecutar los siguientes comandos en orden.

- composer install
	- Es posible que requiera de modificar el archivo php.ini en caso que el proceso se vea interrumpido.
- php artisan migrate
- php artisan db:seed --class=DatabaseSeeder

### Paso 5

Para iniciar el sitio puede realizar click derecho en Laragon y luego desde la opción "www" del menú seleccionar el proyecto <b>prueba_redcapital</b>. O puede inicarlo desde la terminal con el siguiente comando (debe asegurar de ingresar el comando desde la ruta del proyecto, como por ejemplo C:\laragon\www\prueba_redcapital): php artisan serve

## Notas

- Existen cuatro usuarios de prueba que son los siguientes:
	- Email: maria@email.com | Password: 12345678 | Rol: Administrador | Permisos: Cargar Archivo Admin y Ver Historico Admin
	- Email: juan@email.com | Password: 12345678 | Rol: Administrador | Permisos: Cargar Archivo Admin
	- Email: pedro@email.com | Password: 12345678 | Rol: Funcionario | Permisos: Ver Historico
	- Email: elisa@email.com | Password: 12345678 | Rol: Usuario | Permisos: Cargar Archivo User y Ver Historico

- Para la carga de archivos no se consideró como gestionar los archivos duplicados para un mismo usuario. En el caso de realizar dicha acción se mantendrá en el histórico la carga de ambos archivos, con id`s distintas en la base de datos, pero el archivo mas reciente sera el unico almacenado, reemplazando al anterior. Como se muestra en la imagen.

![Image text](https://github.com/Guren94/prueba_redcapital/blob/master/Capturas/Historico%20Archivos%20Repetidos.PNG)

## Licencia

Este proyecto esta bajo el uso de la licencia [MIT license](https://opensource.org/licenses/MIT).
