<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('login');

Route::group(['middleware' => ['auth','level:Admin']], function(){
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
});

Route::group(['middleware' => ['auth','level:Member']], function(){
    Route::get('/beranda', function () {
        return view('beranda');
    })->name('beranda');

});

Route::get('product',[ProductController::class,'show']);
Route::get('product/add',[ProductController::class,'add']);
Route::post('product/create',[ProductController::class,'create']);
Route::get('product/hapus/{id}',[ProductController::class,'hapus']);
Route::get('product/edit/{id}',[ProductController::class,'edit']);
Route::post('product/update/{id}',[ProductController::class,'update']);

Route::get('beranda',[BarangController::class,'show']);
Route::get('product/detail/{id}',[BarangController::class,'detail']);