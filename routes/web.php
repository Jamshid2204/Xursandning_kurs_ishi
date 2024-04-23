<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/appointment', [PageController::class, 'moappointmentre'])->name('appointment');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/feature', [PageController::class, 'feature'])->name('feature');
Route::get('/service', [PageController::class, 'service'])->name('service');
Route::get('/team', [PageController::class, 'team'])->name('team');
Route::get('/testimonial', [PageController::class, 'testimonial'])->name('testimonial');
Route::get('/404', [PageController::class, 'error'])->name('404');

Route::get('/more', [PageController::class, 'more'])->name('more');
