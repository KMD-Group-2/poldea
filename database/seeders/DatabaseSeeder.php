<?php

namespace Database\Seeders;

use Database\Seeders\DepartmentSeeder;
use Database\Seeders\PositionsSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            DepartmentSeeder::class,
            PositionsSeeder::class,
        ]);
    }
}
