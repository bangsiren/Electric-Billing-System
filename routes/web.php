<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BillingController;

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

Route::get('/', [BillingController::class, 'index']);
Route::get('/login', [AuthController::class, 'login'])->middleware('alreadyLogin');
Route::get('/register', [AuthController::class, 'registration'])->middleware('alreadyLogin');
Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('isLoggedIn');
Route::get('/logout', [AuthController::class, 'logout']);
Route::post('/register-user', [AuthController::class, 'registerUser'])->name('register-user');
Route::post('/login-user', [AuthController::class, 'loginUser'])->name('login-user');
Route::post('/add-bills', [BillingController::class, 'addBill'])->name('add-bills');
Route::get('/admin/login', [AuthController::class, 'adminLogin']);
Route::get('/bills/create', [BillingController::class, 'showCreateBills']);
Route::get('/bills', [BillingController::class, 'bills']);


// Route::post('/allBills', [BillingController::class, 'show']);
