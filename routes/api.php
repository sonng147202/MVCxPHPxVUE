<?php

use Core\Available\Route;
use App\Controllers\IndexController;

Route::get('/', [IndexController::class, 'index']);

Route::get('/data', [IndexController::class, 'getData']);
