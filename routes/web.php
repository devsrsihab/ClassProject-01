<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\batchController;
use App\Http\Controllers\admin\courseController;
use App\Http\Controllers\admin\dashboardController;

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

 
Route::prefix('admin')->group(function () {
    
    // account Controller Route 
    Route::get('/dashboard', [dashboardController::class, 'index']);
    // course Controller Route 
    Route::get('/course', [courseController::class, 'index']);
    // batch Controller Route 
    Route::get('/batch', [batchController::class, 'index']);
 

});