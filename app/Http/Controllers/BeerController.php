<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beer;
use Validator;

class BeerController extends Controller
{

    public function __invoke()
    {

    }

    public function index()
    {
        $beers = Beer::paginate();
        return response()->json($beers);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->name,[
            'name' => 'required|unique:beers|max:255',
        ]);

        if ($validator->fails()){
            return response($validator->messages(), 400);
        }

        $beer = Beer::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $request->image,
        ]);

        return response()->json($beer);

    }

    public function show($id)
    {
        $beer = Beer::findOrFail($id);
        return response()->json($beer);
    }

    public function update(Request $request, $id)
    {
        $beer = Beer::findOrFail($id);
        $beer->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        return response()->json($beer);
    }

    public function destroy($id)
    {
        $beer = Beer::findOrFail($id);
        $beer->delete();
    }
}
