<?php

use App\Http\Controllers\BookController;
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
    return view('index');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**
 * BookController Route
 */

Route::get('/books', 'BookController@index');
Route::get('/books/add', 'BookController@add');
Route::post('/books/add', 'BookController@create');
//Route::get('/books/edit', 'BookController@edit');
Route::post('/books/edit', 'BookController@update');
//Route::get('/books/del', 'BookController@delete');
Route::post('/books/del', 'BookController@remove');
Route::get('/books/show', 'BookController@show');

Route::get('ajax/book', 'Ajax\BookController@index');