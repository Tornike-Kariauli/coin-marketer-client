<?php

namespace ContractZero\CoinMarketerClient;

use Illuminate\Support\ServiceProvider;

class CoinMarketerClientServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/api.php');

        $this->publishes([
            __DIR__.'/../config/coinmarketer.php' => config_path('coinmarketer.php')
        ]);
    }
}
