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

Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::group(['middleware' => ['isAdmin']], function() {
        Route::resource('categories', \App\Http\Controllers\CategoryController::class);
        Route::resource('posts', \App\Http\Controllers\PostController::class);
    });

});



require __DIR__.'/auth.php';

