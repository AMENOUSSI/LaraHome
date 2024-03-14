<?php

use App\Http\Controllers\AdditionController;
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

Route::get('/', function () {
    return view('layouts.app');
});

Route::get('/addition',[AdditionController::class,'index'])->name('addition');
Route::post('/additionNumbbers',[AdditionController::class,'result'])->name('additionNumbbers');


Route::get('/multiplication',[AdditionController::class,'multi'])->name('multiplication');
Route::post('/multiplyNumbbers',[AdditionController::class,'multiply'])->name('multiplyNumbbers');

Route::get('/sqrt',[AdditionController::class,'racine'])->name('sqrt');
Route::post('/sqrtOfNumbers',[AdditionController::class,'squareRootOf'])->name('sqrtOfNumbbers');

