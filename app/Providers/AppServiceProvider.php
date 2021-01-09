<?php

namespace App\Providers;

use App\Rubric;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.footer', function($view){
           $view->with('rubrics', Rubric::all());
        });
    }
}
