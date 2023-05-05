<?php

use App\Http\Controllers\Api\Authentication;
use App\Http\Controllers\Api\CardController;
use App\Http\Controllers\Api\FriendController;
use App\Http\Controllers\Api\SubscriptionController;

use App\Http\Controllers\Api\User;
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


Route::prefix('v1')->group(function () {
    Route::post('/register', [Authentication::class, 'store']);
    Route::post('/login', [Authentication::class, 'login']);
    Route::post('/forgot-password', [Authentication::class, 'ForgotPassword']);
    Route::post('/confirm-password', [Authentication::class, 'confirmPassword']);
    Route::post('/card', [CardController::class, 'CardRegist']);
    Route::post('/resend-link', [Authentication::class, 'ResendLink']);
    Route::post('/activate',[Authentication::class, 'VerifiedEmail']);
    Route::controller(SubscriptionController::class)->group(function (){
        Route::get('/subscription','listSubs');
    });


    Route::middleware('jwt.api')->group(function () {
        Route::controller(CardController::class)->group(function () {
            Route::get('/card', 'ListCardPayment');
            Route::get('/card/{id}', 'getCardPayment');
        });

        Route::controller(User::class)->group(function () {
            Route::get('/user', 'listUser');
            Route::get('/user/{id}', 'getProfileUser');
        });

        Route::controller(FriendController::class)->group(function () {
            Route::post('/friend', 'AddFriend');
            Route::get('/friend', 'ListFriend');
        });

    });


});



