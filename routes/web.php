<?php

use Illuminate\Support\Facades\Route;
use App\Models\sell;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/sell', function () {
    return view('sell');
});
