<?php

use Illuminate\Support\Facades\Route;
//Auth::Route();
Route::get('/', function () {
    return view('welcome');
});
