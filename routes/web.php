<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Middleware\Auth;

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




Route::middleware('auth')->group(function(){
// Auth middleware starts from above this
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/admin', function () {
    return view('admin.index');
})->name('admin.index');

Route::get('/basic-details', function () {
    return view('user.basic-details');
})->name('basic-details')->middleware('basicIsFilled');

Route::post('/client-details', [ClientController::class, 'store'])->name('client-details.store');

    Route::middleware(['auth', 'basicIsFilled'])->group(function () {
        Route::get('/', function () {
            return view('user.index');
        })->name('dashboard');
        
    });
// Auth middleware end below this
});


Route::middleware('guest')->group(function(){
    Route::post('/signup', [AuthController::class, 'create'])->name('signup');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    
Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
});
