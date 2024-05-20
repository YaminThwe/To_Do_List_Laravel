# To-Do List Application

This is a simple To-Do List application built with Laravel as assignment purpose.

## Prerequisites

- XAMPP: [Download XAMPP](https://sourceforge.net/projects/xampp/)
- PHP: [Download PHP](https://windows.php.net/download#php-8.3)
- Composer: [Download Composer](https://getcomposer.org/download/)

## Installation

1. **Install XAMPP**: Follow the instructions on the XAMPP download page to install XAMPP.
2. **Install PHP**: Follow the instructions on the PHP download page to install PHP.
3. **Install Composer**: Follow the instructions on the Composer download page to install Composer.
4. **Create Laravel Project**: Open a terminal and run the following command to create a new Laravel project.
    ```sh
    composer create-project --prefer-dist laravel/laravel your-project-name
    ```

## Configuration

1. **Enable PHP Extensions**:
    Uncomment the following lines in your `php.ini` file (found in your PHP installation directory).
    ```ini
    extension=zip
    extension=fileinfo
    extension=pdo_mysql
    extension=mysqli
    ```

2. **Set Up Database**:
    - Start XAMPP and open phpMyAdmin at [http://localhost/phpmyadmin/](http://localhost/phpmyadmin/).
    - Create a new database named `to_do_list_laravel`.

3. **Configure Laravel**:
    Open the `.env` file in your Laravel project directory and update the database settings.
    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=to_do_list_laravel
    DB_USERNAME=root
    DB_PASSWORD=
    ```

## Migrations

Run the following command to create the necessary database tables.
```sh
php artisan migrate
