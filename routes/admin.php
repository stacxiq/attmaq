<?php
<<<<<<< HEAD

use App\Http\Controllers\Dashboard\Banner\BannerController;
use App\Http\Controllers\Dashboard\CustomNotification\CustomNotificationController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\Faq\FaqController;
use App\Http\Controllers\Dashboard\News\NewsController;
use App\Http\Controllers\Dashboard\Notification\NotificationsController;
use App\Http\Controllers\Dashboard\Settings\SettingsController;
use App\Http\Controllers\Dashboard\Students\StudentController;
=======
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\News\NewsController;
use App\Http\Controllers\Dashboard\Notification\NotificationsController;
>>>>>>> b71d6a1 (add notifications)
use App\Http\Controllers\Dashboard\Teacher\TeacherController;
use App\Http\Controllers\Dashboard\Session\SessionGroupController;
use App\Http\Controllers\QuranController;
use Illuminate\Support\Facades\Route;

<<<<<<< HEAD
Route::namespace('admin')->middleware('auth')->name('admin.')->group(function () {
=======
Route::namespace('admin')->name('admin.')->group(function () {
>>>>>>> b71d6a1 (add notifications)
    Route::get('/admin/sessions', [SessionGroupController::class, 'index'])->name('sessions.index');
    Route::get('/admin/sessions/create', [SessionGroupController::class, 'create'])->name('sessions.create');
    Route::post('/admin/sessions/store', [SessionGroupController::class, 'store'])->name('sessions.store');
    Route::get('/admin/sessions/edit/{id}', [SessionGroupController::class, 'edit'])->name('sessions.edit');
<<<<<<< HEAD
    Route::get('/admin/sessions/banner_create/{id}', [SessionGroupController::class, 'bannerAdd'])->name('sessions.addbanner');
    Route::put('/admin/sessions/update', [SessionGroupController::class, 'update'])->name('sessions.update');
    Route::get('/admin/sessions/remove/{id}', [SessionGroupController::class, 'destroy'])->name('sessions.destroy');

    Route::get('/admin/students', [StudentController::class, 'index'])->name('student.index');
    Route::get('/admin/students/create', [StudentController::class, 'create'])->name('student.create');
    Route::post('/admin/students/store', [StudentController::class, 'store'])->name('student.store');
    Route::get('/admin/students/edit/{id}', [StudentController::class, 'edit'])->name('student.edit');
    Route::put('/admin/students/update/{id}', [StudentController::class, 'update'])->name('student.update');
    Route::delete('/admin/students/remove/{id}', [StudentController::class, 'destroy'])->name('student.destroy');
=======
    Route::put('/admin/sessions/update', [SessionGroupController::class, 'update'])->name('sessions.update');
    Route::get('/admin/sessions/remove/{id}', [SessionGroupController::class, 'destroy'])->name('sessions.destroy');

    Route::get('/admin/quran', [QuranController::class, 'index'])->name('quran.index');
    Route::get('/admin/quran/create', [QuranController::class, 'create'])->name('quran.create');
    Route::post('/admin/quran/store', [QuranController::class, 'store'])->name('quran.store');
    Route::get('/admin/quran/edit/{id}', [QuranController::class, 'edit'])->name('quran.edit');
    Route::put('/admin/quran/update', [QuranController::class, 'update'])->name('quran.update');
    Route::get('/admin/quran/remove/{id}', [QuranController::class, 'destroy'])->name('quran.destroy');
>>>>>>> b71d6a1 (add notifications)
});

Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('admin/logout', [DashboardController::class, 'logout'])->name('admin.logout');

<<<<<<< HEAD
    Route::get('admin/faqs', [FaqController::class,'index'])->name('admin.faq.index');
    Route::get('admin/faqs/create', [FaqController::class,'create'])->name('admin.faq.create');
    Route::post('admin/faqs/store', [FaqController::class,'store'])->name('admin.faq.store');
    Route::get('admin/faqs/destroy/{id}', [FaqController::class,'destroy'])->name('admin.faq.destroy');
    Route::get('admin/faqs/edit/{id}', [FaqController::class,'edit'])->name('admin.faq.edit');
    Route::put('admin/faqs/update', [FaqController::class,'update'])->name('admin.faq.update');

    Route::get('admin/settings', [SettingsController::class,'index'])->name('admin.settings.index');
    Route::get('admin/settings/create', [SettingsController::class,'create'])->name('admin.settings.create');
    Route::post('admin/settings/store', [SettingsController::class,'store'])->name('admin.settings.store');
    Route::get('admin/settings/destroy/{id}', [SettingsController::class,'destroy'])->name('admin.settings.destroy');
    Route::get('admin/settings/edit/{id}', [SettingsController::class,'edit'])->name('admin.settings.edit');
    Route::put('admin/settings/update', [SettingsController::class,'update'])->name('admin.settings.update');

    Route::get('admin/banner', [BannerController::class,'index'])->name('admin.banner.index');
    Route::get('admin/banner/create', [BannerController::class,'create'])->name('admin.banner.create');
    Route::post('admin/banner/store', [BannerController::class,'store'])->name('admin.banner.store');
    Route::delete('admin/banner/destroy/{id}', [BannerController::class,'destroy'])->name('admin.banner.destroy');
    Route::get('admin/banner/edit/{id}', [BannerController::class,'edit'])->name('admin.banner.edit');
    Route::put('admin/banner/update', [BannerController::class,'update'])->name('admin.banner.update');



=======
>>>>>>> b71d6a1 (add notifications)
    Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers.index');
    Route::get('/teachers/create', [TeacherController::class, 'create'])->name('teachers.create');
    Route::post('/teachers/store', [TeacherController::class, 'store'])->name('teachers.store');
    Route::get('/teachers/edit/{id}', [TeacherController::class, 'edit'])->name('teachers.edit');
    Route::put('/teachers/update', [TeacherController::class, 'update'])->name('teachers.update');
    Route::get('/teachers/remove/{id}', [TeacherController::class, 'destroy'])->name('teachers.destroy');
<<<<<<< HEAD
    Route::get('/teachers/banner/{id}', [TeacherController::class, 'bannerCreate'])->name('teachers.banner');


    Route::get('/custom_notification', [CustomNotificationController::class, 'index'])->name('custom_notification.index');
    Route::get('/custom_notification/create', [CustomNotificationController::class, 'create'])->name('custom_notification.create');
    Route::post('/custom_notification/store', [CustomNotificationController::class, 'store'])->name('custom_notification.store');
    Route::get('/custom_notification/edit/{id}', [CustomNotificationController::class, 'edit'])->name('custom_notification.edit');
    Route::put('/custom_notification/update', [CustomNotificationController::class, 'update'])->name('custom_notification.update');
    Route::delete('/custom_notification/remove/{id}', [CustomNotificationController::class, 'destroy'])->name('custom_notification.destroy');




    Route::resource('news', NewsController::class);
    Route::get('news/addbanner/{id}', [NewsController::class, 'bannerCreate'])->name('news.addbanner');
    Route::resource('notifications', NotificationsController::class);


=======

    Route::resource('news', NewsController::class);
    Route::resource('notifications', NotificationsController::class);
>>>>>>> b71d6a1 (add notifications)
});



