<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = [
            ['name' => 'arts'],
            ['name' => 'chemistry'],
            ['name' => 'history'],
            ['name' => 'mathematics'],
            ['name' => 'law'],
            ['name' => 'philosophy'],
            ['name' => 'physics'],
            ['name' => 'psychology'],
        ];
        Department::insert($departments);
    }
}
