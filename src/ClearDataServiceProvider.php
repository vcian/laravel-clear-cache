<?php

namespace Vcian\Cleardata;

use Illuminate\Support\ServiceProvider;

class ClearDataServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Vcian\Cleardata\ClearDataController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
    }
}
