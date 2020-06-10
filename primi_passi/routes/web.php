<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});


Route::get('prodotti', function () {
    return view('prodotti');
});

Route::get('info', function () {
    return view('info');
});
