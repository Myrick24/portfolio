<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\AdminController;

// Main site routes
Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/about', [SiteController::class, 'about'])->name('about');
Route::get('/skills', [SiteController::class, 'skills'])->name('skills');
Route::get('/portfolio', [SiteController::class, 'portfolio'])->name('portfolio');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
Route::post('/contact', [SiteController::class, 'submitContact'])->name('contact.submit');

// Project detail pages
Route::get('/project-1', [PortfolioController::class, 'project1'])->name('project1');
Route::get('/project-2', [PortfolioController::class, 'project2'])->name('project2');
Route::get('/project-3', [PortfolioController::class, 'project3'])->name('project3');

// Admin routes
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    
    // Project management
    Route::get('/projects', [AdminController::class, 'projects'])->name('admin.projects');
    Route::get('/projects/create', [AdminController::class, 'createProject'])->name('admin.projects.create');
    Route::post('/projects', [AdminController::class, 'storeProject'])->name('admin.projects.store');
    Route::get('/projects/{project}/edit', [AdminController::class, 'editProject'])->name('admin.projects.edit');
    Route::put('/projects/{project}', [AdminController::class, 'updateProject'])->name('admin.projects.update');
    Route::delete('/projects/{project}', [AdminController::class, 'deleteProject'])->name('admin.projects.delete');
});

// Authentication routes
Route::post('/logout', function() {
    return redirect('/admin');
})->name('logout');
