# Project MOVIE MAGIC WEB / BACKEND
## Start project step by step
 1. Modify the file .env.example to .env
 2. modify in file .env the variable: 
    ```
    DB_DATABASE=[Your database]
    DB_USERNAME=[Your user db]
    DB_PASSWORD=[Your password db] 
    ```   
 3. run command: composer install
 4. run command: php artisan key:generate 
 6. run command: php artisan l5-swagger:generate    
 6. run command: php artisan migrate
 7. run command: php artisan passport:install
 8. run command: php artisan serve

# technology used
 - Passport Laravel
   https://laravel.com/docs/7.x/passport
 - L5-Swagger
   https://github.com/DarkaOnLine/L5-Swagger

# dependence's

