<?php

use App\Http\Controllers\Api\LastNameReceiverController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/last_name', [LastNameReceiverController::class, 'store']);
