<?php

use Core\Available\Route;
use App\Controllers\IndexController;

Route::get('/', function () {
    echo '<pre>';
    print_r($_SERVER);
});

Route::get('/about', [IndexController::class, 'index']);

Route::post('/', function () {
    echo '<h1>POST</h1>';
});