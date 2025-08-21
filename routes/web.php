<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;

// Home route
Route::get('/', [HomeController::class, 'index'])->name('home');

// About route
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Projects routes
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');

// Blog routes
Route::get('/blog', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/blog/{article}', [ArticleController::class, 'show'])->name('articles.show');

// Contact routes
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
