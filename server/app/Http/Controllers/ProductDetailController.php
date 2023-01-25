<?php

namespace App\Http\Controllers;
use App\Http\Requests\ProductDetail\StoreProductDetailRequest;
use App\Http\Requests\ProductDetail\UpdateProductdetailRequest;
use App\Services\ProductDetail\ProductDetailServiceInterface;
use Illuminate\Support\Facades\App;

class ProductDetailController extends Controller
{
    public ProductDetailServiceInterface $service;
    public StoreProductDetailRequest $storeRequest;
    public UpdateProductDetailRequest $updateRequest;

    public function __construct()
    {
        $this->setService();
    }
    public function setService()
    {
        $this->service = App::make(ProductDetailServiceInterface::class);
    }

    public function setStoreRequest()
    {
        $this->storeRequest = App::make(StoreProductDetailRequest::class);
    }

    public function setUpdateRequest()
    {
        $this->updateRequest = App::make(UpdateProductDetailRequest::class);
    }
}
