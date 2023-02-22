<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Seeder;

class PositionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $positions = [
            ['name' => 'administrator'],
            ['name' => 'assistant professor'],
            ['name' => 'associate professor'],
            ['name' => 'lecturer'],
            ['name' => 'professor'],
            ['name' => 'senior lecturer'],
            ['name' => 'teaching assistant'],
        ];
        Position::insert($positions);
    }
}
