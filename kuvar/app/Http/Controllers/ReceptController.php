<?php


namespace App\Http\Controllers;
use App\Models\Recept;
use Illuminate\Http\Request;
use App\Http\Resources\ReceptResource;
use App\Http\Resources\ReceptCollection;
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
}
