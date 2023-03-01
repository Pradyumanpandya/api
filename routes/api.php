<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Route as RoutingRoute;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/products', 'ProductController');

Route::group(['prefix'=>'products'], function(){
    Route::apiResource('/{product}/reviews', 'ReviewController');
});