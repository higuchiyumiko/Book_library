<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
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

Route::get('/', [BookController::class,'index']);
Route::get('/books/create',[BookController::class,'create']);
Route::delete('books/{book}',[BookController::class,'delete']);
Route::get('books/{book}/edit',[BookController::class,'edit']);
Route::put('books/{book}',[BookController::class,'update']);
Route::get('/books/{book}',[BookController::class,'show']);
Route::post('/books',[BookController::class,'store']);
Route::get('/categories/{category}',[CategoryController::class,'index']);
//Route::get('/books',[BookController::class,'index']);
