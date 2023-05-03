<?php

use App\Http\Controllers\BukuController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

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
//get buku
Route::get('/', [BukuController::class,'buku'])->name('buku.index');

//create buku
Route::get('/buku/create',[BukuController::class,'create'])->name('buku.create');

Route::post('/',[BukuController::class,'store'])->name('buku.store');

//Delete Buku
Route::get('/buku/{id}',[BukuController::class,'destroy'])->name('buku.destroy');

//Edit Buku
Route::get('/buku/{id}/edit',[BukuController::class,'edit'])->name('buku.edit');
Route::post('/buku{id}',[BukuController::class,'update'])->name('buku.update');