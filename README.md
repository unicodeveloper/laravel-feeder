# laravel-feeder

[![Latest Stable Version](https://poser.pugx.org/unicodeveloper/laravel-feeder/v/stable.svg)](https://packagist.org/packages/unicodeveloper/laravel-feeder)
![](https://img.shields.io/badge/unicodeveloper-approved-brightgreen.svg)
[![License](https://poser.pugx.org/unicodeveloper/laravel-feeder/license.svg)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/unicodeveloper/laravel-feeder.svg)](https://travis-ci.org/unicodeveloper/laravel-feeder)
[![Quality Score](https://img.shields.io/scrutinizer/g/unicodeveloper/laravel-feeder.svg?style=flat-square)](https://scrutinizer-ci.com/g/unicodeveloper/laravel-feeder)
[![Total Downloads](https://img.shields.io/packagist/dt/unicodeveloper/laravel-feeder.svg?style=flat-square)](https://packagist.org/packages/unicodeveloper/laravel-feeder)

> Laravel 5 Package to extract atom and rss feeds from any website in a very good readable format

## Installation

[PHP](https://php.net) 5.4+ or [HHVM](http://hhvm.com) 3.3+, and [Composer](https://getcomposer.org) are required.

To get the latest version of Laravel Feeder, simply add the following line to the require block of your `composer.json` file.

```
"unicodeveloper/laravel-feeder": "1.0.*"
```

You'll then need to run `composer install` or `composer update` to download it and have the autoloader updated.

Once Laravel Feeder is installed, you need to register the service provider. Open up `config/app.php` and add the following to the `providers` key.

* `Unicodeveloper\LaravelFeeder\LaravelFeederServiceProvider::class`

You can also use a Facade

```php
'aliases' => [
    ...
    'Feeder' => Unicodeveloper\LaravelFeeder\Facades\LaravelFeederFacade::class,
    ...
]
```

## Configuration

To get started, you'll need to publish all vendor assets:

```bash
$ php artisan vendor:publish --provider="Unicodeveloper\LaravelFeeder\LaravelFeederServiceProvider"
```
## Usage

Download RSS feed from URL:

```php
  $rss = Feeder::loadRss($url);
```

The returned properties are SimpleXMLElement objects. Extracting
the information from the channel is easy:


```php
  echo 'Title: ', $rss->title;
  echo 'Description: ', $rss->description;
  echo 'Link: ', $rss->link;

  foreach ($rss->item as $item) {
    echo 'Title: ', $item->title;
    echo 'Link: ', $item->link;
    echo 'Timestamp: ', $item->timestamp;
    echo 'Description ', $item->description;
    echo 'HTML encoded content: ', $item->{'content:encoded'};
  }
```

Download Atom feed from URL:

```php
  $atom = Feeder::loadAtom($url);
```

## Contributing

Please feel free to fork this package and contribute by submitting a pull request to enhance the functionalities.

## How can I thank you?

Why not star the github repo? I'd love the attention! Why not share the link for this repository on Twitter or HackerNews? Spread the word!

Don't forget to [follow me on twitter](https://twitter.com/unicodeveloper)!

Thanks!
Prosper Otemuyiwa.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Security

If you discover any security related issues, please email [prosperotemuyiwa@gmail.com](prosperotemuyiwa@gmail.com) instead of using the issue tracker.
