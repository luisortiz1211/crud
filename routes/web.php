<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Post\PostController;
use App\Http\Controllers\Auth\LoginController;

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


Route::get('/',function () {
    return view('auth.login');
}) ;

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'store']);

Route::get('/crear-cuenta',[RegisterController::class,'index'])->name('register.index');
Route::post('/crear-cuenta',[RegisterController::class,'store'])->name('register.store');


Route::middleware('auth')->group(function (){
    Route::get('/post',[PostController::class,'index'])->name('post.index');
    Route::post('/post',[PostController::class,'store'])->name('post.store');
});
