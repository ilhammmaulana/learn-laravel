<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Helpers\Hello;		
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
Route::get('', [BookController::class, ''])
Route::get('/buku', [BookController::class, 'viewBook'])
->middleware('admin');
// Route::get('/hi',[Hello::class , 'sayHello']);
// Route::get('/hi', );
Route::get('/hi', function(){
	return bilangHello();
});


Route::post('buku/add', [BookController::class, 'postAddBook']);
Route::post('buku/edit', [BookController::class, 'postEditBook']);
Route::post('buku/delete', [BookController::class, 'postDeleteBook']);


