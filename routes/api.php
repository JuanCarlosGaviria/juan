<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CategoryapiController;
use App\Http\Controllers\Api\PersonapiController;
use App\Http\Controllers\Api\IncomeapiController;
use App\Http\Controllers\Api\Income_detailapiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('categories',CategoryapiController::class);
Route::apiResource('persons',PersonapiController::class);
Route::apiResource('incomes',IncomeapiController::class);
Route::apiResource('income_details',Income_detailapiController::class);
