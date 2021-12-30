<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoomController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// rooms routes
Route::get("rooms", [RoomController::class, "index"]);
Route::get("rooms/{id}", [RoomController::class, "room"]);
Route::get("rooms/all/{numberRooms}", [RoomController::class, "specific"]);
Route::get("rooms/products/{room_id}", [RoomController::class, "getProductsOfRoom"]);

// products routes
Route::get("products", [ProductController::class, "index"]);
Route::get("products/all/{numberProducts}", [ProductController::class, "specific"]);
Route::get("products/{id}", [ProductController::class, "product"]);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
