<?php

namespace App\Http\Controllers;
use App\Http\Requests\PostRequest;
use App\Services\Post\PostService;
use App\Services\Post\PostServiceInterface;
use Illuminate\Support\Facades\App;

class PostController extends Controller
{
    public PostService $service;

    public function __construct()
    {
        $this->setService();
    }
    public function setService()
    {
        $this->service = App::make(PostServiceInterface::class);
    }

    public function store(PostRequest $request)
    {
         return $this->save($request);
    }

    public function update(PostRequest $request)
    {
        return $this->save($request);
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
