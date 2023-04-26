<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator; 
use Illuminate\Support\Facades\Schema;

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
        Schema::defaultStringLength("100");
        Paginator::useBootstrap();
        
        view()->composer('*',function($view){
            $view->with([
                'admin_assets' => url('/').env('RESOURCE_URL').'/admin',
                'web_source' => url('/').env('RESOURCE_URL').'/web_2',
                'template_source' => url('/').env('RESOURCE_URL').'/template',

            ]);
        });


    } 
    
   
}
