# Laravel 8 - Course
**Requeriments**
- PHP 8.0+
- MySQL 15.1+
- XAMPP 3.3.0+ (include PHP, MySQL (MariaDB) and Apache Server)
- Laravel 8.0+
- Composer 2.2.0+
- NodeJS 14.16.1+
- Visual Studio Code 1.64.0+

**For install**
1. Clone repository:
```
git clone https://github.com/bryansbr/laravel_8-course.git
```
2. Open project in Visual Studio Code:
```
code .
```
3. Download the NodeJS dependencies and execute the project in developer mode:
```
npm i && npm run dev
```
4. Download the Laravel dependencies via Composer:
```
composer install
```
5. Rebuild `.env` file from `.env.example` file and generate key:
```
cp .env.example .env
php artisan key:generate
```
6. Modify the database name in the `.env` file:
```
DB_DATABASE=users_crud_laravel
```
7. Open XAMPP and create the database in the shell:
```
mysql -u root -h localhost -p
CREATE DATABASE users_crud_laravel;
```
8. Run the Laravel migrations:
```
php artisan migrate
```
9. Create the table `countries` in the database via the SQL script in the folder `database/script`.

10. In a new terminal, execute the Laravel server:
```
php artisan serve
```
_¡Enjoy the application!_
