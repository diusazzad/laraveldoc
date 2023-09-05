<?php

use App\Http\Controllers\database\queryBuilder;
use App\Http\Controllers\RoutingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/redirectRoutes', [RoutingController::class, 'redirectRoutes']);
Route::get('/user/{user_id}', [RoutingController::class, 'requiredParameters']);
// optional Routes
Route::get('/user/{name?}', [RoutingController::class, 'optionalParameter']);
Route::get('/search/{category?}/{keyword?}', [RoutingController::class, 'multipleOptionalParameter']);

