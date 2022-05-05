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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/artist', [ArtistController::class, 'index'])->name('artist_index');
Route::get('/artist/{id}', [ArtistController::class, 'show'])
	->where('id', '[0-9]+')->name('artist_show');

Route::get('/type', [TypeController::class, 'index'])->name('type_index');
Route::get('/type/{id}', [TypeController::class, 'show'])
	->where('id', '[0-9]+')->name('type_show');

Route::get('/locality', [LocalityController::class, 'index'])->name('locality_index');
Route::get('/locality/{id}', [LocalityController::class, 'show'])
	->where('id', '[0-9]+')->name('locality_show');
		
Route::get('/role', [RoleController::class, 'index'])->name('role_index');
Route::get('/role/{id}', [RoleController::class, 'show'])
	->where('id', '[0-9]+')->name('role_show');

Route::get('location', [LocationController::class, 'index'])->name('location_index');
Route::get('location/{id}', [LocationController::class, 'show'])
	->where('id', '[0-9]+')->name('location_show');	

Route::get('/show', [ShowController::class, 'index'])->name('show_index');
Route::get('/show/{id}', [ShowController::class, 'show'])
	->where('id', '[0-9]+')->name('show_show');	

	// Route::get('/homepage', function () {
	// 	return inertia('Homepage');
	// });