<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use \App\Http\Controllers\ClassesController;
use \App\Http\Controllers\GradeController;
use \App\Http\Controllers\LevelController;
use \App\Http\Controllers\DayController;
use \App\Http\Controllers\TimeController;
use \App\Http\Controllers\ShiftController;
use \App\Http\Controllers\SubjectController;
use \App\Http\Controllers\SessionController;

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

Route::prefix()->group(function() {
    Route::resource('classes', ClassesController::class);
    Route::resource('grades', GradeController::class);
    Route::resource('levels', LevelController::class);
    Route::resource('days', DayController::class);
    Route::resource('times', TimeController::class);
    Route::resource('shifts', ShiftController::class);
    Route::resource('subjects', SubjectController::class);
    Route::resource('sessions', SessionController::class);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
