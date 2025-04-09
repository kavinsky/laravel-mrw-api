# An unofficial API implementation for MRW SOAP API.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/kavinsky/mrw-api.svg?style=flat-square)](https://packagist.org/packages/kavinsky/mrw-api)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/kavinsky/mrw-api/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/kavinsky/mrw-api/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/kavinsky/mrw-api/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/kavinsky/mrw-api/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/kavinsky/mrw-api.svg?style=flat-square)](https://packagist.org/packages/kavinsky/mrw-api)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require kavinsky/mrw-api
```

Configure `mrw` entry in your `config/services.php` file:

```php
return [
    // ...
    'mrw' => [
        'wsdl' => env('MRW_WSDL'),
        'auth' => [
            'client_code' => env('MRW_CLIENT_CODE'),
            'client_key' => env('MRW_CLIENT_KEY'),
            'center_code' => env('MRW_CENTER_CODE'),
            'franchise_code' => env('MRW_FRANCHISE_CODE'),
        ],
        // Options to pass to the Guzzle Client
        'httpOptions' => [],
    ]
]
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="mrw-api-views"
```

## Usage

```php
$mRW = new Kavinsky\MRW();
echo $mRW->echoPhrase('Hello, Kavinsky!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Ignacio Muñoz Fernandez](https://github.com/kavinsky)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
