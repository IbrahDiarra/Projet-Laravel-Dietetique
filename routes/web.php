<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/ok', function () {
    return view('welcome');
});

Route::get('/', [PageController::class, 'loginForm'])->name('login.form');
Route::post('/login', [PageController::class, 'login'])->name('login');
Route::get('/home', [PageController::class, 'home'])->name('home');

Route::get('/categorie',[PageController::class, 'categorie']);

Route::get('/constituant',[PageController::class, 'constituant']);

Route::get('/nutriments',[PageController::class, 'constituants']);

Route::get('/aliment',[PageController::class, 'aliment']);

Route::get('/nutriment',[PageController::class, 'nutriment']);

Route::get('/aliments',[PageController::class, 'aliments']);

Route::get('/alimcompose',[PageController::class, 'alimcompose']);






