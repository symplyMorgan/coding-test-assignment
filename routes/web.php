<?php

use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\RegistersUserController;
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

Route::get('/', [RegistersUserController::class, 'create']);
Route::post('/', [RegistersUserController::class, 'store']);

Route::middleware('auth')->group(function () {
    Route::view('/home', 'welcome')
        ->middleware('verified')
        ->name('home');

    Route::controller(EmailVerificationController::class)->group(function () {
        Route::get('/email/verify/{id}/{hash}', 'index')
            ->middleware('signed')
            ->name('verification.verify');

        Route::get('/email/verify', 'create')
            ->name('verification.notice');

        Route::post('/email/verification-notification', 'store')
            ->middleware('throttle:6,1')
            ->name('verification.send');
    });
});
