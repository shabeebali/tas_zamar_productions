<?php

use App\Http\Controllers\DonateController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\PageController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('donate/test/{id}',[DonateController::class,'testMail']);
Route::post('contact',[EnquiryController::class,'contact'])->name('contact');
Route::get('donate/response',[DonateController::class,'response'])->name('donate.response');
Route::post('donate',[DonateController::class,'donate'])->name('donate');
Route::get('donate',[PageController::class,'donate']);
Route::get('/{any}', [PageController::class,'page'])->where('any', '.*');


/*


Route::middleware('auth')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');
});
*/
