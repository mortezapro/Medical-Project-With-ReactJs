<?php
namespace App\Providers;
use App\Services\Doctor\DoctorServiceInterface;
 use App\Services\Doctor\DoctorService;
use App\Services\Post\PostService;
use App\Services\Post\PostServiceInterface;
use Illuminate\Support\ServiceProvider;

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
            DoctorServiceInterface::class,
            DoctorService::class
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
