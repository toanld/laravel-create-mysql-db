<?php

namespace Toanld\Setup;

use Illuminate\Support\ServiceProvider;

class SetupProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->commands([
            SetupDatabase::class
        ]);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
