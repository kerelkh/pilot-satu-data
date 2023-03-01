<?php

use App\Http\Controllers\DatasetController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrganisasiController;
use App\Http\Controllers\TentangController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('beranda');
Route::get('/dataset', [DatasetController::class,'index'])->name('dataset');
Route::get('/tentang', TentangController::class)->name('tentang');
Route::get('/organisasi', [OrganisasiController::class, 'index'])->name('organisasi');
