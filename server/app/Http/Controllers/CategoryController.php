<?php

namespace App\Http\Controllers;
use App\Http\Requests\Category\StoreCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;
use App\Services\Category\CategoryServiceInterface;
use Illuminate\Support\Facades\App;

class CategoryController extends Controller
{
    public CategoryServiceInterface $service;
    public StoreCategoryRequest $storeRequest;
    public UpdateCategoryRequest $updateRequest;

    public function __construct()
    {
        $this->setService();
    }
    public function setService()
    {
        $this->service = App::make(CategoryServiceInterface::class);
    }

    public function setStoreRequest()
    {
        $this->storeRequest = App::make(StoreCategoryRequest::class);
    }

    public function setUpdateRequest()
    {
        $this->updateRequest = App::make(UpdateCategoryRequest::class);
    }
}
