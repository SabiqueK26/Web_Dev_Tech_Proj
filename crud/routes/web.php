<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaxController;

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
    return view('insert');
});

Route::post('store',[TaxController::class,'store']);
Route::get('/show',[TaxController::class,'show']);
Route::get('/delete/{id}',[TaxController::class,'destroy']);
Route::get('/edit/{id}',[TaxController::class,'edit']);
Route::post('/update/{id}',[TaxController::class,'update']);