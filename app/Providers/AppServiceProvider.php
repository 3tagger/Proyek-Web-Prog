<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('includes.frontend.navigation', function($view) {
            $view->with('user', auth()->user());
        });    
        view()->composer('includes.backend.navigation', function($view) {
            $view->with('user', auth()->user());
        });     
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
