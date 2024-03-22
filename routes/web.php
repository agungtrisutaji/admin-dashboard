<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StockController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/", [HomeController::class, "dashboard"]);
Route::get("user", [HomeController::class, "index"]);

Route::get("login", [LoginController::class, "index"]);

Route::get("register", [RegisterController::class, "create"])->name("register");

Route::post("register", [RegisterController::class, "store"])->name("register");

Route::get("stock", [StockController::class, "index"]);
