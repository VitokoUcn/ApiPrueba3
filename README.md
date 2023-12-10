# Api para la prueba 3 

# Debe tener previamente instalado composer y PHP > 8.1.0 v para evitar futuros errores u problemas, una vez haya clonado el proyecto debera ejecutar en la terminal los siguientes comandos:

# composer install

Una vez ejecutado el comando, composer sera instalado en el proyecto.

# php artisan copy .env .example .env

Lo que hara este comando es copiar el archivo .en.example y lo nombrara como .env

# php artisan key:generate

Este comando establecera la APP_KEY en nuestro archivo .env

Ahora debemos configurar el archivo .env especificamente en los apartados de la base de datos.Debemos modificar lo siguiente:

DB_PORT = Depende del puerto asigando por usted en la configuraciuon de su base de datos(default: 3306)
DB_DATABASE = Aqui va el nombre de la base de datos creada en nuestro administrador de base de datos preferido.
DB_USERNAME = root
DB_PASSWORD = Es la contraseña que nostros asignamos en la instalación, en caso de utilizar Xampp, Laragon, etc.. Este campo se debe dejar vacio.
Una vez configurada la base de datos, en la terminal ejecutaremos los siguientes comandos: php artisan optimize

# php artisan migrate --seed

Este comando ejecutara las migraciones del proyecto y una vez creada las tablas en la fase de datos, dara paso a ejecutar los seeders que forman parte del estado predeterminado del sistema.

Una vez ejecutado el comando verificamos si las tablas fueron creadas con exito.

Ahora procederemos a ejecutar el BackEnd con los siguientes comandos:

# php artisan serve

# Con esto podremos disfrutar del BackEnd perteneciente a la prueba 3 
 
