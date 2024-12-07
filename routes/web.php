<?php

use Illuminate\Support\Facades\Route;

use App\Models\Modul;
use App\Http\Controllers\ModulController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/modul', [ModulController::class, 'index'])->name('modul.index');
Route::get('/modul/tambah', [ModulController::class, 'create'])->name('modul.create');
Route::post('/modul', [ModulController::class, 'store'])->name('modul.store');
Route::get('/modul/{modul}', [ModulController::class, 'show'])->name('modul.show');
Route::get('/modul/{modul}/edit', [ModulController::class, 'edit'])->name('modul.edit');
Route::post('/modul/{modul}/update', [ModulController::class, 'update'])->name('modul.update');
Route::delete('/modul/{modul}/delete', [ModulController::class, 'delete'])->name('modul.delete');

