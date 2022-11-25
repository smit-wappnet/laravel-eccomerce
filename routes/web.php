<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;
use App\Models\User;
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

Route::get('/', function () {
    return redirect()->route("customer.home");
});
Route::get('/home', [CustomerController::class, 'home'])->name('customer.home');
Route::get('/login', [CustomerController::class, 'login'])->name('customer.login');
Route::post('/login', [CustomerController::class, 'loginHandle']);
Route::get('/register', [CustomerController::class, 'register'])->name('customer.register');
Route::post('/register', [CustomerController::class, 'registerHandle']);
Route::get('/logout', [CustomerController::class, 'logout'])->name("customer.logout");

Route::get('/admin', []);
