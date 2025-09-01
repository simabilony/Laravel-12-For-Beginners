<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/second', function () {
//     return view('second');
// });

Route::view('/', 'home');

Route::get('/third', function () {
    return view('third'); // <-- third.blade.php file doesn't exist
});
Route::view('/second', 'second');
