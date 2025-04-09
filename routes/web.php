<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/about', 'about')->name('about');
    Route::get('/services', 'services')->name('services');
    Route::get('/contact', 'contact')->name('contact');
});

Route::get('/login', [AuthController::class,'showLogin'])->name('login');
Route::post('/login', [AuthController::class,'login'])->name('login.submit');

Route::get('/register', [AuthController::class,'showRegis'])->name('register');
Route::post('/register', [AuthController::class,'register'])->name('register.submit');

Route::prefix('dashboard')->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    
    Route::prefix('user')->name('user.')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('dashboard');
        
        // Create Event Process 
        Route::get('/create_event', [UserController::class, 'createEvent'])->name('create_event');
        Route::post('/store_event', [UserController::class, 'storeEvent'])->name('store_event');
        
        // List Event
        Route::get('/list_events', [UserController::class, 'listEvents'])->name('list_events');
        Route::get('/edit_event', [UserController::class, 'editEvent'])->name('edit_event');
        
        // Add Guest
        Route::get('/add_guests', [UserController::class, 'addGuests'])->name('add_guests');
        Route::post('/store_guest', [UserController::class, 'storeGuest'])->name('store_guest');
        
        Route::get('/list_guests', [UserController::class, 'listGuests'])->name('list_guests');

    });
});
