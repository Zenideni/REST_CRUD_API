<?php

namespace App\Http\Controllers;

use App\Models\People;
use App\Http\Requests\StorePeopleRequest;
use App\Http\Requests\UpdatePeopleRequest;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;


class peopleController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(People::all());
        
    }

    public function show($id): JsonResponse
    {
        $person = People::find($id);
        return response()->json($person);
        
    }

    public function create(Request $request)
 {       
        $people = new People();

        $people->name = $request->input('name');
        $people->mobile = $request->input('mobile');
        $people->city = $request->input('city');
        $people->street = $request->input('street');
        $people->age = $request->input('age');
        $people->country = $request->input('country');
    
    $people->save();
    return response()->json($people);
 }

 public function updatebyid(Request $request, $id)
 {
      $people = People::find($id);
      $people->name = $request->input('name');
      $people->mobile = $request->input('mobile');
      $people->city = $request->input('city');
      $people->street = $request->input('street');
      $people->age = $request->input('age');
      $people->country = $request->input('country');

      $people->save();
      return response()->json($people);
 }

  

    public function deletebyid(Request $request, $id)
    {
        $people = People::find($id);
        $people->delete();

        return response()->json(null);
        
    }

}