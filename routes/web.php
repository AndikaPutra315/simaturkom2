<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home'); // Memanggil file home.blade.php
});
