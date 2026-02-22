<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('/admin/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('/about-us', [HomeController::class, 'about'])->name('about-us');
Route::get('/events', [HomeController::class, 'events'])->name('events');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact-us');
Route::get('/events', [HomeController::class, 'viewEvents'])->name('events');
Route::post('/contact', [HomeController::class, 'storeContact'])->name('contact.store');





Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/events', [AdminController::class, 'events'])->name('events');
    Route::get('/contact', [AdminController::class, 'contact'])->name('contact');
});


Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {

    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::get('/events', [EventController::class, 'index'])->name('events');

    Route::get('/events/create', [EventController::class, 'create'])->name('events.create');

    Route::post('/events', [EventController::class, 'store'])->name('events.store');

    Route::get('/events/{event}/edit', [EventController::class, 'edit'])->name('events.edit');

    Route::put('/events/{event}', [EventController::class, 'update'])->name('events.update');

    Route::delete('/events/{event}', [EventController::class, 'destroy'])->name('events.destroy');
});
require __DIR__ . '/auth.php';
