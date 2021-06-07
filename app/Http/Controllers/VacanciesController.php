<?php

namespace App\Http\Controllers;

use App\Models\vacancies;
use Illuminate\Http\Request;


class VacanciesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function vacancy(vacancies $vacancy)
    {

        return view('recruiter.index');

        $this->authorize('published', $vacancy);

        return view('vacancy', compact('vacancy'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recruiter.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // vacancies::create([
        //     'user_id'=> auth()->user()->id
        // ]+ $post=$request->all());

        $datosVacancie = request()->except('_token');
        vacancies::insert($datosVacancie);
        return response()->json($datosVacancie);

       
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\vacancies  $vacancies
     * @return \Illuminate\Http\Response
     */
    public function show(vacancies $vacancies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\vacancies  $vacancies
     * @return \Illuminate\Http\Response
     */
    public function edit(vacancies $vacancies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\vacancies  $vacancies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, vacancies $vacancies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\vacancies  $vacancies
     * @return \Illuminate\Http\Response
     */
    public function destroy(vacancies $vacancies)
    {
        //
    }
}