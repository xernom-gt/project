<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MenuController;
use App\Models\Addons;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::resource("category", CategoryController::class);
Route::resource("menu", MenuController::class);
Route::resource("addons", Addons::class);
