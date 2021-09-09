# Laravel Create DB

[![Latest Version on Packagist](https://img.shields.io/packagist/v/arondeparon/laravel-create-db.svg?style=flat-square)](https://packagist.org/packages/arondeparon/laravel-create-db)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/arondeparon/laravel-create-db/Check%20&%20fix%20styling?label=code%20style)](https://github.com/arondeparon/laravel-create-db/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/arondeparon/laravel-create-db.svg?style=flat-square)](https://packagist.org/packages/arondeparon/laravel-create-db)

This package adds an easy-to-use Artisan command to your application that allows
you to create a new database schema.

The package is currently simple by design: there are no options apart from defining the schema and connection. If you need anything else, please submit a pull request.


## Installation

You can install the package via composer:

```bash
composer require arondeparon/laravel-create-db
```

## Usage

```php
php artisan migrate:create-database mydatabase [--connection myconnection]
```

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Credits

- [Aron Rotteveel](https://github.com/ArondeParon)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
