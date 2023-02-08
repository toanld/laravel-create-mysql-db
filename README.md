## Installation

Require this package with composer. It is recommended to only require the package for development.

```shell
composer require toanld/laravel-create-mysql-db
```

### Syntax
Add to config/app.php 
```php
'providers' => [

        /*
         * Laravel Framework Service Providers...
         */
        //......
        \Toanld\Setup\SetupProvider::class

    ],
```

### Command

```shell
php artisan setup
```

