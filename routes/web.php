<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\IndexController;
use App\Http\Controllers\backend\AdminLoginController;
use App\Http\Controllers\backend\AdminHomeController;
use App\Http\Controllers\backend\AdminSettingsController;
use App\Http\Controllers\backend\AdminServicesController;
use App\Http\Controllers\backend\AdminSkillsController;
use App\Http\Controllers\backend\AdminPartnersController;
use App\Http\Controllers\backend\AdminProjectsController;

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/project/{id}', [IndexController::class, 'showProject'])->name('project.show');

// Contact form submission
use App\Http\Controllers\frontend\ContactController;
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/admin/login', [AdminLoginController::class, 'index']);
Route::post('/admin/login', [AdminLoginController::class, 'onLogin']);
Route::get('/admin/logout', [AdminLoginController::class, 'logoutAdmin']);

Route::get('/admin', [AdminHomeController::class, 'index']);

// Route::get('/admin', [AdminHomeController::class, 'index'])->middleware('admin_auth')->name('admin.dashboard');

//Admin Management
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/register', [AdminHomeController::class, 'registerAdmin'])->name('create');
    Route::post('/register', [AdminHomeController::class, 'submitAdminRecord'])->name('store');
    Route::get('/admins-list', [AdminHomeController::class, 'showAdminRecord'])->name('show');
    Route::get('/delete/{id}', [AdminHomeController::class, 'deleteAdminRecord'])->name('delete');
    Route::get('/edit/{id}', [AdminHomeController::class, 'editAdminRecord'])->name('edit');
    Route::post('/update/{id}', [AdminHomeController::class, 'updateAdminRecord'])->name('update');
});

// Site Settings Management
Route::prefix('admin')->name('settings.')->group(function () {
    Route::get('/settings', [AdminSettingsController::class, 'index'])->name('show');
    Route::post('/settings', [AdminSettingsController::class, 'update'])->name('update');
});

// Services Management
Route::prefix('admin')->name('service.')->group(function () {
    Route::get('/services', [AdminServicesController::class, 'index'])->name('show');
    Route::get('/service-add', [AdminServicesController::class, 'addService'])->name('add');
    Route::post('/service-add', [AdminServicesController::class, 'submitServiceRecord']);
    Route::get('/service-edit/{id}', [AdminServicesController::class, 'editService'])->name('edit');
    Route::put('/service-edit/{id}', [AdminServicesController::class, 'updateService'])->name('update');
    Route::delete('/service-delete/{id}', [AdminServicesController::class, 'deleteService'])->name('delete');
});

// Skills Management
Route::prefix('admin')->name('skill.')->group(function () {
    Route::get('/skills', [AdminSkillsController::class, 'index'])->name('show');
    Route::get('/skill-add', [AdminSkillsController::class, 'addSkill'])->name('add');
    Route::post('/skill-add', [AdminSkillsController::class, 'submitSkillRecord']);
    Route::get('/skill-edit/{id}', [AdminSkillsController::class, 'editSkill'])->name('edit');
    Route::put('/skill-edit/{id}', [AdminSkillsController::class, 'updateSkill'])->name('update');
    Route::delete('/skill-delete/{id}', [AdminSkillsController::class, 'deleteSkill'])->name('delete');
});

// Partners Management
Route::prefix('admin')->name('partner.')->group(function () {
    Route::get('/partners', [AdminPartnersController::class, 'index'])->name('show');
    Route::get('/partner-add', [AdminPartnersController::class, 'addPartner'])->name('add');
    Route::post('/partner-add', [AdminPartnersController::class, 'submitPartnerRecord']);
    Route::get('/partner-edit/{id}', [AdminPartnersController::class, 'editPartner'])->name('edit');
    Route::put('/partner-edit/{id}', [AdminPartnersController::class, 'updatePartner'])->name('update');
    Route::delete('/partner-delete/{id}', [AdminPartnersController::class, 'deletePartner'])->name('delete');
});

// Project Management
Route::prefix('admin')->name('project.')->group(function () {
    Route::get('/projects', [AdminProjectsController::class, 'index'])->name('show');  // list projects

    Route::get('/project-add', [AdminProjectsController::class, 'addProject'])->name('add');
    Route::post('/project-add', [AdminProjectsController::class, 'submitProjectRecord']);

    Route::get('/project-edit/{id}', [AdminProjectsController::class, 'editProject'])->name('edit');
    Route::put('/project-edit/{id}', [AdminProjectsController::class, 'updateProject'])->name('update');

    Route::delete('/project-delete/{id}', [AdminProjectsController::class, 'deleteProject'])->name('delete');
});

// Contacts management (admin)
use App\Http\Controllers\backend\AdminContactsController;
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/contacts', [AdminContactsController::class, 'index'])->name('contacts.index');
    Route::get('/contacts/{id}', [AdminContactsController::class, 'show'])->name('contacts.show');
    Route::delete('/contacts/{id}', [AdminContactsController::class, 'destroy'])->name('contacts.destroy');
});



// Note: logout handled by AdminLoginController::logoutAdmin

