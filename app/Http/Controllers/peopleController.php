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
        if (Person::where('id', $id)->exists()) {
            $person = Person::where('id', $id)->get();
            return response()->json($person, 200);
        } else {
            return response()->json([
                "message" => "Person not found"
            ], 404);
        }
    }

    public function update($id, Request $request): JsonResponse
    {
        if (Person::where('id', $id)->exists()) {
            $person = Person::find($id);
            $person->update($request->all());

            return response()->json($person, 200);
        } else {
            return response()->json([
                "message" => "Person not found"
            ], 404);
        }
    }

    public function delete($id): JsonResponse
    {
        if (Person::where('id', $id)->exists()) {
            $person = Person::find($id);
            $person->delete();
            return response()->json([
                "message" => "records deleted"
            ], 202);
        } else {
            return response()->json([
                "message" => "Person not found"
            ], 404);
        }
    }

    public function create(Request $request): JsonResponse
    {
        $person = Person::create($request->all());

        return response()->json($person, 201);
    }
}