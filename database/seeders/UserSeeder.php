<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Angie Martinez',
            'email' => 'Angie@gmail.com',
            'password' => bcrypt('123456789')
        ])->assignRole('Admin');

        // User::factory(10)->create();

        User::create([
            'name' => 'Jhovanny Bedoya Renteria',
            'email' => 'jbedoyarenteria@gmail.com',
            'password' => bcrypt('jkt71241299')
        ])->assignRole('Admin');
    }
}
