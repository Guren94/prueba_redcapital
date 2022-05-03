<h1 align="center">Prueba Red Capital</h1>
<p align="center">
</p>

## Acerca del Proyecto
Este proyecto realizado para Red Capital consta de los siguientes requerimientos:

### Requisitos Funcionales:
- Login de Usuario.
- Los usuarios deben tener roles y permisos.
- El sistema debe tener Menus y Sub-Menus.
- Cargar archivos al sistema.
- Historico de los archivos con opcion de descargar.

### Requisitos No Funcionales:
- Laravel 6+.
- PHP-UNIT.
- Eloquent.
- GIT.

## Desarrollo del Sistema
Tomando en consideracion los requerimientos solicitados se comenzo instalando las herramientas necesarias para el sistema. Que fueron las siguientes:
- Laragon: Como servidor local.
- MySql 8.0.19: Como gestor de Base de Datos.
- PHP 7.4.19: Lenguaje de programacion.
- Composer 2.0.12: Para gestionar Laravel.
- Visual Studio Code: IDE.

Despues se definieron las tareas a realizar segun los requerimientos solicitados en el documento. Las cuales se resumen en:

<b>Tareas Iniciales:</b>
- Crear repositorio en github.
- Craer Proyecto de Laravel.
- Diseñar la BD.

<b>Tareas en el proyecto:</b>
- Crear el login:
	- Parte visual.
	- Controlador del login.
	- Middleware de login.
- Migrar la BD.
- Seeders.
- Interfaz de usuario:
	- Menus.
	- Sub Menus.
	- Controladores de los menus.
- Subir Archivos:
	- Interfaz visual.
	- Controlador.
- Mensajes del sistema.

### Diseño de la Base de Datos
Se creo un Diagrama de Entidad-Relacion para retratar los requisitos solicitados. El diagrama es el siguiente:

![Image text](https://github.com/Guren94/prueba_redcapital/blob/master/Capturas/diagrama%20bd%20fondo.png)

### Tareas en el proyecto

Una vez desarrolladas las tareas iniciales se continuo con las siguientes etapas del proyecto, siguiendo las buenas practicas, asegurando tener un control de errores y una codificacion limpia. Se realizaron las pruebas correspondientes para comprobar de que el sistema funciona correctamente.

En la carga de archivos se realizaron las pruebas de testeo creando un error intencionado como se ve en la siguiente imagen.

![Image text](https://github.com/Guren94/prueba_redcapital/blob/master/Capturas/Codigo%20Ejemplo%20testeo.PNG)

Arrojando el siguiente mensaje una vez ejecutado.

![Image text](https://github.com/Guren94/prueba_redcapital/blob/master/Capturas/Error%20Archivos.PNG)

En el caso de que se suba el archivo correctamente se mostrara el siguiente mensaje.

![Image text](https://github.com/Guren94/prueba_redcapital/blob/master/Capturas/Archivo%20Cargado%20Correctamente.PNG)

Una vez se carguen los archivos, se puede acceder a ellos desde el historico para ver y descargar. Siempre que el usuario tenga permisos para ver el historico ya sea unicamente el propio o el del sistema.

Los archivos se almacenan de la siguiente forma.

![Image text](https://github.com/Guren94/prueba_redcapital/blob/master/Capturas/Archivos%20de%20usuarios.PNG)

Se testearon las descargas y funcionaron correctamente como se aprecia en la imagen.

![Image text](https://github.com/Guren94/prueba_redcapital/blob/master/Capturas/Descarga%20del%20archivo.png)

## Como ejecutar la app

Para poder ejecutar corretamente esta aplicacion se deben seguir los siguientes pasos:

### Paso 1

Tener instalado los requisitos minimos de la aplicacion, que son los siguientes:
- Composer instalado.
- Gestor de datos MySql acorde a la version utilizada.
- Un servidor local (como Laragon).

### Paso 2
Para descargar el proyecto se debe seleccionar el boton "code" y luego "Download ZIP". Para clonar el proyecto debe utilizar el siguiente enlace: https://github.com/Guren94/prueba_redcapital.git

Puede acceder al repositorio desde [aqui](https://github.com/Guren94/prueba_redcapital.git "link github"). 

Asegurese de descomprimir o clonar el proyecto en la carpeta correspondiente del servidor local, en el caso de Laragon la ruta es la siguiente: <b>C:\laragon\www</b>.
En el caso de descargar y descomprimir el ZIP, asegurarse de borrar el "-master" del nombre de la carpeta del proyecto.

### Paso 3

Abrir su gestor de base de datos MySql y crear la base de datos <b>"prueba_redcapital"</b> y en el caso que tenga un usuario distinto al root y/o contraseña en su gestor de base de datos, debe modificar el archivo <b>".env"</b> con sus datos, en donde muestra la siguiente imagen.

![Image text](https://github.com/Guren94/prueba_redcapital/blob/master/Capturas/Archivo%20env.PNG)

### Paso 4

Iniciar la terminal en a carpeta del proyecto, en caso de utilizar Laragon (C:\laragon\www\prueba_redcapital) y ejecutar los siguientes comandos en orden.

- php artisan migrate
- php artisan db:seed --class=DatabaseSeeder

### Paso 5

Para iniciar el sitio puede realizar click derecho en Laragon y luego desde la opcion "www" del menu seleccionar el proyecto <b>prueba_redcapital</b>. O puede inicarlo desde la terminal con el siguiente comando (debe asegurar de ingresar el comando desde la ruta del proyecto, como por ejemplo C:\laragon\www\prueba_redcapital): php artisan serve

## Notas

- Existen cuatro usuarios de prueba que son los siguientes:
	- Email: maria@email.com | Password: 12345678 | Rol: Administrador | Permisos: Cargar Archivo Admin y Ver Historico Admin
	- Email: juan@email.com | Password: 12345678 | Rol: Administrador | Permisos: Cargar Archivo Admin
	- Email: pedro@email.com | Password: 12345678 | Rol: Funcionario | Permisos: Ver Historico
	- Email: elisa@email.com | Password: 12345678 | Rol: Usuario | Permisos: Cargar Archivo User y Ver Historico

- Para la carga de archivos no se considero como actuar o gestionar los archivos duplicados para un mismo usuario. En el caso de realizar dicha accion se mantendra en el historico la carga de ambos archivos, con id`s distintas en la base de datos, pero el archivo mas reciente sera el unico almacenado, reemplazando al anterior. Como se muestra en la imagen.

![Image text](https://github.com/Guren94/prueba_redcapital/blob/master/Capturas/Historico%20Archivos%20Repetidos.PNG)

## Licencia

Este proyecto esta bajo el uso de la licencia [MIT license](https://opensource.org/licenses/MIT).
