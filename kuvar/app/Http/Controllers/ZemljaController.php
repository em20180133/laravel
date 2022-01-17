<?php

namespace App\Http\Controllers;

use App\Models\Zemlja;
use Illuminate\Http\Request;
use App\Http\Resources\ZemljaResource;
use App\Http\Resources\ZemljaCollection;
use Illuminate\Support\Facades\DB;

class ZemljaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zemljas = Zemlja::all();
        return new ZemljaCollection($zemljas);
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
     * @param  \App\Models\Zemlja  $zemlja
     * @return \Illuminate\Http\Response
     */
    public function show(Zemlja $zemlja)
    {
        return new ZemljaResource($zemlja);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Zemlja  $zemlja
     * @return \Illuminate\Http\Response
     */
    public function edit(Zemlja $zemlja)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Zemlja  $zemlja
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Zemlja $zemlja)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Zemlja  $zemlja
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zemlja $zemlja)
    {
        //
    }
}
