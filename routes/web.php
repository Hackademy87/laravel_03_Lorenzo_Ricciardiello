<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myController;

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

Route::get('/', [myController::class,'welcome'] 
)->name('HOME');

Route::get('/generi/{categoria}',[myController::class,'categoriePerNomi'])->name('generi');

Route::get('scheda/{id}',[myController::class,'schedaFilm'])->name('scheda');

