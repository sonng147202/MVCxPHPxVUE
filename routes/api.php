<?php

use Core\Available\Route;
use App\Controllers\IndexController;

Route::get('/', function () {
    view('index');
});