<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostinganController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('beranda');
});

Route::resource('/dashboard', DashboardController::class)->middleware(['auth', 'verified']);
Route::resource('/postingan', PostinganController::class)->middleware(['auth', 'verified']);

// Route::get('/dashboard-postingan', function () {
//     return view('admin.postingan');
// })->middleware(['auth', 'verified'])->name('postingan');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
