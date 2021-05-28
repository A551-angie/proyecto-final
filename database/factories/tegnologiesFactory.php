<?php

namespace Database\Factories;

use App\Models\tegnologies;
use Illuminate\Database\Eloquent\Factories\Factory;

class tegnologiesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = tegnologies::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            // 'nameTegnology'=> $this->faker->randomDigit()

        ];
    }
}
