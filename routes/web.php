<?php
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.landing')->name('page.landing');
Route::view('/wohnen', 'pages.living')->name('page.living');
Route::view('/lage', 'pages.location')->name('page.location');
Route::view('/impressum', 'pages.imprint')->name('page.imprint');
Route::view('/datenschutz', 'pages.privacy')->name('page.privacy');

