<?php

use App\Http\Controllers\Api\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/students/settings', [StudentController::class, 'settings'])->name('students.settings');
    Route::get('/teachers', [StudentController::class, 'teachers'])->name('students.teachers');
    Route::get('/notifications', [StudentController::class, 'notifications'])->name('students.notifications');
    Route::get('/banners', [StudentController::class, 'banners'])->name('students.banners');
    Route::get('/news', [StudentController::class, 'news'])->name('students.news');
    Route::get('/faqs', [StudentController::class, 'faqs'])->name('students.faqs');
});

Route::post('/students/register', [StudentController::class, 'register'])->name('students.register');
Route::post('/students/login', [StudentController::class, 'login'])->name('students.login');
