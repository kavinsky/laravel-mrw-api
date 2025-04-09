# An unofficial API implementation for MRW SOAP API for Laravel.

Package still in development, do not use in production environments.

## Installation

You can install the package via composer:

```bash
composer require kavinsky/laravel-mrw-api
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


## Usage

Still in progress. The package is not ready yet.


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
