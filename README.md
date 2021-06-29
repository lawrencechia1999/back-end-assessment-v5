This laravel application is running MySQL v5.7.7 and higher, if your MySQL version below then this, kindly uncomment the 'Schema::defaultStringLength(191);' in app\Providers\AppServiceProvider.php

You may import the back_end_assessment_v5.sql to your MySQL Database, the file is given in the main folder

The project requies the user to login / register as an user to enjoy the CRUD for user management. 

There is a pdf 'sample output' inside the main folder for you to review the overall output of this application. 


Recommended command before you start the project: 

1. composer update
2. composer require laravel/passport
3. php artisan migrate
4. php artisan passport:install
5. php artisan serve

That's all from me, hope you enjoy my application, Thank you. 
