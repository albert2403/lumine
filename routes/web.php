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
Route::get('/profile', [AuthController::class,'profile'])->name('profile');


Route::prefix('dashboard')->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/checkin', [AdminController::class, 'checkin'])->name('admin.checkin');
    Route::get('/admin/1', [AdminController::class, 'showQr'])->name('admin.validation');
    
    Route::prefix('user')->name('user.')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('dashboard');
        Route::get('/payment', [UserController::class, 'payment'])->name('payment');
        Route::get('/theme', [UserController::class, 'theme'])->name('theme');
        
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
        Route::post('/edit_guests', [UserController::class, 'editGuests'])->name('edit_guests');
        
        Route::get('/add_table', [UserController::class, 'addTable'])->name('add_table');
        Route::get('/report', [UserController::class, 'report'])->name('report');

    });
});
