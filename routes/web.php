<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ApplicationTypeController;
use App\Http\Controllers\CampusesController;
use App\Http\Controllers\HomeStudentController;
use App\Http\Controllers\NACTE_LocationController;
use App\Http\Controllers\OlevelCompletionController;
use Illuminate\Support\Facades\Route;



require __DIR__ . '/auth.php';



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

});


Route::prefix('admin')->as('admin.')->middleware(['auth'])->group(function () {

    Route::resource('application_type', ApplicationTypeController::class);

    Route::resource('olevel_completion_status', OlevelCompletionController::class);

    Route::resource('campuses', CampusesController::class);
});




Route::prefix('student')->as('student.')->group(function () {

    Route::get('/', [HomeStudentController::class, 'index'])->name('home');

    Route::get('application/form', [HomeStudentController::class, 'apply_form'])->name('apply_form');

    Route::resource('application', ApplicationController::class);

    Route::get('dashboard', [HomeStudentController::class, 'after_login'])->name('dashboard');
});



