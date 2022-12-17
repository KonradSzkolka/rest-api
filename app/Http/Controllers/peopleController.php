<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use App\Models\Person;
use Illuminate\Http\Request;

class PeopleController extends Controller
{

    public function showAll(): JsonResponse
    {
        return response()->json(Person::all());
    }
    
    public function showOne($id): JsonResponse
    {
        return response()->json(Person::find($id));
    }

    public function update($id, Request $request): JsonResponse
    {
        $person = Person::findOrFail($id);
        $person->update($request->all());

        return response()->json($person, 200);
    }

    public function delete($id): JsonResponse
    {
        Person::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }

    public function create(Request $request): JsonResponse
    {
        $person = Person::create($request->all());

        return response()->json($person, 201);
    }
}