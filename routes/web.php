<?php

use App\Http\Controllers\Auth\Admin\LoginController;
use App\Http\Controllers\backend\DoctrController;
use App\Http\Controllers\backend\SpecialistController;
use App\Http\Controllers\frontend\AppointmentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


// Frontend
Route::get('/', function () {
    return view('frontend.home');
});

Route::get('/about', function () {
    return view('frontend.about');
});



Route::get('/appointment', [AppointmentController::class, 'formview'])->name('appointment.create');
Route::post('/appointment', [AppointmentController::class, 'store'])->name('appointment.store');






// Route::get('/admin/dashboard', function () {
//     return view('backend.admin_dashboard');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// admin route
Route::middleware('guest:admin')->prefix('admin')->group( function () {

    Route::get('login', [App\Http\Controllers\Auth\Admin\LoginController::class, 'login'])->name('admin.login');
    Route::post('login', [App\Http\Controllers\Auth\Admin\LoginController::class, 'check_user']);

    
});

Route::middleware('auth:admin')->prefix('admin')->group( function () {

    Route::post('logout', [App\Http\Controllers\Auth\Admin\LoginController::class, 'logout'])->name('admin.logout');

    Route::view('/dashboard','backend.admin_dashboard');
    Route::resource('/specialist',SpecialistController::class);
    Route::resource('/doctor',DoctrController::class);

});

require __DIR__.'/auth.php';

// doctor route

Route::middleware('guest:doctor')->prefix('doctor')->group( function () {

    Route::get('login', [App\Http\Controllers\Auth\Doctor\LoginController::class, 'login'])->name('doctor.login');
    Route::post('login', [App\Http\Controllers\Auth\Doctor\LoginController::class, 'check_user']);

    
});

Route::middleware('auth:doctor')->prefix('doctor')->group( function () {

    Route::post('logout', [App\Http\Controllers\Auth\Doctor\LoginController::class, 'logout'])->name('doctor.logout');

    Route::view('/dashboard','backend.doctor_dashboard');

});
