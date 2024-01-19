<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::put('/Chmielowski/54917/people/{id}', [PeopleController::class, 'updatebyid']);
Route::get('/Chmielowski/54917/people', [PeopleController::class, 'index']);
Route::get('/Chmielowski/54917/people/{id}', [PeopleController::class, 'show']);
Route::post('/Chmielowski/54917/people', [PeopleController::class, 'create']);
Route::delete('/Chmielowski/54917/people/{id}', [PeopleController::class, 'deletebyid']);