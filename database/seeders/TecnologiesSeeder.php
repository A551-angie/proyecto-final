<?php

namespace Database\Seeders;

use App\Models\Tecnology;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TecnologiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tegnologies')->insert([
            'name' => 'Angular',
        ]);

        DB::table('tegnologies')->insert([
            'name' => 'C++',
        ]);

        DB::table('tegnologies')->insert([
            'name' => 'CSS',
        ]);

        DB::table('tegnologies')->insert([
            'name' => 'Docker',
        ]);

        DB::table('tegnologies')->insert([
            'name' => 'Go',
        ]);

        DB::table('tegnologies')->insert([
            'name' => 'HTML',
        ]);

        DB::table('tegnologies')->insert([
            'name' => 'Java',
        ]);

        DB::table('tegnologies')->insert([
            'name' => 'JavaScript',
        ]);

        DB::table('tegnologies')->insert([
            'name' => 'Laravel',
        ]);

        DB::table('tegnologies')->insert([
            'name' => 'MongoDB',
        ]);

        DB::table('tegnologies')->insert([
            'name' => 'NodeJS',
        ]);

        DB::table('tegnologies')->insert([
            'name' => 'PHP',
        ]);

        DB::table('tegnologies')->insert([
            'name' => 'Python',
        ]);

        DB::table('tegnologies')->insert([
            'name' => 'React',
        ]);

        DB::table('tegnologies')->insert([
            'name' => 'Ruby',
        ]);

        DB::table('tegnologies')->insert([
            'name' => 'Rust',
        ]);

        DB::table('tegnologies')->insert([
            'name' => 'Shell',
        ]);

        DB::table('tegnologies')->insert([
            'name' => 'SQL',
        ]);

        DB::table('tegnologies')->insert([
            'name' => 'Switf',
        ]);

        DB::table('tegnologies')->insert([
            'name' => 'TypeScript',
        ]);

        DB::table('tegnologies')->insert([
            'name' => 'Vue',
        ]);

        DB::table('tegnologies')->insert([
            'name' => '.NET',
        ]);
    }
}
