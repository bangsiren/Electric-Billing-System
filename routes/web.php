<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BillingController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


Route::middleware('auth')->group(function () {
    Route::get('/home', [BillingController::class, 'index']);
    Route::get('/bills', [BillingController::class, 'bills']);
    Route::middleware('admin')->prefix('admin')->group(function () {
        Route::get('/', [AdminController::class, 'home'])->name('admin.home');
        Route::get('bills', [AdminController::class, 'bills'])->name('admin.bills'); 
        Route::post('add-bills', [AdminController::class, 'addBill'])->name('add-bills');
        Route::get('create-bills', [AdminController::class, 'showCreateBills'])->name('admin.createbills');
        Route::get('settings', [AdminController::class, 'showSettings'])->name('admin.settings');
        Route::put('settings', [AdminController::class, 'settings']);
    });
});

// Route::post('/allBills', [BillingController::class, 'show']);

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
