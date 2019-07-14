# tech-blog
A simple technology blog built with Laravel

INSTALLATION
---------------------------------------------------------------------------------

Clone the project, create the "tech-blog" schema and run the following commands:

```bash
composer update
```

```bash
cp .env.example .env
```

```bash
php artisan key:generate
```

```bash
php artisan migrate
```

```bash
composer dump-autoload
```

```bash
php artisan db:seed
```

```bash
php artisan cache:clear
```
