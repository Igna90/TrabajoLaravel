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
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        \Blade::if ('Logged', function() {
            return auth()->check();
        });
        \Blade::if ('LoggedAD', function() {
            return auth()->check() && auth()->user()->type === 'ad';
        });
        \Blade::if ('LoggedAL', function() {
            return auth()->check() && auth()->user()->type === 'al';
        });
        \Blade::if ('LoggedTL', function() {
            return auth()->check() && auth()->user()->type === 'tl';
        });
        \Blade::if ('LoggedTE', function() {
            return auth()->check() && auth()->user()->type === 'te';
        });
    }
}