<?php

use App\Http\Controllers\Api\V1\ProductController;
use App\Http\Controllers\Api\V1\ProductDetailController;
use App\Http\Controllers\Api\V1\ProviderController;
use App\Http\Controllers\Api\V1\SpecificationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

$attributes = [
    "prefix"=>"v1",
    "namespace"=>"App\Http\Controllers\Api\V1"
];

Route::group($attributes, function(){
    Route::apiResource("providers", ProviderController::class);
    Route::apiResource("products", ProductController::class);
    Route::apiResource("product_details", ProductDetailController::class);
    Route::apiResource("specifications", SpecificationController::class);
});
