<?php

namespace App\Http\Controllers;
use App\Http\Requests\Product\StoreProductRequest;
use App\Http\Requests\Product\UpdateProductRequest;
use App\Models\ProductModel;
use App\Services\Category\CategoryServiceInterface;
use App\Services\Product\ProductServiceInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public ProductServiceInterface $service;
    public StoreProductRequest $storeRequest;
    public UpdateProductRequest $updateRequest;
    public CategoryServiceInterface $categoryService;
    public function __construct()
    {
        $this->setService();
        $this->categoryService = App::make(CategoryServiceInterface::class);
    }
    public function setService()
    {
        $this->service = App::make(ProductServiceInterface::class);
    }

    public function setStoreRequest()
    {
        $this->storeRequest = App::make(StoreProductRequest::class);
    }

    public function setUpdateRequest()
    {
        $this->updateRequest = App::make(UpdateProductRequest::class);
    }

    public function getTopProductCategory()
    {
        $topCategories = $this->categoryService->getTopProductCategory(10);
        return $this->successResponse(true,200,$topCategories);
    }

    public function filter(Request $request)
    {
        $products = $this->service->filter($request->all());
        return $this->successResponse(true,200,$products);
    }
}
