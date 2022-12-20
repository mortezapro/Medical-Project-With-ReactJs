<?php
namespace App\Providers;
use App\Services\Product\ProductServiceInterface;
 use App\Services\Product\ProductService;
use App\Services\Post\PostService;
use App\Services\Post\PostServiceInterface;
use Illuminate\Support\ServiceProvider;
use App\Services\Product\ProductServiceInterface;
 use App\Services\Product\ProductService;
use App\Services\Test\TestServiceInterface;
 use App\Services\Test\TestService;
class ServiceLayerProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            PostServiceInterface::class,
            PostService::class
        );

        $this->app->bind(
            ProductServiceInterface::class,
            ProductService::class
        );

        $this->app->bind(
            TestServiceInterface::class,
            TestService::class
        );

        $this->app->bind(
            ProductServiceInterface::class,
            ProductService::class
        );
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
