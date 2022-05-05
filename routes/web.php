<?php
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LikeController;
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

Route::get('/home', function(){
    return view('app.index');
});

Route::get('/register',[RegisterController::class, 'sign'])->name('register');

Route::post('/register',[RegisterController::class, 'store']);

Route::get('/', [dashboardController::class, 'index'])->name('dashboard');

Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::post('/login',[LoginController::class, 'store']);

Route::post('/logout',[logoutController::class, 'store'])->name('logout');

Route::get('/post',[PostController::class, 'index'])->name('post')->middleware('auth');
Route::post('/post', [PostController::class, 'store']);

Route::post('/post/{post}/likes',[LikeController::class,'store'])->name('like');