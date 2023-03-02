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

Route::redirect('/', 'login');

//Route::middleware(['auth'])->group(function(){
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/staff', function () {
    return view('staff');
})->name('staff');
Route::get('/user', function () {
    return view('user');
})->name('user');
Route::get('/idea', function () {
    return view('idea');
})->name('idea');
Route::get('/create_idea', function () {
    return view('idea_create');
})->name('create idea');
//});

require __DIR__ . '/auth.php';
