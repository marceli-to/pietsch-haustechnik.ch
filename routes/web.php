<?php
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.landing')->name('page.landing');
Route::view('/dienstleistungen', 'pages.services')->name('page.services');
Route::view('/ueber-uns', 'pages.about')->name('page.about');
Route::view('/referenzen', 'pages.references')->name('page.references');
Route::view('/impressum', 'pages.imprint')->name('page.imprint');
Route::view('/datenschutz', 'pages.privacy')->name('page.privacy');

