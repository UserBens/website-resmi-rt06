<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProkerController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\NotulenController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PengurusController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostinganController;
use App\Http\Controllers\WargatetapController;
use App\Http\Controllers\DatapendudukController;
use App\Http\Controllers\WargakontrakController;
use App\Http\Controllers\WargakosController;
use App\Http\Controllers\WargatidaktetapController;

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

Route::get('/', [BerandaController::class, 'index']);
Route::get('/post', [BerandaController::class, 'postingan'])->name('post');
Route::get('/prod', [BerandaController::class, 'produk'])->name('prod');
Route::get('/prok', [BerandaController::class, 'proker'])->name('prok');
Route::get('/ttg-kami', [BerandaController::class, 'tentangkami'])->name('ttgkami');
Route::get('/kontak', [BerandaController::class, 'kontak'])->name('kontak');
Route::get('/detail-post/{id}', [BerandaController::class, 'detailpost'])->name('detailpost');
Route::get('/detail-prod/{id}', [BerandaController::class, 'detailprod'])->name('detailprod');

Route::resource('/dashboard', DashboardController::class)->middleware(['auth', 'verified']);
Route::resource('/postingan', PostinganController::class)->middleware(['auth', 'verified']);
Route::resource('/produk', ProdukController::class)->middleware(['auth', 'verified']);
Route::resource('/notulen', NotulenController::class)->middleware(['auth', 'verified']);
Route::resource('/pengurus', PengurusController::class)->middleware(['auth', 'verified']);
Route::resource('/proker', ProkerController::class)->middleware(['auth', 'verified']);

Route::get('/data-penduduk', [DatapendudukController::class, 'index'])->middleware(['auth', 'verified'])->name('datapenduduk');
Route::post('/data-penduduk', [DatapendudukController::class, 'updatedatapenduduk'])->middleware(['auth', 'verified'])->name('datapenduduk.update');
Route::get('/warga-tetap', [WargatetapController::class, 'index'])->middleware(['auth', 'verified'])->name('wargatetap');
Route::post('/warga-tetap', [WargatetapController::class, 'updatewargatetap'])->middleware(['auth', 'verified'])->name('wargatetap.update');
Route::get('/warga-tidak-tetap', [WargatidaktetapController::class, 'index'])->middleware(['auth', 'verified'])->name('wargatidaktetap');
Route::post('/warga-tidak-tetap', [WargatidaktetapController::class, 'updatewargatidaktetap'])->middleware(['auth', 'verified'])->name('wargatidaktetap.update');
Route::get('/warga-kontrak', [WargakontrakController::class, 'index'])->middleware(['auth', 'verified'])->name('wargakontrak');
Route::post('/warga-kontrak', [WargakontrakController::class, 'updatewargakontrak'])->middleware(['auth', 'verified'])->name('wargakontrak.update');
Route::get('/warga-kos', [WargakosController::class, 'index'])->middleware(['auth', 'verified'])->name('wargakos');
Route::post('/warga-kos', [WargakosController::class, 'updatewargakos'])->middleware(['auth', 'verified'])->name('wargakos.update');

// Route::get('/notulen/search', [NotulenController::class, 'search'])->name('notulen.search');


// Route::get('/dashboard-postingan', function () {
//     return view('admin.postingan');
// })->middleware(['auth', 'verified'])->name('postingan');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
