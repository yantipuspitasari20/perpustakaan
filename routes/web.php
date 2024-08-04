<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PenulisController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RakController;
use App\Http\Controllers\SanksiController; // Pastikan Anda punya controller untuk Sanksi
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/anggota', [AnggotaController::class, 'index'])->name('anggota.index');
    Route::get('/anggota/create', [AnggotaController::class, 'create'])->name('anggota.create');
    Route::post('/anggota', [AnggotaController::class, 'store'])->name('anggota.store');
    Route::get('/anggota/{anggota}/edit', [AnggotaController::class, 'edit'])->name('anggota.edit');
    Route::put('/anggota/{anggota}', [AnggotaController::class, 'update'])->name('anggota.update');
    Route::delete('/anggota/{anggota}', [AnggotaController::class, 'destroy'])->name('anggota.destroy');

    Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');
    Route::get('/peminjaman/create', [PeminjamanController::class, 'create'])->name('peminjaman.create');
    Route::post('/peminjaman', [PeminjamanController::class, 'store'])->name('peminjaman.store');
    Route::get('/peminjaman/{peminjaman}/edit', [PeminjamanController::class, 'edit'])->name('peminjaman.edit');
    Route::put('/peminjaman/{peminjaman}', [PeminjamanController::class, 'update'])->name('peminjaman.update');
    Route::delete('/peminjaman/{peminjaman}', [PeminjamanController::class, 'destroy'])->name('peminjaman.destroy');

    Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');
    Route::get('/buku/create', [BukuController::class, 'create'])->name('buku.create');
    Route::post('/buku', [BukuController::class, 'store'])->name('buku.store');
    Route::get('/buku/{buku}/edit', [BukuController::class, 'edit'])->name('buku.edit');
    Route::put('/buku/{buku}', [BukuController::class, 'update'])->name('buku.update');
    Route::delete('/buku/{buku}', [BukuController::class, 'destroy'])->name('buku.destroy');

    Route::get('/penulis', [PenulisController::class, 'index'])->name('penulis.index');
    Route::get('/penulis/create', [PenulisController::class, 'create'])->name('penulis.create');
    Route::post('/penulis', [PenulisController::class, 'store'])->name('penulis.store');
    Route::get('/penulis/{id}/edit', [PenulisController::class, 'edit'])->name('penulis.edit');
    Route::put('/penulis/{id}', [PenulisController::class, 'update'])->name('penulis.update');
    Route::delete('/penulis/{id}', [PenulisController::class, 'destroy'])->name('penulis.destroy');


    Route::get('/rak', [RakController::class, 'index'])->name('rak.index');
    Route::get('/rak/create', [RakController::class, 'create'])->name('rak.create');
    Route::post('/rak', [RakController::class, 'store'])->name('rak.store');
    Route::get('/rak/{rak}/edit', [RakController::class, 'edit'])->name('rak.edit');
    Route::put('/rak/{rak}', [RakController::class, 'update'])->name('rak.update');
    Route::delete('/rak/{rak}', [RakController::class, 'destroy'])->name('rak.destroy');

    Route::get('/sanksi', [SanksiController::class, 'index'])->name('sanksi.index');
    Route::get('/sanksi/create', [SanksiController::class, 'create'])->name('sanksi.create');
    Route::post('/sanksi', [SanksiController::class, 'store'])->name('sanksi.store');
    Route::get('/sanksi/{sanksi}/edit', [SanksiController::class, 'edit'])->name('sanksi.edit');
    Route::put('/sanksi/{sanksi}', [SanksiController::class, 'update'])->name('sanksi.update');
    Route::delete('/sanksi/{sanksi}', [SanksiController::class, 'destroy'])->name('sanksi.destroy');
});

require __DIR__ . '/auth.php';

route::get('admin/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'admin']);