<?php

namespace Database\Factories;

use App\Models\levelLangs;
use Illuminate\Database\Eloquent\Factories\Factory;

class LevelLangsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = levelLangs::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            // 'level_lang',
            // 'idLenguageFk'
        ];
    }
}
