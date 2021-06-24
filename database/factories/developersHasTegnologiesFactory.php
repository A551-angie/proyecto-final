<?php

namespace Database\Factories;

use App\Models\developersHasTegnologies;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Developers;

class developersHasTegnologiesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = developersHasTegnologies::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            // 'idDeveloperFk'=> rand(1,10),
            // 'idTegnologyFk'=> rand(1,10)
        ];
    }
}
