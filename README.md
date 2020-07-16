# Project MOVIE MAGIC WEB / BACKEND
## Start project step by step
 * Verify install in your machine
    [PHP >=7.2.5](https://www.php.net/downloads.php) | [composer] (https://getcomposer.org/)

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
 - [Passport Laravel]
   (https://laravel.com/docs/7.x/passport)
 - [L5-Swagger]
   (https://github.com/DarkaOnLine/L5-Swagger)
 - [Laravel 7] 
   (https://laravel.com/docs/7.x)
# dependence's
 - PHP >=7.2.5
 - composer 

 # Documents
1. O desenvolvimento deste projeto iniciou-se primeiramente com a modelagem de banco de dados:
Onde temos 2(Duas) tabelas principais e 1(Um) intermediária para armazenamento de muitos para muitos, segue o modelo na imagem 01.
# <img src="https://github.com/Jorgewra/movie-magic-web/blob/master/docs/mer-db.png" width="300">
2. A criação das apis Rest, onde adotamos uma autenticação por token de acesso `oauth2` disponibilizado pela API do Laravel a biblioteca `Laravel Passport`, nesse conceito de autenticação por credênciais, então é usado um `ID` e uma `CHAVE SECRETA`, onde é passado ao backend para realizar a autenticação e é retornado um `TOKEN` válido para o acesso das API`s.
O uso dessa estratégia, foi adotado pelo fato de não haver autenticação com senhas de usuários cadastrados.
3. A biblioteca  `L5 Swagger` facilita a documentação, organização das API`s Rest e também nos testes sem uso de programas como o POSTMAN para documentações de coleções.

[DOCUMENTAÇÃO WORD] (https://github.com/Jorgewra/movie-magic-web/blob/master/docs/DOC_USE.docx)
[POSTMAN COLLECTIONS API] (https://github.com/Jorgewra/movie-magic-web/blob/master/docs/MAGIC-WEB.postman_collection.json)


