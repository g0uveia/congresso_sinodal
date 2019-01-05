<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Presbiterio;

class DropdownServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function($view) {
            $view->with('presbiterios', Presbiterio::all());
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
