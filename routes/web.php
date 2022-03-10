<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\User;
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

Route::get('/', function () {
    return view('welcome');
})->name('main');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])
    ->name('home');

Route::get('/{user}', [PostController::class, 'index'])->name('view_posts');

Route::get('/users/view', [UserController::class, 'index']);

Route::resource('users', UserController::class)
    ->except(['index']);

Route::resource('posts', PostController::class);
