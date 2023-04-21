<?php

use App\Http\Controllers\Web\SubscriptionWebController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

//view
Route::middleware(['web'])->group(function () {
    Route::get('/showLogin', [\App\Http\Controllers\Web\UserWebController::class, 'showLoginForm'])->name('showLogin');
    Route::get('/showRegister', [\App\Http\Controllers\Web\UserWebController::class, 'showRegister'])->name('showRegister');
    Route::get('/role', [\App\Http\Controllers\Web\RoleController::class, 'getListRole']);
    Route::post('/login', [\App\Http\Controllers\Web\UserWebController::class, 'login'])->name('login');
    Route::post('/register', [\App\Http\Controllers\Web\UserWebController::class, 'Registration'])->name('register');
    Route::get('/verification-account', [\App\Http\Controllers\Web\UserWebController::class, 'VerificationAccount'])->name('verifyAccount');
    Route::get('/role', function () {
        return view('choose-a-role');
    })->name('chooseRole');
    Route::get('/login-child', function () {
        return view('login-child');
    })->name('loginChild');

    Route::get('/activate',[\App\Http\Controllers\Web\UserWebController::class,'verifiedEmail'])->name('activate');
    Route::post('/updateSubscription',[SubscriptionWebController::class,'updateSubscription'])->name('updateSubscription');
    Route::prefix('admin')->group(function (){
        Route::get('/subscription', [SubscriptionWebController::class, 'listSubs'])->name('subscription');
        Route::get('/coupon',[\App\Http\Controllers\Web\CouponController::class, 'listCoupon'])->name('coupon');
        Route::get('/',[\App\Http\Controllers\Web\DashboardController::class,'index']);
    });
});
