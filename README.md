This is A Laravel Image UPloader built Using PHP Laravel Framework

Laravel Version 10.x
PHP version used : "php": "^8.1"

NOTE: all the commands i have put in <>
create your project with
Go to directory where you want your project(if you are running xamp server then clone it inside htdocs folder):
           

1) Clone this repository  
 git clone  https://github.com/manjucodes/Laravel_Imageuploader.git
 

 2) cd projectName ---> change to the project working directory

 3) Install Composer Dependencies
    This will actuallu install all project dependencies of the laravel project, reading it from composer.json
    type command 
    <composer install> ------------> installs all necessary packages

 4)   Create .env from copying from .env.example.env

 5) Setup your local database credentials for your project in .env file
   DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE="database_name"
    DB_USERNAME=yourdatabaseusername
    DB_PASSWORD=yourdatabasepassword

6) Once your credentials are in the .env file, now you can migrate your database/
type command:
   <php artisan migrate>------> migrates your database.

7)All good to go run <php artisan serve>
    Your project will start running.
    





