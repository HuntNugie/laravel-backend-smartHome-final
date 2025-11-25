<?php

use App\Http\Controllers\Dht22Controller;
use App\Http\Controllers\MaxController;
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


// route untuk dht22
Route::prefix("dht22")->group(function(){
    // untuk mendapatkan data dht22
    Route::get("/all",[Dht22Controller::class,"index"]);

    // untuk mengupdate data dht22
    Route::get("/update/{temp}/{humd}/{heat}",[Dht22Controller::class,"update"]);
});

// route untuk nilai max
Route::prefix("max_dht")->group(function(){
    // mendapatkan nilai max temp dan humd
    Route::get("/all",[MaxController::class,"index"]);

    // untuk mengupdate nilai max temp dan humd
    Route::put("/update",[MaxController::class,"update"]);
});
