# Laravel Redirection

This package design for redirects missing (404) URLs to new URLs.

When redesigning an old site into a new one your URLs may change. If your old site URLs were popular you probably want to retain your SEO worth. One way of doing this is by providing permanent redirects from your old URLs to your new URLs.

A package for handling redirects via database.


### Example
From `example.com/non-existing-page` to `example.com/existing-page`

From `example.com/old-page` to `example.com/new-page`

From `example.com/old/about-us` to `example.com/new/about-us`


## Installation
You can install the package via composer.

`composer require kmlpandey77/laravel-redirection`

The package will automatically register itself.

Next you must register the `\Kmlpandey77\Redirection\Http\Middleware\Redirector` middleware:


```php
// app/Http/Kernel.php

protected $middleware = [
    ...
    \Kmlpandey77\Redirection\Http\Middleware\Redirector::class,
];
```

Publish the config file with:

`php artisan vendor:publish --provider="Kmlpandey77\Redirection\RedirectionServiceProvider" --tag="config"`

You can create the `redirections` table by running:

php artisan migrate

## Usage
You just have to add an entry to the redirects links in the database by using `example.com/admin/redirects`. And you can change route link, prifix, and middleware in config

```php

return [
    /**
     * By defult route is `admin`
     *
     */
    'prefix' => 'admin',

    /**
     * Defining middleware for route
     */

    'middleware' => [
        'web',
        // 'auth' // or admin
    ],

    /**
     *
     */
    'route_link' => 'redirects'
];

```

## Changelog

## Credits

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

