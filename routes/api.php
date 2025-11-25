<?php

use App\Http\Controllers\SmartHomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// route untuk smartHome
Route::prefix("smartHome")->group(function(){
    // untuk mengambil status objek smartHome nya
    Route::get("/status",[SmartHomeController::class,"index"]);

    // untuk mengupdate status jika sudah di klik objek smartHome nya
    Route::put("/update/{smartHome}",[SmartHomeController::class,"update"]);

});
