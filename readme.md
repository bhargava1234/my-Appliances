<h1>Laravel Crawler sample application</h1>


## Installation

```bash
create database
git clone  https://github.com/bhargava1234/my-Appliances.git
cd my-Appliances
php -r "file_exists('.env') || copy('.env.example', '.env');"
composer install
php artisan migrate
php artisan db:seed
php artisan serve

```

## Run crawler

```bash
php artisan import:dishwashers
php artisan import:smallAppliances
```


```bash
php artisan schedule:run
```
