<?php

namespace App\Http\Controllers;

use App\Models\Vrsta;
use Illuminate\Http\Request;
use App\Http\Resources\VrstaResource;
use App\Http\Resources\VrstaCollection;
use Illuminate\Support\Facades\DB;

class VrstaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vrstas = Vrsta::all();
        return new VrstaCollection($vrstas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vrsta  $vrsta
     * @return \Illuminate\Http\Response
     */
    public function show(Vrsta $vrsta)
    {
        return new VrstaResource($vrsta);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vrsta  $vrsta
     * @return \Illuminate\Http\Response
     */
    public function edit(Vrsta $vrsta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vrsta  $vrsta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vrsta $vrsta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vrsta  $vrsta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vrsta $vrsta)
    {
        //
    }
}
