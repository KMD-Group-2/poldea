<?php

namespace Database\Seeders;

use App\Models\Staff;
use Faker\Factory;
use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        Staff::create([
            'name' => 'Mg Mg',
            'email' => 'mgmg@poldea.test',
            'address' => $faker->address(),
            'phone' => $faker->numerify('09#########'),
            'department_id' => 1,
            'position_id' => 1,
        ]);
        Staff::create([
            'name' => 'Zaw Zaw',
            'email' => 'zawzaw@poldea.test',
            'address' => $faker->address(),
            'phone' => $faker->numerify('09#########'),
            'department_id' => 2,
            'position_id' => 5,
        ]);
        Staff::create([
            'name' => 'Aung Aung',
            'email' => 'aungaung@poldea.test',
            'address' => $faker->address(),
            'phone' => $faker->numerify('09#########'),
            'department_id' => 3,
            'position_id' => 7,
        ]);
    }
}
