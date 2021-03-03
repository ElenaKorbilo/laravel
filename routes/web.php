<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\EventController;

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
});

Route::resource('events', 'EventController');

Route::get('home', [HomeController::class, 'home'])->name('home');

Route::get('/cabinet', function() {
    return 'logic page';
})->name('login');

Route::get('/posts', [PostController::class, 'index'])->name('posts');