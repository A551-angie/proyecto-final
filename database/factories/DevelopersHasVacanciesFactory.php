<?php

namespace Database\Factories;

use App\Models\developersHasVacancies;
use Illuminate\Database\Eloquent\Factories\Factory;

class DevelopersHasVacanciesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = developersHasVacancies::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            // 'idVacancyFk',
            // 'idDeveloperFk'
        
        ];
    }
}
