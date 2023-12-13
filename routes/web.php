<?php

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
});

Auth::routes();

Route::group(['middleware'=>'auth'], function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/course', [App\Http\Controllers\HomeController::class, 'course'])->name('course');
    Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profil'])->name('profile');
    Route::get('/batch', [App\Http\Controllers\BatchController::class, 'index'])->name('batch');
    Route::get('/courses', [App\Http\Controllers\CourseController::class, 'index'])->name('courses');
    Route::get('/mentor', [App\Http\Controllers\MentorController::class, 'index'])->name('mentor');
    Route::get('/student', [App\Http\Controllers\StudentController::class, 'index'])->name('student');
    Route::get('/total', [App\Http\Controllers\TotalController::class, 'index'])->name('total');
    Route::get('/visual', [App\Http\Controllers\TotalController::class, 'chart'])->name('visual');
    Route::get('/score', [App\Http\Controllers\ScoreController::class, 'index'])->name('score');
    Route::get('/visualScore', [App\Http\Controllers\ScoreController::class, 'average'])->name('visualScore');
    Route::get('/passedFailed', [App\Http\Controllers\ScoreController::class, 'total'])->name('passedFailed');
});
