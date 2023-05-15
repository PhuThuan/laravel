<?php

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

Route::get('/id/{id}', function (string $id) {
    return $id;
})->where('id', '[0-9]+');

Route::prefix('user')->as('user.')->group(function () {
    Route::get('profile', function () {
        return 'profile';
    })->name('profile');

    Route::get('post/{id}', function( $id) {
        return $id;
    })->name('show.post');
});