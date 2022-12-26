<?php
namespace App\Http\Controllers\Traits;
use Illuminate\Http\JsonResponse;

trait Response{
    public function successResponse($success,$statusCode,$data = null): JsonResponse
    {
        return response()->json([
            "success" => $success,
            "code" => $statusCode,
            "data" => $data
        ]);
    }
    public function errorResponse($statusCode,$message = null): JsonResponse
    {
        return response()->json([
            "success" => false,
            "code" => $statusCode,
            "message" => $message,
            "data" => null
        ]);
    }
}
