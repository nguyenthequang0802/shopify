<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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
    return view('welcome');
});

Route::get('admin/login', [LoginController::class, 'showAdminLoginForm'])->name('admin.auth.login');
Route::post('admin/login', [LoginController::class, 'adminLogin'])->name('admin.auth.login.store');
Route::group(['prefix' => 'admin','middleware' => ['auth:admin']], function (){
    Route::get('/dashboard', function () { return view('admin.dashBoard');});
    Route::get('/register', [RegisterController::class, 'showAdminRegistrationForm'])->name('admin.auth.register');
    Route::post('/register', [RegisterController::class, 'storeAdminAccount'])->name('admin.auth.register.store');
});

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
