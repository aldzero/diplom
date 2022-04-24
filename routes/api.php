<?php

use App\Http\Actions\Meal\MealsListAction;
use App\Http\Actions\Order\AddOrderAction;
use App\Http\Actions\User\LoginAction;
use App\Http\Actions\User\RegistrationAction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/meals', MealsListAction::class);
Route::post('/reg', RegistrationAction::class);
Route::post('/login', LoginAction::class);
Route::middleware('auth:api')->post('/add-order', AddOrderAction::class);
