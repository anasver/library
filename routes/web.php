<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookController;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('authors', AuthorController::class);
Route::post('authors/{id}/restore', [AuthorController::class, 'restore'])->name('authors.restore');
Route::post('authors/{author}/forcedelete', [AuthorController::class, 'forcedelete'])->name('authors.forcedelete');


Route::resource('books', BookController::class);
Route::post('books/{id}/restore', [BookController::class, 'restore'])->name('books.restore');
Route::post('books/{book}/forcedelete', [BookController::class, 'forcedelete'])->name('books.forcedelete');



Route::resource('categories', CategoryController::class);
Route::post('categories/{id}/restore', [CategoryController::class, 'restore'])->name('categories.restore');
Route::post('categories/{category}/forcedelete', [CategoryController::class, 'forcedelete'])->name('categories.forcedelete');
