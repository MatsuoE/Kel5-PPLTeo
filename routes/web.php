<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cplsnController;
use App\Http\Controllers\cplpController;

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
Route::get('/', [cplsnController::class, 'index']);
Route::resource('cplsn', cplsnController::class);
Route::get('/cpl-p', [cplpController::class, 'index']);
Route::resource('cplp', cplpController::class);
