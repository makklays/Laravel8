<?php

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
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Lichnuy Kabinet
Route::group([
        'prefix' => 'lika',
        'middleware' => ['auth', 'blocked'],
    ], function () {
        Route::get('profile', [App\Http\Controllers\LikaController::class, 'profile'])->name('profile');
        Route::get('users', [App\Http\Controllers\LikaController::class, 'users'])->name('users');
        Route::get('delete', [App\Http\Controllers\LikaController::class, 'delete'])->name('delete');
});
Route::get('blocked', [App\Http\Controllers\LikaController::class, 'blocked'])->name('blocked');

//Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
