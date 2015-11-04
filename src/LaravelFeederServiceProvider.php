<?php

namespace Unicodeveloper\LaravelFeeder;

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
      $this->app->bind('feed', 'Unicodeveloper\LaravelFeeder\Feed');
  }

  /**
   * Get the services provided by the provider
   * @return array
   */
  public function provides()
  {
      return ['feed'];
  }
}