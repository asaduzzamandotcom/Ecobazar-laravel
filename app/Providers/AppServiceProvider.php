<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //* View Composer
        view()->composer('layouts.FrontendLayout', function ($view) {
            $view->with('categories', Category::where('status', true)->oldest()->get());
        });
    }
}
