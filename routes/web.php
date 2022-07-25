<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/admin/dashboard', [PageController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/main', [MainController::class, 'index'])->name('admin.main');
Route::put('/admin/main', [MainController::class, 'update'])->name('admin.main.update');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
