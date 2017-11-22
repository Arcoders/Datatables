<?php

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

Route::get('/books', '\App\Http\Controllers\BooksController@index')->name('books.list');
Route::get('/booksData', '\App\Http\Controllers\BooksController@booksData')->name('books.data');
Route::get('/books/{id}', '\App\Http\Controllers\BooksController@edit')->name('books.edit');
Route::delete('/books/{id}', '\App\Http\Controllers\BooksController@remove')->name('books.delete');
