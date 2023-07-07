<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\PageController;
use App\Http\Controllers\Guest\ComicsController;


Route::get('/', [PageController::class, 'comics']);

Route::resource('comics', ComicsController::class);
