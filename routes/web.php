<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\LoginController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [KatalogController::class, 'index'])->name('catalog.index');
Route::prefix('admin')->group(function () {
    Route::get('librarians', [AdminController::class, 'index'])->name('admin.librarians.index');
    Route::post('librarians', [AdminController::class, 'createLibrarian'])->name('admin.createLibrarian');
    Route::delete('librarians/{id}', [AdminController::class, 'removeLibrarian'])->name('admin.removeLibrarian');
    Route::post('librarians/{id}/toggle', [AdminController::class, 'toggleLibrarianStatus'])->name('admin.toggleLibrarianStatus');
});


Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login.submit');
// Hanya dapat diakses jika sudah login sebagai admin
Route::middleware(['auth:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('/admin/books', BookController::class);  // Contoh akses CRUD
});


Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('admin');

