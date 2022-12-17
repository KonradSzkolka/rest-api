<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\peopleController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/people', [PeopleController::class, 'showAll']);
Route::get('/people/{id}', [PeopleController::class, 'showOne']);
Route::post('/people', [PeopleController::class, 'create']);
Route::put('/people/{id}', [PeopleController::class, 'update']);
Route::delete('/people/{id}', [PeopleController::class, 'delete']);
