<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\authController;
use App\Http\Controllers\admin\CourseController;
use App\Http\Controllers\frontEnd\homeController;
use App\Http\Controllers\admin\AdminauthController;
use App\Http\Controllers\admin\dashboardController;
use App\Http\Controllers\admin\ArchCourseController;
use App\Http\Controllers\admin\CourseArchController;
use App\Http\Controllers\frontend\studentController;
use App\Http\Controllers\admin\ArchCourseLessonController;

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
Route::get('/home',[homeController::class, 'index']);

// normal user auth route
Route::controller(authController::class)->middleware('guest')->group(function () {
    Route::get('login','getLogin')->name('login');
    Route::post('login','loginAction')->name('login');
    Route::get('register','getRegister')->name('register');
    Route::post('register','registerAction')->name('register');
});

// admin auth route
Route::controller(AdminauthController::class)->group(function () {
    Route::get('AminLogin','getLogin')->name('AminLogin');
    Route::post('AminLogin','loginAction')->name('AminLogin');
    Route::get('AdminRegister','getRegister')->name('AdminRegister');
    Route::post('AdminRegister','registerAction')->name('AdminRegister');
    Route::get('AdminLogout','logOut')->name('AdminLogout');
});


// admin routes
Route::prefix('admin')->middleware('adminAuth')->group(function () {

    //  dashboard
    Route::get('dashboard',[App\Http\Controllers\admin\Dashboard::class,'index']);
    // CourseArchive Route 
    Route::resource('Courses', CourseController::class);

    // Archive Course Route
    Route::controller(ArchCourseController::class)->group(function () {
    Route::get('ArchCourses','index');
    Route::get('ArchCourses/Create','create');
    Route::post('ArchCourses/Store','store');
    Route::get('ArchCourses/Edit/{id}','edit');
    Route::post('ArchCourses/Update/{id}','update');
    Route::get('ArchCourses/Delete/{id}','destroy');
    // Route::get('/editPost/{post_id}',[PostController  ::class,'edit']);
    // Route::PUT('/updatePost/{post_id}',[PostController::class,'update']);
    // Route::get('/deletePost/{post_id}',[PostController::class, 'delete']);
    });

    // Archive Course Lesson Route
    Route::controller(ArchCourseLessonController::class)->group(function () {
    Route::get('ArchCourseLesson','index');
    Route::get('ArchCourseLesson/Create','create');
    Route::post('ArchCourseLesson/Store','store');
    Route::post('ArchCourseLesson/Edit','edit');
    Route::get('ArchCourseLesson/Update','update');
});


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

