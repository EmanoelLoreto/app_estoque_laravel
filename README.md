# Backend 
How to raise the project backend


## Start cloning the backend
```
git clone https://github.com/EmanoelLoreto/app_estoque_laravel/tree/master.git
```


## Database project
Create a database with Postgres or mySql.

Access console MySql:

```
mysql -u root -p
create database if not exists db_estoque_laravel;
```

Check that the database has been created:
```
show databases;
```


## Migrations and Populate database
*Check connection in .env with the database*

Generate a .env:
```
cp .env.example .env
```
And change the conection part for this:

DB_CONNECTION=mysql *or the database you used*
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_estoque_laravel
DB_USERNAME=root
DB_PASSWORD= *DBPassword*

Access the folder and execute:
```
composer install
```


First time running migrations:
```
php artisan migrate
```
Next times:
```
php artisan migrate:fresh
```


Populate the database:
```
php artisan db:seed
```


## Compiles and hot-reloads for development
```
php artisan serve
```

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).