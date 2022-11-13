<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\authController;
use App\Http\Controllers\admin\batchController;
use App\Http\Controllers\admin\courseController;
use App\Http\Controllers\frontEnd\homeController;
use App\Http\Controllers\admin\dashboardController;
use App\Http\Controllers\frontend\studentController;

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

// home page route
Route::get('/',[homeController::class, 'index']);

// authenticate route

Route::controller(authController::class)->middleware('guest')->group(function () {
    Route::get('login','getLogin')->name('login');
    Route::post('login','loginAction')->name('login');
    Route::get('register','getRegister')->name('register');
    Route::post('register','registerAction')->name('register');
});
// admin routes
Route::prefix('admin')->middleware('auth')->group(function () {

    // account Controller Route
    Route::get('/dashboard', [dashboardController::class, 'index']);
    // course Controller Route
    Route::controller(courseController::class)->group(function(){
        Route::get('/course',  'index');
        Route::get('/createCoure', 'create');
    });
    // batch Controller Route
    Route::get('/batch', [batchController::class, 'index']);


});

// student dashboard
Route::controller(studentController::class)->middleware('auth')->group(function (){

    Route::get('studetn_dashoard','index');
    // log out Controller Route
    Route::controller(authController::class)->group(function(){
        Route::get('logOut', 'logOut')->name('logOut');
    });
});

// comment by sihab
// comment by devnurul
// comment by sukhy
// agian comment

