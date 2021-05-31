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
        //$vacancy = vacancies::all();
        //return View::make('admin')->with('vacancies', $vacancies);
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
