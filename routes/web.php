<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', [HomeController::class, 'index']);
Route::get('/kontak-kami', [HomeController::class, 'contact']);
Route::get('/layanan', [HomeController::class, 'services']);
Route::get('/detail-layanan/{slug}', [HomeController::class, 'showService']);
Route::get('/artikel', [HomeController::class, 'articles']);
Route::get('/detail-artikel/{slug}', [HomeController::class, 'showArticles']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/service', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('service');

Route::get('articles', [ArticleController::class, 'index'])->middleware(['auth', 'verified'])->name('articles');
Route::get('add-article', [ArticleController::class, 'create'])->middleware(['auth', 'verified'])->name('add-article');
Route::get('edit-article/{id}', [ArticleController::class, 'edit'])->middleware(['auth', 'verified'])->name('edit-article');
Route::post('save-article', [ArticleController::class, 'store'])->middleware(['auth', 'verified'])->name('save-article');
Route::put('update-article', [ArticleController::class, 'update'])->middleware(['auth', 'verified'])->name('update-article');
Route::delete('delete-article/{id}', [ArticleController::class, 'destroy'])->middleware(['auth', 'verified'])->name('delete-article');


Route::get('services', [ServiceController::class, 'index'])->middleware(['auth', 'verified'])->name('services');
Route::get('add-service', [ServiceController::class, 'create'])->middleware(['auth', 'verified'])->name('add-service');
Route::get('edit-service/{id}', [ServiceController::class, 'edit'])->middleware(['auth', 'verified'])->name('edit-service');
Route::post('save-service', [ServiceController::class, 'store'])->middleware(['auth', 'verified'])->name('save-service');
Route::put('update-service', [ServiceController::class, 'update'])->middleware(['auth', 'verified'])->name('update-service');
Route::delete('delete-service/{id}', [ServiceController::class, 'destroy'])->middleware(['auth', 'verified'])->name('delete-service');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
