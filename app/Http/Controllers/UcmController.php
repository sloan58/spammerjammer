<?php

namespace App\Http\Controllers;

use App\Models\Ucm;
use Illuminate\Http\Request;

class UcmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ucms = Ucm::all();
        return view('ucm.index', compact('ucms'));
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ucm  $ucm
     * @return \Illuminate\Http\Response
     */
    public function edit(Ucm $ucm)
    {
        return view('ucm.edit', compact('ucm'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ucm  $ucm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ucm $ucm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ucm  $ucm
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ucm $ucm)
    {
        //
    }
}
