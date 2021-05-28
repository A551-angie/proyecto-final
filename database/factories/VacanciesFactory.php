<?php

namespace Database\Factories;

use App\Models\vacancies;
use Illuminate\Database\Eloquent\Factories\Factory;

class VacanciesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = vacancies::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            // 'title',
            // 'experinceRequired',
            // 'salary',
            // 'location',
            // 'currency',
            // 'descriptionVacancy',
            // 'state',
            // 'enddate',
            // 'idCategoryvacancyfk',
            // 'idRecrutierFk',
            
        ];
    }
}
