<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\LocalityController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ShowController;
use Inertia\Inertia;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
//…
|
*/

Route::redirect('/', '/homepage');

Route::get('/homepage', function () {
    return inertia('Homepage');
});

Route::get('/shop', function () {
    return inertia('Shop');
});

Route::get('/news', function () {
    return inertia('News');
});

Route::get('/minichat', function () {
    return inertia('Minichat');
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';