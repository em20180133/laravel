<?php


namespace App\Http\Controllers;
use App\Models\Recept;
use Illuminate\Http\Request;
use App\Http\Resources\ReceptResource;
use App\Http\Resources\ReceptCollection;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ReceptController extends Controller
{
    public function index()
    {
        $recepts = Recept::all();
        return new ReceptCollection($recepts);
    }

    public function show(Recept $recept)
    {
      
        return new ReceptResource($recept);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'slug' => 'required|string|max:50',
            'title' => 'required|string|max:50',
            'body' => 'required',
            'vrsta_id' => 'required',
            'zemlja_id' => 'required'
        ]);

        if ($validator->fails())
        return response()->json($validator->errors());

        $recept = Recept::create([
            'slug' => $request->slug,
            'title' => $request->title,
            'body' => $request->body,
            'vrsta_id' => $request->vrsta_id,
            'zemlja_id' => $request->zemlja_id,
            'user_id' => Auth::user()->id,
        ]);

        return response()->json(['Uspesno kriran recept!', new ReceptResource($recept)]);


    }



    public function update(Request $request, Recept $recept)
    {
        $validator = Validator::make($request->all(), [
            'slug' => 'required|string|max:50',
            'title' => 'required|string|max:50',
            'body' => 'required',
            'vrsta_id' => 'required',
            'zemlja_id' => 'required'
        ]);

        if ($validator->fails())
            return response()->json($validator->errors());

        $recept->slug = $request->slug;
        $recept->title = $request->title;
        $recept->body = $request->body;
        $recept->vrsta_id = $request->vrsta_id;
        $recept->zemlja_id = $request->zemlja_id;

        $recept->save();

        return response()->json(['Uspesno azuriran recept!', new ReceptResource($recept)]);
    }

    public function destroy(Recept $recept)
    {
        $recept->delete();

        return response()->json('Uspesno obrisan recept!');
    }


}
