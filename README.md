This laravel application is running MySQL v5.7.7 and higher, if your MySQL version below then this, kindly uncomment the 'Schema::defaultStringLength(191);' in app\Providers\AppServiceProvider.php

The project requies the user to login / register as an user to enjoy the CRUD for user management. 

There is a pdf 'sample output' inside the main folder for you to review the overall output of this application. 

You may import the back-end-assessment-v5.sql to your MySQL Database

Recommended command before you start the project: 

1. composer update
2. composer require laravel/passport
3. php artisan migrate
4. php artisan passport:install
5. php artisan serve
