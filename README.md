This is A Laravel Image UPloader built Using PHP Laravel Framework

Laravel Version 10.x
PHP version used : "php": "^8.1"

create your project with
Go to directory where you want your project:
           

1) Clone this repository  
 git clone  repository name

Install Laravel breeze(package) for authetication through composer.
------->composer require laravel/breeze --dev
------->php artisan breeze:install
 
--------->php artisan migrate
---------->npm install
----------->npm run dev
This above package will automatically cretaes user table. in your database after migration

3) Database in .env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=databasename
DB_USERNAME=username
DB_PASSWORD=databasepassword

4) Now lets create migrations and create images table:
   php artisan migrate 
   This will create images table in your database.

   All ready to go run your project through 
   -----> Php artisan serve.



