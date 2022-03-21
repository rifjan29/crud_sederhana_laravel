<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProdukController;
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
    return view('welcome');
})
;

Route::get('/dashboard', [CategoryController::class,'dashboard']);
Route::prefix('/dashboard')->group(function () {
    Route::resource('/kategori', CategoryController::class);
    Route::resource('/produk', ProdukController::class);
});

