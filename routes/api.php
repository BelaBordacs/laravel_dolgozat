<?php

use App\Http\Controllers\TypeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/types',[TypeController::class, 'index']);
Route::get('/types/{id}',[TypeController::class, 'show']);
Route::post('/typeinput',[TypeController::class, 'store']);
Route::put('/typeupdate/{type_id}',[TypeController::class, 'update']);
Route::delete('/typedelete/{type_id}',[TypeController::class, 'destroy']);
