<?php

namespace Ngtfkx\Laradeck\Helpers;

use Illuminate\Support\ServiceProvider;

class LaradeckHelpersServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        foreach (glob(__DIR__ . '/Helpers/*.php') as $filename) {
            require_once $filename;
        }
    }
}