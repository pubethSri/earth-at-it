<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/profile/{user}', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile.show');

Route::get('/setting', function () {
    return view('setting');
})->name('setting');

Route::get('/setting-dark', function () {
    return view('setting-dark');
})->name('setting-dark');

Route::get('/setting-dark-thai', function () {
    return view('setting-dark-thai');
})->name('setting-dark-thai');

Route::get('/setting-thai', function () {
    return view('setting-thai');
})->name('setting-thai');

Route::get('/Create', function () {
    return view('create');
})->name('Create');

Route::get('/schedule', function () {
    return view('schedule');
})->name('schedule');

Route::get('/route', function () {
    return view('route');
})->name('route');

Route::get('/map', function () {
    return view('map');
})->name('map');

Route::get('/zoom', function () {
    return view('zoom');
})->name('zoom');