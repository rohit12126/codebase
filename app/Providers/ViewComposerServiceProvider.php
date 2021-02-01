<?php

namespace App\Providers;

use App\Http\Composers\CartComposer;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap our view composers
     *
     * @return void
     */
    public function boot()
    {
        view()->composer([
            'layouts.front',
            'frontend.contact',
            'frontend.home'
        ],CartComposer::class);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
