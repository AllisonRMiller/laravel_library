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
    // $books = App\Books::all();
    // return $books;
    return view('books/index', ['books'=> App\Books::all()]);
});

// Route::get('/books/{book}', function () {
//     $book = App\Books::take(1)->get();
//     return $book;
//     // return view('books/show');
// });
// 
Route::get('/books/{book}', 'BooksController@show');