# Laravel Vue.js Route

[![Latest Version on Packagist](https://img.shields.io/packagist/v/vmitchell85/vue-route.svg?style=flat-square)](https://packagist.org/packages/vmitchell85/vue-route)
[![Total Downloads](https://img.shields.io/packagist/dt/vmitchell85/vue-route.svg?style=flat-square)](https://packagist.org/packages/vmitchell85/vue-route)

Laravel Vue.js Route is a macro added onto the Route class to make loading a Vue.js component as the whole view simple.

Inspired by `Route::view()`, which returns a blade view bypassing a controller, The `Route::vue()` function will, by default, load a specified Vue.js component into the default layout's `content` section.

## Installation

You can install the package via composer:

```bash
composer require vmitchell85/vue-route
```

## Usage

After installing the package via composer you can just call the new `vue` macro from the `Route` facade.

``` php
Route::vue('/my-route-path', 'users-index');
```

The macro automatically assumes you want to use the `layouts.app` layout file and injects the Vue.js component into the `content` section.

If you would like to specify the layout file and/or section you want to use additional parameters can be added:

``` php
Route::vue('/my-route-path', 'users-index', 'layouts.fancy', 'body');
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Vincent Mitchell](https://github.com/vmitchell85)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).