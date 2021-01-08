<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/book', [BookController::class,'index'])->name('book.index');
Route::get('/book/create', [BookController::class,'create'])->name('book.create');
Route::post('/book', [BookController::class, 'store']);
Route::get('/book/{id}', [BookController::class,'show'])->name('book.show');
// Route::get('/book/{id}', [BookController::class,'destory'])->name('book.destory');

