# Laravel-Feeder

> Laravel 5 Package to extract atom and rss feeds from any website in a very good readable format

## Installation

[PHP](https://php.net) 5.4+ or [HHVM](http://hhvm.com) 3.3+, and [Composer](https://getcomposer.org) are required.

To get the latest version of Laravel Feeder, simply add the following line to the require block of your `composer.json` file.

```
"busayo/laravel-feeder": "dev-master"
```

You'll then need to run `composer install` or `composer update` to download it and have the autoloader updated.

Once Laravel Feeder is installed, you need to register the service provider. Open up `config/app.php` and add the following to the `providers` key.

* `'Busayo\LaravelFeeder\LaravelFeederServiceProvider'`

#### Looking for a laravel 4 compatible version?

Chill, it's undergoing development :smiley_cat:


## Configuration

To get started, you'll need to publish all vendor assets:

```bash
$ php artisan vendor:publish
```
## Usage

Download RSS feed from URL:

```php
  $rss = Feed::loadRss($url);
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
  $atom = Feed::loadAtom($url);
```


## Contributing

Please feel free to fork this package and contribute by submitting a pull request to enhance the functionalities.
