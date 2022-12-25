<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\AdminController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard',[
        "title" => "Dashboard"
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard/daftar', [AdminController::class, 'daftar'])->middleware('auth');
Route::post('/dashboard/daftar/hapus', [AdminController::class, 'hapus'])->middleware('auth');
Route::get('/dashboard/checkin', [AdminController::class, 'checkin'])->middleware('auth');
Route::post('/dashboard/checkin/cek', [AdminController::class, 'cek'])->middleware('auth');
Route::post('/dashboard/checkin/confirm', [AdminController::class, 'confirm'])->middleware('auth');
Route::get('/dashboard/laporan', [AdminController::class, 'laporan'])->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::get('/pesan/so7', [TicketController::class, 'sheila']);
Route::get('/pesan/st12', [TicketController::class, 'setia']);
Route::get('/pesan/jnm', [TicketController::class, 'judy']);
Route::post('/pesan/konfirmasi', [TicketController::class, 'konfirmasi']);
Route::post('/pesan/konfirmasi/cetak', [TicketController::class, 'cetak']);

