<?php

use App\Http\Controllers\SuminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

