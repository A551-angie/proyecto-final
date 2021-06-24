<?php

namespace Database\Factories;

use App\Models\educationHasDevelopers;
use Illuminate\Database\Eloquent\Factories\Factory;

class EducationHasDevelopersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = educationHasDevelopers::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //  'idEducationFk',
            //  'idDeveloperFk'    
        ];
    }
}
