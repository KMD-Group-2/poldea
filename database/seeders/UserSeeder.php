<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $adminUser = User::create([
            'username' => env('ADMIN_USERNAME', 'admin'),
            'password' => Hash::make(env('ADMIN_PASSWORD', 'password')),
            'active' => 1,
            'staff_id' => 1,
        ]);
        $qamUser = User::create([
            'username' => env('QAM_USERNAME', 'qa.manager'),
            'password' => Hash::make(env('QAM_PASSWORD', 'password')),
            'active' => 1,
            'staff_id' => 2,
        ]);
        $qacUser = User::create([
            'username' => env('QAC_USERNAME', 'qa.coordinator'),
            'password' => Hash::make(env('QAC_PASSWORD', 'password')),
            'active' => 1,
            'staff_id' => 2,
        ]);
        $staffUser = User::create([
            'username' => 'aungaung',
            'password' => Hash::make('password'),
            'staff_id' => 3,
        ]);

        $adminUser->assignRole('Admin');

        $qamUser->assignRole('QA Manager');

        $qacUser->assignRole('QA Coordinator');

        $staffUser->assignRole('Staff');
    }
}
