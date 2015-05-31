<?php namespace Busayo\LaravelFeeder;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;
use Feed;

class LaravelFeederServiceProvider extends ServiceProvider {

  /*
   * Indicates if loading of the provider is deferred.
   *
   * @var bool
   */
  protected $defer = false;

  /**
   * Bootstrap the application services.
   *
   * @return void
   */
  public function boot()
  {

  }

  /**
   * Register the application services.
   *
   * @return void
   */
  public function register()
  {
    $this->app['test'] = $this->app->share(function($app){
      return new Feed;
    });

    $this->app->booting(function()
    {
      AliasLoader::getInstance()->alias('Feed', 'Busayo\LaravelFeeder\Facades\LaravelFeederFacade');
    });
  }

  public function provides()
  {
    return ['Feed'];
  }

}
