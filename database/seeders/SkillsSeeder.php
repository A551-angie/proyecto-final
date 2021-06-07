<?php

namespace Database\Seeders;

use App\Models\Skill;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skulls')->insert([
            'name' => 'Adaptación al cambio'
        ]);

        DB::table('skulls')->insert([
            'name' => 'Atención al detalle'
        ]);

        DB::table('skulls')->insert([
            'name' => 'Autodidacta'
        ]);

        DB::table('skulls')->insert([
            'name' => 'Autogestión'
        ]);

        DB::table('skulls')->insert([
            'name' => 'Comunicación'
        ]);

        DB::table('skulls')->insert([
            'name' => 'Curiosidad'
        ]);

        DB::table('skulls')->insert([
            'name' => 'Resolución de problemas'
        ]);

        DB::table('skulls')->insert([
            'name' => 'Trabajo en equipo'
        ]);
    }
}
