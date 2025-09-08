<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/second', function () {
//     return view('second');
// });


Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::get('/', function () {
//     $categories = DB::table('categories')->get();
//     return view('home', ['categories' => $categories]);
// })->name('home');

Route::get('/third', function () {
    return view('third'); // <-- third.blade.php file doesn't exist
});
Route::view('/second', 'second');
