<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ServicePagesController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/admin/dashboard', [PageController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/main', [MainController::class, 'index'])->name('admin.main');
Route::put('/admin/main', [MainController::class, 'update'])->name('admin.main.update');

Route::get('/admin/services/create', [ServicePagesController::class, 'create'])->name('admin.services.create');
Route::post('/admin/services/create', [ServicePagesController::class, 'store'])->name('admin.services.store');
Route::get('/admin/services/list', [ServicePagesController::class, 'list'])->name('admin.services.list');
Route::get('/admin/services/edit/{id}', [ServicePagesController::class, 'edit'])->name('admin.services.edit');
Route::post('/admin/services/update/{id}', [ServicePagesController::class, 'update'])->name('admin.services.update');
Route::delete('/admin/services/destroy/{id}', [ServicePagesController::class, 'destroy'])->name('admin.services.destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
