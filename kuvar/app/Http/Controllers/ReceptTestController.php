<?php

namespace App\Http\Controllers;
use App\Models\Recept;
use Illuminate\Http\Request;
use App\Http\Resources\ReceptResource;
class ReceptTestController extends Controller
{
    public function index()
    {
        $recepts = Recept::all();

        return $recepts;
    }

    public function show(Recept $recept)
    {
       // $recept = Recept::find($id);
        return new ReceptResource($recept);
    }
}
