<?php

/*use Illuminate\Support\Facades\Route; */

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

/*Route::get('/', function () {
    return view('welcome');
});
*/
use App\Http\Controllers\BookController;
Route::get('/', [BookController::class, 'index']);
Route::get('/edit/{id}', [BookController::class, 'edit']);
Route::get('/show/{id}', [BookController::class, 'show']);
Route::get('/create', [BookController::class, 'create']);
Route::post('/store', [BookController::class, 'store']);
Route::post('/update/{id}', [BookController::class, 'update']);
Route::get('/delete/{id}', [BookController::class, 'destroy']);
