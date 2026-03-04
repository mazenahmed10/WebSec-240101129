<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'layouts.home');
Route::view('/even', 'layouts.even');
Route::view('/prime', 'layouts.prime');
Route::view('/multable', 'layouts.multable');
