<?php

use App\Http\Controllers\Api\AnswerController;
use App\Http\Controllers\Api\Authentication;
use App\Http\Controllers\Api\BooksController;
use App\Http\Controllers\Api\CardController;
use App\Http\Controllers\Api\ChapterController;
use App\Http\Controllers\Api\CouponController;
use App\Http\Controllers\Api\FriendController;
use App\Http\Controllers\Api\GroupController;
use App\Http\Controllers\Api\LevelController;
use App\Http\Controllers\Api\Payment;
use App\Http\Controllers\Api\SubscriptionController;
use App\Http\Controllers\Api\TopicController;
use App\Http\Controllers\Api\User;
use App\Http\Controllers\Api\VersesController;
use App\Http\Controllers\Web\PaymentController;
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
    Route::post('/login-child', [Authentication::class, 'LoginChild']);
    Route::post('/forgot-password', [Authentication::class, 'ForgotPassword']);
    Route::post('/confirm-password', [Authentication::class, 'confirmPassword']);
    Route::post('/card', [CardController::class, 'CardRegist']);
    Route::post('/resend-link', [Authentication::class, 'ResendLink']);
    Route::post('/resend-link-forgot-pass', [Authentication::class, 'ResendForgotPasswordLink']);

    Route::post('/activate', [Authentication::class, 'VerifiedEmail']);

    Route::controller(SubscriptionController::class)->group(function () {
        Route::get('/subscription', 'listSubs');
    });

    Route::get('/how-to-play', [\App\Http\Controllers\Api\HowToPlayController::class, 'getHowToPlay']);
    Route::get('/faq',[\App\Http\Controllers\Api\FaqController::class,'getFaq']);

    Route::get('/old-testament', [BooksController::class, 'getOldTestament']);
    Route::get('/new-testament', [BooksController::class, 'getNewTestament']);
    Route::get('/chapters', [ChapterController::class, 'getChapters']);
    Route::get('/verses', [VersesController::class, 'getVerses']);
    Route::get('/topic/{topic_id}', [TopicController::class, 'getVerseByTopic']);
    Route::get('/topics', [TopicController::class, 'getTopics']);
    Route::post('/answer',[AnswerController::class,'ValidateAnswer']);
    Route::get('/level/{chapter_id}', [LevelController::class, 'getLevelChapter']);
    Route::get('/level/detail/{lvl_id}', [LevelController::class, 'getDetailLevel']);
    Route::get('/level/init/{lvl_id}', [LevelController::class, 'getInitQuiz']);

    Route::post('/init-payment', [Payment::class, 'InitialPayment']);
    Route::get('/success-veirification-mobile', [Authentication::class, 'SuccesVerification'])->name('success-veirification-mobile');
    Route::put('/choose-plan-role',[Authentication::class,'chooseRoleAndPlan']);
    Route::post('/coupon/inquiry',[CouponController::class,'CouponInquiry']);
    Route::post('/add-organization-member', [User::class,'addOrganizationMember']);
    Route::post('/add-childern', [User::class,'addChildern']);
    Route::middleware('jwt.api')->group(function () {
        Route::controller(CardController::class)->group(function () {
            Route::get('/card', 'ListCardPayment');
            Route::get('/card/{id}', 'getCardPayment');
        });

        Route::controller(User::class)->group(function () {
            Route::get('/user', 'listUser');
            Route::get('/user/{id}', 'getProfileUser');
            Route::get('/list-child', 'ListChild');
            Route::get('/list-donation', 'ListChild');
         

        });

        Route::controller(FriendController::class)->group(function () {
            Route::post('/friend', 'AddFriend');
            Route::get('/friend', 'ListFriend');
            Route::put('/accept-friend', 'acceptedRequest');
            Route::delete('/delete-friend', 'dellFriend');

        });

        Route::controller(GroupController::class)->group(function(){
            Route::post('/group', 'createGroup');
            Route::get('/group','listGroup');

        });

    });


});



