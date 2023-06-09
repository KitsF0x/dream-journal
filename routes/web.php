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

// Display all dreams of current user
Route::get('/dreams', [DreamController::class, 'index'])->name('dreams.index')->middleware('auth');
// Create dream form
Route::get('/dreams/create', [DreamController::class, 'create'])->name('dreams.create')->middleware('auth');
// Show details of dream with id
Route::get('/dreams/{id}', [DreamController::class, 'show'])->name('dreams.show')->middleware('auth');
// Store dream in database
Route::post('/dreams', [DreamController::class, 'store'])->name('dreams.store')->middleware('auth');
// Delete dream from database
Route::delete('/dreams/{dream}', [DreamController::class, 'destroy'])->name('dreams.destroy')->middleware('auth');
// Show edit dream form
Route::get('/dreams/edit/{dream}', [DreamController::class, 'edit'])->name('dreams.edit')->middleware('auth');
// Update dream
Route::post('/dreams/update/{dream}', [DreamController::class, 'update'])->name('dreams.update')->middleware('auth');