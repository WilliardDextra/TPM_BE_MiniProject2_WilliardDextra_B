<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

// bad practice -> reason -> function in route (x)
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [BookController::class, 'welcome'])->name('welcome');

// mekanisme penyimpanan ke database
Route::post('/store', [BookController::class, 'store'])->name('store');

// nampilin form create
Route::get('/create', [BookController::class, 'createBook'])->name('createBook');

// url -> /view -> page view -> tampilin product

// nampilin form update
Route::get('/edit/{id}', [BookController::class, 'editBook'])->name('editBook');

// mekanisme update
Route::patch('/update/{id}', [BookController::class, 'updateBook'])->name('updateBook');

Route::delete('/delete/{id}', [BookController::class, 'deleteBook'])->name('deleteBook');
