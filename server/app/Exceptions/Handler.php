<?php

namespace App\Exceptions;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    public function register()
    {
        $this->renderable(function (ModelNotFoundException $e, $request) {
            return response()->json([
                'success' => false,
                'code' => 404,
                'message' => __('json.model_not_found')
            ], 404);
        });
        $this->renderable(function (NotFoundHttpException $e, $request) {
            return response()->json([
                'success' => false,
                'code' => 404,
                'message' => __('json.404')
            ], 404);
        });
        $this->renderable(function (MethodNotAllowedHttpException $e, $request) {
            return response()->json([
                'success' => false,
                'code' => 405,
                'message' => __('json.method_not_allowed_http_exception')
            ], 405);
        });
        $this->renderable(function (ValidationException $e, $request) {
            throw new HttpResponseException(response()->json([
                'success' => false,
                'code' => 422,
                'errors' => $e->errors()
            ], 422));
        });
    }

}
