<?php

namespace Database\Factories;

use App\Models\lenguageHasDevelopers;
use Illuminate\Database\Eloquent\Factories\Factory;

class LenguageHasDevelopersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = lenguageHasDevelopers::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            // 'idLenguageFk',
            // 'idDeveloperFk'
        ];
    }
}
