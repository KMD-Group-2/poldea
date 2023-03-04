<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'admin' => [
                'admin.dashboard',
                'admin.academic_year',
                'admin.staff',
                'admin.user',
                'admin.report'
            ],
            'qa_manager' => [
                'qa_manager.dashboard',
                'qa_manager.category',
                'qa_manager.report'
            ],
            'qa_coordinator' => [
                'qa_coordinator.dashboard',
                'qa_coordinator.departmentStaff',
                'qa_coordinator.report'
            ],
            'staff' => [
                'staff.idea',
                'staff.createIdea',
                'staff.publishedIdea',
                'staff.draftIdea',
            ]
        ];

        $admin = User::create([
            'username' => 'admin',
            'password' => Hash::make('password'),
            'staff_id' => 1,
            'active' => 1,
            'last_activity_at' => now()
        ]);

        $qa_manager = User::create([
            'username' => 'qa_manager',
            'password' => Hash::make('password'),
            'staff_id' => 1,
            'active' => 1,
            'last_activity_at' => now()
        ]);

        $qa_coordinator = User::create([
            'username' => 'qa_coordinator',
            'password' => Hash::make('password'),
            'staff_id' => 1,
            'active' => 1,
            'last_activity_at' => now()
        ]);

        $staff = User::create([
            'username' => 'staff',
            'password' => Hash::make('password'),
            'staff_id' => 1,
            'active' => 1,
            'last_activity_at' => now()
        ]);

        $roles = Role::all();

        foreach($roles as $role)
        {
            if($role->name == 'Admin')
            {
                $admin->syncPermissions($data['admin']);
                $admin->assignRole([$role->id]);
            } elseif($role->name == 'QA-Manager') {
                $qa_manager->syncPermissions($data['qa_manager']);
                $qa_manager->assignRole([$role->id]);
            } elseif($role->name == 'QA-Coordinator') {
                $qa_coordinator->syncPermissions($data['qa_coordinator']);
                $qa_coordinator->assignRole([$role->id]);
            } else{
                $staff->syncPermissions($data['staff']);
                $staff->assignRole([$role->id]);
            }
        }
    }
}
