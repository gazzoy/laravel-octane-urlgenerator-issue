<?php

use App\Http\Controllers\SampleController;
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

Route::group(['prefix' => '/sample/{user}', 'as' => 'sample.'], function () {
    Route::middleware('guest')->group(function () {
        Route::get('login', [SampleController::class, 'login'])->name('login');
    });

    Route::middleware('auth')->group(function () {
        Route::get('home', [SampleController::class, 'home'])->name('home');
    });
});
