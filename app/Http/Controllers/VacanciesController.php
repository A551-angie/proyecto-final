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

        return view('vacancies.index');

        $this->authorize('published', $vacancy);

        return view('vacancy', compact('vacancy'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index (){
       
        
         return view('vacancies.index');

        


    }

    public function create()
    {
        return view('vacancies.create');
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

        $vacancies = new vacancies();
        
            $vacancies-> title = $request-> title;
            $vacancies-> experinceRequired = $request-> experinceRequired;
            $vacancies-> salary = $request-> salary;
            $vacancies-> location= $request-> location;
            $vacancies-> currency= $request-> currency;
            $vacancies-> descriptionVacancy = $request-> descriptionVacancy;
            $vacancies-> state = $request-> state;
            $vacancies-> endDate = $request-> endDate;
            $vacancies-> idCategoryVacancyFK = $request-> idCategoryVacancyFK;
            $vacancies-> idRecruiterFK = $request-> idRecruiterFK;
            
        $vacancies->save();
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\vacancies  $vacancies
     * @return \Illuminate\Http\Response
     */
    public function show(vacancies $vacancies)
    {
        //return view('vacancies.show', compact('vacancy'));
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