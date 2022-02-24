<?php

namespace Core\Available;

Route::get('/', function () {
    echo '<h1>Home</h1>';
});


Route::get('/about', function () {
    echo '<h1>About</h1>';
});

Route::post('/', function () {
    echo '<h1>POST</h1>';
});