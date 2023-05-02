<?php

use App\Http\Controllers\Web\PaymentController;
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

    Route::get('/payment_init',[PaymentController::class,'PaymentInit'])->name('payment_init');

    Route::get('/activate',[\App\Http\Controllers\Web\UserWebController::class,'verifiedEmail'])->name('activate');

Route::middleware('role')->group(function () {

    Route::get('/add-new-card',function (){
        return view('general.add-new-card');
    })->name('add-new-card');

    Route::get('/bible-verse',function (){
        return view('general.bible-verse');
    })->name('bible-verse');

    Route::get('/broad-spectrum',function (){
        return view('general.broad-spectrum');
    })->name('broad-spectrum');

    Route::get('/friend',function (){
        return view('general.friend');
    })->name('friend');

    Route::get('/group-detail',function (){
        return view('general.group-detail');
    })->name('group-detail');


    Route::prefix('admin')->group(function (){
        Route::post('/updateSubscription',[SubscriptionWebController::class,'updateSubscription'])->name('updateSubscription');
        Route::get('/subscription', [SubscriptionWebController::class, 'listSubs'])->name('subscription');
        Route::get('/coupon',[\App\Http\Controllers\Web\CouponController::class, 'listCoupon'])->name('coupon');
        Route::get('/',[\App\Http\Controllers\Web\DashboardController::class,'index']);
        Route::get('/term_condition',function (){
            return view('super_admin.terms_and_condition');
        });

        Route::get('/super_admin_list',[\App\Http\Controllers\Web\UserWebController::class,'listSuperAdmin'])->name('super_admin_list');

        Route::get('/add_super_admin',function (){
            return view('super_admin.add_super_admin');
        })->name('add_super_admin');

        Route::get('/add-answer',function (){
            return view('super_admin.add-answer');
        })->name('add-answer');

        Route::get('/users',function (){
            return view('super_admin.user_list');
        })->name('users');

        Route::get('/add_user',function (){
            return view('super_admin.add_user');
        })->name('add_user');

        Route::get('/question',function (){
            return view('super_admin.add-question-type');
        })->name('add-question-type');

        Route::get('/add-question',function (){
            return view('super_admin.add-question');
        })->name('add-question');

        Route::post('/add-admin',[\App\Http\Controllers\Web\UserWebController::class,'addSubAdmin'])
            ->name('add-admin');
    });

    Route::prefix('parent')->group(function (){
        Route::get('/',function (){
            return view('parent.dashboard');
        })->name('dashboard');


        Route::get('/home',function (){
            return view('parent.dashboard-home');
        })->name('home');
    });
});
