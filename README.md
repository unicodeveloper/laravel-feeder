![](https://img.shields.io/badge/unicodeveloper-approved-brightgreen.svg)

# laravel-feeder

> Laravel 5 Package to extract atom and rss feeds from any website in a very good readable format

## Installation

[PHP](https://php.net) 5.4+ or [HHVM](http://hhvm.com) 3.3+, and [Composer](https://getcomposer.org) are required.

To get the latest version of Laravel Feeder, simply add the following line to the require block of your `composer.json` file.

```
"unicodeveloper/laravel-feeder": "dev-master"
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
$ php artisan vendor:publish
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


## Credits

- [Prosper Otemuyiwa](https://twitter.com/unicodeveloper)
- [David Grudl](http://phpfashion.com)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Security

If you discover any security related issues, please email [prosperotemuyiwa@gmail.com](prosperotemuyiwa@gmail.com) instead of using the issue tracker.
