<?php

namespace App\Http\Controllers;
use App\Http\Requests\Post\StorePostRequest;
use App\Http\Requests\Post\UpdatePostRequest;
use App\Services\Post\PostService;
use App\Services\Post\PostServiceInterface;
use Illuminate\Support\Facades\App;

class PostController extends Controller
{
    public PostService $service;
    public StorePostRequest $storeRequest;
    public UpdatePostRequest $updateRequest;

    public function __construct()
    {
        $this->setService();
    }
    public function setService()
    {
        $this->service = App::make(PostServiceInterface::class);
    }


    public function setStoreRequest()
    {
        $this->storeRequest = App::make(StorePostRequest::class);
    }

    public function setUpdateRequest()
    {
        $this->updateRequest = App::make(UpdatePostRequest::class);
    }

    public function popularSwiper()
    {
        return $this->service->popularSwiper(8);
    }

    public function highlight()
    {
        return $this->service->highlight(8);
    }
}
