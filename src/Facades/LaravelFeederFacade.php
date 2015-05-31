<?php namespace Busayo\LaravelFeeder\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelFeederFacade extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
      return 'Feed';
    }
}


