# Plugin helper for use with onecentlin/laravel-adminer

[![Latest Version on Packagist](https://img.shields.io/packagist/v/headerx/laravel-adminer-plugins.svg?style=flat-square)](https://packagist.org/packages/headerx/laravel-adminer-plugins)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/headerx/laravel-adminer-plugins/run-tests?label=tests)](https://github.com/headerx/laravel-adminer-plugins/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/headerx/laravel-adminer-plugins/Check%20&%20fix%20styling?label=code%20style)](https://github.com/headerx/laravel-adminer-plugins/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/headerx/laravel-adminer-plugins.svg?style=flat-square)](https://packagist.org/packages/headerx/laravel-adminer-plugins)


## Installation

You can install the package via composer:

```bash
composer require headerx/laravel-adminer-plugins
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="HeaderX\AdminerPlugin\AdminerPluginServiceProvider" --tag="adminer-plugins-config"
```

This is the contents of the published config file:

```php
return [
    'plugins' => [
        'AdminerTablesFilter',
        'AdminerFrames',
        'AdminerDumpAlter',
        'AdminerDumpJson',
        'AdminerJsonColumn',
    ],
];
```

## Usage
- First ensure that that you've set up onecentlin/laravel-adminer [prerequisites](https://github.com/onecentlin/laravel-adminer#prerequisite)
- (Optionally) publish config file with `php artisan vendor:publish --provider="HeaderX\AdminerPlugin\AdminerPluginServiceProvider" --tag="adminer-plugins-config"`
- That's it! You don't have to do anything else, Adminer will call the [adminer_object()](https://github.com/headerx/laravel-adminer-plugins/blob/a853a2ddf7a3b8f804752b2a5e09e7b772efcfce/src/helper.php#L4) helper on its own.

## Todo
- [ ] Allow passing of parematers from config to plugin instantiation (Without any breakage on zero config installs)

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

- [inmanturbo](https://github.com/inmanturbo)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
