<?php

namespace Database\Factories;

use App\Models\Developers;
use Illuminate\Database\Eloquent\Factories\Factory;

class DevelopersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Developers::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            // 'experience' => $this->faker->randomDigit(),
            // 'aboutme' => $this->faker->paragraph,
            // 'curriculum' =>$this->faker->paragraph,
            // 'portafolio' =>$this->faker->url,

            // 'idUserFk' => rand(1,10)


        ];
    }
}
