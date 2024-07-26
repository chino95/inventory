<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('home');
});


Auth::routes();
Route::middleware('auth')->group(function () {

    Route::prefix('article')->group(function () {
        Route::get('create', [ArticleController::class, 'index']);
        Route::get('list', [ArticleController::class, 'show'])->name('article.list');
        Route::post('create', [ArticleController::class, 'store'])->name('article.create');
        Route::put('update/{article}', [ArticleController::class, 'update'])->name('article.update');
        Route::get('edit/{article}', [ArticleController::class, 'edit'])->name('article.edit');
        Route::get('delete/{article}', [ArticleController::class, 'destroy'])->name('article.delete');
    });


});