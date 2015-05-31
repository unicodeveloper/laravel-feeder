# Laravel-Feeder

> Laravel 5 Package to Display your status as an Open Source Evangelist

## Installation

[PHP](https://php.net) 5.4+ or [HHVM](http://hhvm.com) 3.3+, and [Composer](https://getcomposer.org) are required.

To get the latest version of Laravel DevStatus, simply add the following line to the require block of your `composer.json` file.

```
"busayo/laravel-feeder": "dev-master"
```

You'll then need to run `composer install` or `composer update` to download it and have the autoloader updated.

Once Laravel DevStatus is installed, you need to register the service provider. Open up `config/app.php` and add the following to the `providers` key.

* `'Busayo\DevStatus\DevStatusServiceProvider'`

#### Looking for a laravel 4 compatible version?

Chill, it's undergoing development :smiley_cat:


## Configuration

To get started, you'll need to publish all vendor assets:

```bash
$ php artisan vendor:publish
```

This will create a `config/DevStatus.php` file in your app that you can modify to set your configuration.

Set the GITHUB_API_URL constant as an ENVIRONMENT variable on your Server and in your .env file and assign the api url to it e.g

```bash
GITHUB_API_URL=https://api.github.com
```

## Contributing

Please feel free to fork this package and contribute by submitting a pull request to enhance the functionalities.

