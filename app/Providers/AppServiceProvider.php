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
        // Get the path only
        view()->share('appJsPath', parse_url(mix('js/app.js'), PHP_URL_PATH));
        view()->share('appCssPath', parse_url(mix('css/app.css'), PHP_URL_PATH));
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
