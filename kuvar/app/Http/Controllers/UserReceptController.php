<?php

namespace App\Http\Controllers;
use App\Models\Recept;
use App\Models\User;
use Illuminate\Http\Request;

class UserReceptController extends Controller
{
    public function index($user_id)
    {
        $recepts = Recept::get()->where('user_id', $user_id);
        if (is_null($recepts))
            return response()->json('Podatak nije pronadjen', 404);
        return response()->json($recepts);
    }
}
