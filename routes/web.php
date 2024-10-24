<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/genshin', function() {
    return view('pages.genshin.pages');
});

// TODO: Menambahkan topup yang lainnya
