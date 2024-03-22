<?php

use App\Http\Controllers\StockController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('stock', [StockController::class, 'apiGet']);
Route::get('stock/{id}', [StockController::class, 'apiShow']);

Route::post('stock', [StockController::class, 'apiStore']);
Route::put('stock/{stock}', [StockController::class, 'apiUpdate']);

Route::delete('stock/{stock}', [StockController::class, 'apiDestroy']);
