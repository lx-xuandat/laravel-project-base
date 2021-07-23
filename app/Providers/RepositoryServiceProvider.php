<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        
		$this->app->bind(
			\App\Repositories\Contracts\ProductRepositoryInterface::class,
			\App\Repositories\Eloquent\ProductRepository::class
		);
		$this->app->bind(
			\App\Repositories\Contracts\ProductRepositoryInterface::class,
			\App\Repositories\Eloquent\ProductRepository::class
		);
		$this->app->bind(
			\App\Repositories\Contracts\UserRepositoryInterface::class,
			\App\Repositories\Eloquent\UserRepository::class
		);//{{END_OF_FILE}}
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
