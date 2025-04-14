<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;

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

    
     public function boot()
     {
         View::composer('*', function ($view) {
             // Logic active menu
             $activeMenu = match (true) {
                 Request::is('user*') => 'user',
                 Request::is('level*') => 'level',
                 Request::is('kategori*') => 'kategori',
                 Request::is('barang*') => 'barang',
                 Request::is('stok*') => 'stok',
                 default => 'welcome'
             };
     
             // Logic breadcrumb (optional default value, bisa kamu sesuaikan)
             $breadcrumb = (object)[
                 'title' => ucfirst($activeMenu),
                 'list' => ['Home', ucfirst($activeMenu)],
             ];
     
             $view->with([
                 'activeMenu' => $activeMenu,
                 'breadcrumb' => $breadcrumb
             ]);
         });
     }
    
}
