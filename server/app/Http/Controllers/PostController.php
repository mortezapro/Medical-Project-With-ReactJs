<?php

namespace App\Http\Controllers;

use App\Services\Post\PostService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PostController extends Controller
{
    public PostService $postService;
    public function __construct()
    {
        $this->postService = App::make(PostService::class);
    }
    public function popularSwiper():JsonResponse
    {
        $data = $this->postService->popularSwiper();
        return response()->json($data);
    }
}
