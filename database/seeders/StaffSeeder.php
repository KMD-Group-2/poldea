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
            'name' => 'admin',
            'address' => $faker->address(),
            'phone' => $faker->numerify('09#########'),
            'department_id' => 1,
            'position_id' => 1,
        ]);
    }
}
