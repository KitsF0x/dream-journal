<?php

use App\Http\Controllers\DreamController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Dreams routes

// Create dream form
Route::get('/dreams/create', [DreamController::class, 'create'])->name('dreams.create')->middleware('auth');
// Show details of dream with id
Route::get('/dreams/{id}', [DreamController::class, 'show'])->name('dreams.show')->middleware('auth');
// Store dream in database
Route::post('/dreams', [DreamController::class, 'store'])->name('dreams.store')->middleware('auth');