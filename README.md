# Laravel Openbrewerydb API

[![Latest Version on Packagist](https://img.shields.io/packagist/v/alexjustesen/laravel-openbrewerydb-api.svg?style=flat-square)](https://packagist.org/packages/alexjustesen/laravel-openbrewerydb-api)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/alexjustesen/laravel-openbrewerydb-api/run-tests?label=tests)](https://github.com/alexjustesen/laravel-openbrewerydb-api/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/alexjustesen/laravel-openbrewerydb-api/Check%20&%20fix%20styling?label=code%20style)](https://github.com/alexjustesen/laravel-openbrewerydb-api/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/alexjustesen/laravel-openbrewerydb-api.svg?style=flat-square)](https://packagist.org/packages/alexjustesen/laravel-openbrewerydb-api)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require alexjustesen/laravel-openbrewerydb-api
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-openbrewerydb-api-config"
```

## Usage

### Auto Complete Search for Breweries

```php
use AlexJustesen\OpenbrewerydbApi\OpenbrewerydbApi;

$request = OpenbrewerydbApi::autoComplete('broad');

$response = $request->json();
```


### Get a Brewery

```php
use AlexJustesen\OpenbrewerydbApi\OpenbrewerydbApi;

$request = OpenbrewerydbApi::get('broad-brook-brewing-company-suffield');

$response = $request->json();
```

### List Breweries

```php
use AlexJustesen\OpenbrewerydbApi\OpenbrewerydbApi;

$request = OpenbrewerydbApi::list();

$response = $request->json();
```

### Search for Breweries

```php
use AlexJustesen\OpenbrewerydbApi\OpenbrewerydbApi;

$request = $request = OpenbrewerydbApi::search('broad');

$response = $request->json();
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Alex Justesen](https://github.com/alexjustesen)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
