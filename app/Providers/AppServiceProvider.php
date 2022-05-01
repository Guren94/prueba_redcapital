<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use View;

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
        View::composer('*',function($view){
            $menus = DB::table('menu')->get();
            $sub_menus = DB::table('sub_menu')->get();
            $view->with([
                'menus' => $menus,
                'sub_menus' => $sub_menus
            ]);
        });
    }
}
