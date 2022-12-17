<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\peopleController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/szkolka/305410/people', [PeopleController::class, 'showAll']);
Route::get('/szkolka/305410/people/{id}', [PeopleController::class, 'showOne']);
Route::post('/szkolka/305410/people', [PeopleController::class, 'create']);
Route::put('/szkolka/305410/people/{id}', [PeopleController::class, 'update']);
Route::delete('/szkolka/305410/people/{id}', [PeopleController::class, 'delete']);
