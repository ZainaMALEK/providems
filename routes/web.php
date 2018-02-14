<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/accueil', function () {
    return view('accueil');
})->name('accueil');
Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/offres', function () {
    return view('offres');
})->name('offres');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/test', function () {
    return view('test');
})->name('test');