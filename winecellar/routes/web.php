<?php

use App\Http\Controllers\Admin\BrandController;
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

    Route::group(['prefix' => 'brand'], function () {
        Route::get('/', [BrandController::class, 'index'])->name("admin.brand.index");
        Route::get('/add', [BrandController::class, 'create'])->name("admin.brand.add");
        Route::post('/add', [BrandController::class, 'store'])->name("admin.brand.store");
        Route::get('/edit/{id}', [BrandController::class, 'edit'])->name("admin.brand.edit");
        Route::post('/edit/{id}', [BrandController::class, 'update'])->name("admin.brand.update");
        Route::get('/delete/{id}', [BrandController::class, 'destroy'])->name("admin.brand.destroy");
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
