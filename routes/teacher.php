<?php

use App\Http\Controllers\Dashboard\Teacher\TeacherController;
use App\Http\Controllers\teacher\SingleSession\SingleSessionController;
use Illuminate\Support\Facades\Route;




Route::namespace('teacher')->middleware('guest:teacher')->name('teacher.')->group(function () {
    Route::get('/teacher/login', [TeacherController::class, 'login'])->name('login-view');
    Route::post('/teacher/teacher-login', [TeacherController::class, 'teacherLogin'])->name('login');
});

Route::group(['middleware'=>'teacher'],function(){
    Route::get('/teacher/teacher-dashboard', [TeacherController::class, 'teacherDashboard'])->name('teacher.dashboard');
    Route::get('/teacher/logout', [TeacherController::class, 'logout'])->name('teacher.logout');

    Route::namespace('single-sessions')->name('single-sessions.')->group(function () {
        Route::get('/single-sessions/index', [SingleSessionController::class, 'index'])->name('index');
        Route::get('/single-sessions/create', [SingleSessionController::class, 'create'])->name('create');
    });
});


