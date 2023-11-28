<?php

use App\Http\Controllers\RegisterController;
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


Route::get('/register', [RegisterController::class, 'index']);
Route::get('/register/create', [RegisterController::class, 'create'])->name('register.create');
Route::post('/register/store', [RegisterController::class, 'store'])->name('register.store');
Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::get('/register/{id}/edit', [RegisterController::class, 'edit']);
Route::put('/register/{id}', [RegisterController::class, 'update']);
Route::delete('/register/{id}', [RegisterController::class, 'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
