<?php
namespace App\Providers;
use App\Services\Category\CategoryServiceInterface;
 use App\Services\Category\CategoryService;
use App\Services\InventoryItems\InventoryItemsServiceInterface;
 use App\Services\InventoryItems\InventoryItemsService;
use App\Services\Currency\CurrencyServiceInterface;
 use App\Services\Currency\CurrencyService;
use App\Services\Inventory\InventoryServiceInterface;
 use App\Services\Inventory\InventoryService;
use App\Services\Value\ValueServiceInterface;
 use App\Services\Value\ValueService;
use App\Services\Key\KeyServiceInterface;
 use App\Services\Key\KeyService;
use App\Services\ProductDetail\ProductDetailServiceInterface;
use App\Services\ProductDetail\ProductDetailService;
use App\Services\Brand\BrandServiceInterface;
 use App\Services\Brand\BrandService;
use App\Services\Product\ProductServiceInterface;
use App\Services\Product\ProductService;
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

        $this->app->bind(
            ProductServiceInterface::class,
            ProductService::class
        );

        $this->app->bind(
            BrandServiceInterface::class,
            BrandService::class
        );

        $this->app->bind(
            ProductDetailServiceInterface::class,
            ProductDetailService::class
        );

        $this->app->bind(
            KeyServiceInterface::class,
            KeyService::class
        );

        $this->app->bind(
            ValueServiceInterface::class,
            ValueService::class
        );

        $this->app->bind(
            InventoryServiceInterface::class,
            InventoryService::class
        );

        $this->app->bind(
            CurrencyServiceInterface::class,
            CurrencyService::class
        );

        $this->app->bind(
            InventoryItemsServiceInterface::class,
            InventoryItemsService::class
        );

        $this->app->bind(
            CategoryServiceInterface::class,
            CategoryService::class
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
