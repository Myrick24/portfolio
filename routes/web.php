<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

// Clean routes as per requirements
Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/about', [SiteController::class, 'about'])->name('about');
Route::get('/skills', [SiteController::class, 'skills'])->name('skills');
Route::get('/portfolio', [SiteController::class, 'portfolio'])->name('portfolio');
Route::get('/project1', [SiteController::class, 'project1'])->name('project1');
Route::get('/project2', [SiteController::class, 'project2'])->name('project2');
Route::get('/project3', [SiteController::class, 'project3'])->name('project3');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
Route::post('/contact', [SiteController::class, 'submitContact'])->name('contact.submit');
