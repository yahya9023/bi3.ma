<?php

namespace App\Http\Controllers;

use App\Models\Typ;
use Illuminate\Http\Request;

class TypController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\Typ  $typ
     * @return \Illuminate\Http\Response
     */
    public function show(Typ $typ)
    {
        return view('type_show.show')->with('typs', $typ);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Typ  $typ
     * @return \Illuminate\Http\Response
     */
    public function edit(Typ $typ)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Typ  $typ
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Typ $typ)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Typ  $typ
     * @return \Illuminate\Http\Response
     */
    public function destroy(Typ $typ)
    {
        //
    }
}
