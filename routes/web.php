<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\HomeController;

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

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::view('test-upload','test');
Route::post('test',[HomeController::class,'test'])->name('test.upload');

Route::get('/',[HomeController::class,'index']);

Route::post('/get-authors-after-search' , [AuthorsController::class,'searchAuthors'])->name('get.authors.after.search');
Route::post('/get-books-after-search' , [BooksController::class,'searchBooks'])->name('get.books.after.search');

Route::post('/get-authors-after-last-index' ,[AuthorsController::class,'getDataAuthorsAfterLastIndex'])->name('get.authors.after.last.index');
Route::post('/get-books-after-last-index' ,[BooksController::class,'getDataBooksAfterLastIndex'])->name('get.books.after.last.index');

Route::get('download-pdf/{book}',[BooksController::class,'downloadPdf'])->name('books.download.pdf');
Route::get('download-mobi/{book}',[BooksController::class,'downloadMobi'])->name('books.download.mobi');

// User needs to be authenticated to enter here.
Route::group(['middleware' => 'auth','prefix' => 'dashboard'], function () {
    Route::get('test',[TestController::class, 'test']);

    Route::resource('authors',AuthorsController::class);
    Route::get('get-all-authors',[AuthorsController::class,'getAllAuthors'])->name('get.all.authors');

    Route::resource('books',BooksController::class);

//    Route::view('authors','authors.authors')->name('authors');
//    Route::view('books','books.books')->name('books');


});
