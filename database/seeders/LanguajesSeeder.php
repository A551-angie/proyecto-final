<?php

namespace Database\Seeders;

use App\Models\Languaje;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguajesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lenguages')->insert([
            'languaje' => 'Alemán'
        ]);

        DB::table('lenguages')->insert([
            'languaje' => 'Español'
        ]);

        DB::table('lenguages')->insert([
            'languaje' => 'Francés'
        ]);

        DB::table('lenguages')->insert([
            'languaje' => 'Inglés'
        ]);

        DB::table('lenguages')->insert([
            'languaje' => 'Mandarín'
        ]);

        DB::table('lenguages')->insert([
            'languaje' => 'Portugués'
        ]);

        DB::table('lenguages')->insert([
            'languaje' => 'Ruso'
        ]);
    }
}
