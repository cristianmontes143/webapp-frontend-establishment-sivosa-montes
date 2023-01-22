<?php

use App\Http\Controllers\ProfileController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AnnouncementController;
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

Route::prefix('/dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/announcement', [AnnouncementController::class, 'index'])->name('dashboard.announcement');
    Route::get('/announcement/add', [AnnouncementController::class, 'form'])->name('dashboard.addannouncement');
    Route::post('/announcement/add', [AnnouncementController::class, 'store'])->name('dashboard.announcementadd');
    Route::get('/announcement/update/{id}', [AnnouncementController::class, 'show'])->name('dashboard.announcementupdate');
    Route::post('/announcement/update/{id}', [AnnouncementController::class, 'update'])->name('dashboard.update');
    Route::get('/announcement/delete/{id}', [AnnouncementController::class, 'delete'])->name('dashboard.announcementdelete');
    Route::post('/announcement/delete/{id}', [AnnouncementController::class, 'destroy'])->name('dashboard.delete');
})->middleware(['auth', 'verified']);

//  Route::get('/announcement', [AnnouncementController::class, 'index'])->Route::middleware(['auth', 'verified'])->name(announcement);






Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/register', function(){
    return view('dashboard.appregister');
});
require __DIR__.'/auth.php';
