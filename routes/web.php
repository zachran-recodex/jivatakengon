<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('home');

Route::get('/about', [MainController::class, 'about'])->name('about');

Route::get('/contact', [MainController::class, 'contact'])->name('contact');

Route::get('/event', [MainController::class, 'event'])->name('event');

Route::get('/gallery', [MainController::class, 'gallery'])->name('gallery');

Route::get('/service', [MainController::class, 'service'])->name('service');
Route::get('/service/service-detail', [MainController::class, 'serviceDetail'])->name('service-detail');

Route::get('/blog', [MainController::class, 'blog'])->name('blog');
Route::get('/blog/blog-detail', [MainController::class, 'blogDetail'])->name('blog-detail');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
