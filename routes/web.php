<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BukuController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('api/buku', [BukuController::class, 'index']);
Route::get('api/buku/{id}', [BukuController::class, 'show']);
Route::post('api/buku', [BukuController::class, 'store']);
