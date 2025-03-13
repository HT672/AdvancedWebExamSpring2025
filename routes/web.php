<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;

Route::get('/', [CourseController::class, 'index']);
Route::resource('courses', CourseController::class);

Route::get('/', [StudentController::class, 'index']);
Route::resource('students', StudentController::class);
Route::post('/students/ajax-store', [RecipeController::class, 'ajaxStore'])->name('students.ajaxStore'); // AJAX Route