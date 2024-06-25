<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Validation\ValidationException;

use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }



    protected function invalidJson($request, ValidationException $exception)
    {
        return response()->json([
            'token' => null,
            'msg' => $exception->getMessage(),
            'statusCode' => 404, // Or use 422 Unprocessable Entity for validation errors
            'success' => false,
            'payload' => null,
        ], 404); // Or use 422 for validation errors
    }


    public function render($request, Throwable $exception)
    {
        // Check if the request expects a JSON response
        if ($request->expectsJson()) {
            if ($exception instanceof ValidationException) {
                return $this->invalidJson($request, $exception);
            }

            return response()->json([
                'token' => null,
                'msg' => $exception->getMessage(),
                'statusCode' => $this->isHttpException($exception) ? $exception->getStatusCode() : 500,
                'success' => false,
                'payload' => null,
            ], $this->isHttpException($exception) ? $exception->getStatusCode() : 500);
        }

        return parent::render($request, $exception);
    }


}
