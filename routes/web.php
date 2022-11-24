<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AIController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/ai', [AIController::class, 'index']);

Route::post('/ai', [AIController::class, 'result'])->name('result');
