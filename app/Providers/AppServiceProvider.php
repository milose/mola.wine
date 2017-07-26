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
        // Get the paths only
        view()->share('appCss', parse_url(mix('css/app.css'), PHP_URL_PATH));

        view()->share('appJs', parse_url(mix('js/app.js'), PHP_URL_PATH));
        view()->share('indexJs', parse_url(mix('js/index.js'), PHP_URL_PATH));
        view()->share('venueJs', parse_url(mix('js/venue.js'), PHP_URL_PATH));
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
