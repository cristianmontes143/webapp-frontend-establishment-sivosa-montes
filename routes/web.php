<?php

use App\Http\Controllers\ProfileController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('/', PagesController::class);

Route::get('/dashboard', function () {
    return view('dashboard.appdashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/announcement', [AnnouncementController::class, 'index'])->Route::middleware(['auth', 'verified'])->name(announcement);
    


// Route:get('/announ', function(){
//     return view('dashboard.AnnouncementController');
// });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/register', function(){
    return view('dashboard.appregister');
});
require __DIR__.'/auth.php';
