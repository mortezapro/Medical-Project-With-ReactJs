<?php

namespace App\Http\Controllers;
use App\Http\Requests\Brand\StoreBrandRequest;
use App\Http\Requests\Brand\UpdateBrandRequest;
use App\Services\Brand\BrandServiceInterface;
use Illuminate\Support\Facades\App;

class BrandController extends Controller
{
    public BrandServiceInterface $service;
    public StoreBrandRequest $storeRequest;
    public UpdateBrandRequest $updateRequest;

    public function __construct()
    {
        $this->setService();
    }
    public function setService()
    {
        $this->service = App::make(BrandServiceInterface::class);
    }

    public function setStoreRequest()
    {
        $this->storeRequest = App::make(StoreBrandRequest::class);
    }

    public function setUpdateRequest()
    {
        $this->updateRequest = App::make(UpdateBrandRequest::class);
    }
}
