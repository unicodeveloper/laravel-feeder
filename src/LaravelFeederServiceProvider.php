<?php namespace Busayo\LaravelFeeder;

use Illuminate\Support\ServiceProvider;

class LaravelFeederServiceProvider extends ServiceProvider {

  /*
   * Indicates if loading of the provider is deferred.
   *
   * @var bool
   */
  protected $defer = false;


  /**
   * Register the application services.
   *
   * @return void
   */
  public function register()
  {
    $this->app->bind('feed', 'Busayo\LaravelFeeder\Feed');
  }
}