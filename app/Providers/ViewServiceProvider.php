<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Http\View\Composers\GlobalComposer;
use App\Http\View\Composers\ProfileComposer;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // GlobalComposer - Using class based composers...
        View::composer('*', GlobalComposer::class);

        #region Frontend
        View::composer('profile', ProfileComposer::class);
        #endregion

        #region Backend
        // Using closure based composers...
        View::composer('index', function ($view) {
            $view->with('data', 'xin chao ban hien');
        });
        #endregion
    }
}
