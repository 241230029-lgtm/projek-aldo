<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KontakController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/Profil', [ProfilController::class, 'index']);
Route::get('/kontak', [KontakController::class, 'index']);
