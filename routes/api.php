<?php

use App\Http\Controllers\Api\CardController;
use App\Http\Controllers\Api\Authentication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\User;

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



Route::prefix('v1')->group(function(){
    Route::post('/register',[Authentication::class,'store']);
    Route::post('/login',[Authentication::class,'login']);
    Route::post('/forgot-password',[Authentication::class,'ForgotPassword']);
    Route::post('/confirm-password',[Authentication::class,'confirmPassword']);
    Route::post('/card',[CardController::class,'CardRegist']);
    Route::post('/resend-link',[Authentication::class,'ResendLink']);

    Route::controller(User::class)->group(function (){
        Route::get('/user','listUser');
    });
        Route::middleware('auth:api')->group(function(){
            Route::controller(CardController::class)->group(function(){
                Route::get('/card','ListCardPayment');
                Route::get('/card/{id}','getCardPayment');
            });

            Route::controller(User::class)->group(function (){
                Route::get('/user','listUser');
                Route::get('/user/{id}','getProfileUser');

            });






        });
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


