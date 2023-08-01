<?php

use Illuminate\Support\Facades\Route;

use App\http\Controllers\HomeController;

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

Route::get('/',[app\http\Controllers\HomeController::class,'index']);



Route::get('/home',[app\http\Controllers\HomeController::class,'redirect']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'])->group(function (){
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
    });
    

