<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/hakkimizda', [PageController::class, 'about'])->name('about');
Route::get('/projeler', [PageController::class, 'projects'])->name('projects');
Route::get('/iletisim', [PageController::class, 'contact'])->name('contact');
Route::get('/projeler/{project}', [PageController::class, 'projectDetails'])->name('projects.show');

// İletişim formu için post route'u
Route::post('/iletisim', [PageController::class, 'submitContact'])->name('contact.submit');
