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
3. Open the terminal, download the NodeJS dependencies and execute project in developer mode:
```
npm i && npm run dev
```
4. Open XAMPP and create the database in the shell:
```
mysql -u root -h localhost -p
CREATE DATABASE users_crud_laravel;
```
5. Create the table `countries` in the database via the SQL script in the folder `database/script`.

6. Run the Laravel migrations:
```
php artisan migrate
```
7. In a new terminal, execute the Laravel server:
```
php artisan serve
```

