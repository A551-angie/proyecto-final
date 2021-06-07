<?php

namespace App\Http\Controllers;

use App\Models\recruiters;
use Illuminate\Http\Request;

class RecruitersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('recruiter.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $datosVacancie = request()->all();
        // $datosVacancie = request()->except('_token');
        // return response()->json($datosVacancie);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\recruiters  $recruiters
     * @return \Illuminate\Http\Response
     */
    public function show(recruiters $recruiters)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\recruiters  $recruiters
     * @return \Illuminate\Http\Response
     */
    public function edit(recruiters $recruiters)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\recruiters  $recruiters
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, recruiters $recruiters)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\recruiters  $recruiters
     * @return \Illuminate\Http\Response
     */
    public function destroy(recruiters $recruiters)
    {
        //
    }
}