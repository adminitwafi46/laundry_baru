<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\itemController;
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

//prefix item, middleware auth
Route::prefix('item')->middleware('auth')->group(function () {
    //item index
    Route::get('/', [itemController::class, 'index'])->name('item.index');
    //item index getall
    Route::get('/getall', [itemController::class, 'index_getall'])->name('item.indexall');
    //getone
    Route::get('/getone/{id}', [itemController::class, 'show'])->name('item.getone');
    //edit simpan, put
    Route::put('/{item}', [itemController::class, 'update'])->name('item.update');
    //item create
    Route::get('/create', [itemController::class, 'create'])->name('item.create');
    //item store
    Route::post('/', [itemController::class, 'store'])->name('item.store');
    //item show
    Route::get('/{item}', [itemController::class, 'show'])->name('item.show');
    //item edit
    Route::get('/{item}/edit', [itemController::class, 'edit'])->name('item.edit');
    //item update
    Route::patch('/{item}', [itemController::class, 'update'])->name('item.update');
    //item destroy
    Route::delete('/{item}', [itemController::class, 'destroy'])->name('item.destroy');
});

require __DIR__.'/auth.php';
