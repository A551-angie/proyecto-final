<?php

namespace App\Http\Livewire;

use App\Models\vacancies;
use Livewire\Component;


class VacancieList extends Component
{
    public function render()
    {
        return view('livewire.vacancie-list',[
            'vacancies'=> vacancies::latest()->with('user')->take(2)->get()

        ]);
    }
}