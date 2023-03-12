<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ApplicationTypeController;
use App\Http\Controllers\CampusesController;
use App\Http\Controllers\HomeStudentController;
use Illuminate\Support\Facades\Route;



require __DIR__ . '/auth.php';

// This route is used for login
Route::get('/', [HomeStudentController::class, 'index'])->name('home');

//this routes are used by student
Route::get('student/application/form', [HomeStudentController::class, 'apply_form'])->name('student.apply_form');
Route::post('student/application/form/submit', [HomeStudentController::class, 'apply_form_submit'])->name('student.apply_form_submit');




// Students routes
Route::prefix('student')->as('student.')->middleware(['auth'])->group(function () {

    // Route::resource('application', ApplicationController::class);

    Route::get('dashboard', [HomeStudentController::class, 'after_login'])->name('dashboard');

    Route::get('profile', [HomeStudentController::class, 'view_profile'])->name('profile');

    Route::get('applications', [HomeStudentController::class, 'view_application_details'])->name('application');

    Route::get('show/applications/{id}', [HomeStudentController::class, 'show_application_details'])->name('show_application');
});



// Admin all route starts here
Route::controller(AdminController::class)->middleware(['auth'])->group(function () {

    Route::get('admin/logout', 'destroy')->name('admin.logout');

    Route::get('admin/dashboard', 'index')->name('admin.dashboard');

    Route::get('admin/profile', 'profile')->name('admin.view_profile');

    Route::get('admin/edit/profile', 'edit_profile')->name('admin.edit_profile');

    Route::post('admin/update/profile', 'update_profile')->name('admin.update_profile');

    Route::get('admin/change/password', 'change_password')->name('admin.change_password');

    Route::post('admin/update/password', 'update_password')->name('admin.update_password');

    Route::get('admin/applications', 'view_application_details')->name('admin.application');

    Route::get('admin/show/applications/{id}', 'show_application_details')->name('admin.show_application');

    Route::post('admin/change/application-status', 'change_application_status')->name('admin.update_application_status');
});


Route::prefix('admin')->as('admin.')->middleware(['auth'])->group(function () {

    Route::resource('application_type', ApplicationTypeController::class);

    Route::resource('campuses', CampusesController::class);
});
