<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
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
        if (!defined('ADMIN')) {
           define('ADMIN', config('variables.APP_ADMIN', 'admin'));
        }
        Schema::defaultStringLength(191);
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
        \Blade::if ('LoggedALyAD', function() {
            return auth()->check() && (auth()->user()->type === 'al' || auth()->user()->type === 'ad');
        });
        \Blade::if ('LoggedTLyAD', function() {
            return auth()->check() && (auth()->user()->type === 'tl' || auth()->user()->type === 'ad');
        });
        \Blade::if ('LoggedTEyAD', function() {
            return auth()->check() && (auth()->user()->type === 'te' || auth()->user()->type === 'ad');
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
