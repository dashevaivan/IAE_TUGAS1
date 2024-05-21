<?php

use App\Http\Controllers\compe;
use App\Http\Controllers\players;
use App\Http\Controllers\standings;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/standings', [standings::class, 'index'])->name('standings');

Route::get('/competition', [compe::class, 'index'])->name('indexcompe');