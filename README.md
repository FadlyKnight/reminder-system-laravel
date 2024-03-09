<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


## HOW TO INSTALL / USE

- git clone 
```bash
  git clone https://github.com/FadlyKnight/reminder-system-laravel
```
- run composer install
```bash
  composer install
```
- copy .env.example
```bash
  cp .env.example .env
```
- config your .env
```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
    
    DIGITAL_ENVISION_BASE_URL=https://email-service.digitalenvision.com.au
```
- after config database, run these command
```bash
  php artisan migrate:fresh --seed
```
- then run unit test
```bash
  php artisan test
```
- if all running well, run command for schedule work
    - if on your local run
    ```bash
    php artisan schedule:work
    ```
    - if on server run, (depend on your server) , read more [docs](https://laravel.com/docs/10.x/scheduling#running-the-scheduler)
    ```bash
    php artisan schedule:run
    ```


## LAST WORD
THANKS

any question ? contact me on : fadlyknight@gmail.com




