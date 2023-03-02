<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'role' => 'Admin',
                'permissions' => [
                    'admin.dashboard',
                    'admin.academic_year',
                    'admin.staff',
                    'admin.user',
                    'admin.report'
                ]
            ],
            [
                'role' => 'QA-Manager',
                'permissions' => [
                    'qa_manager.dashboard',
                    'qa_manager.category',
                    'qa_manager.report'
                ]
            ],
            [
                'role' => 'QA-Coordinator',
                'permissions' => [
                    'qa_coordinator.dashboard',
                    'qa_coordinator.departmentStaff',
                    'qa_coordinator.report'
                ]
            ],
            [
                'role' => 'Staff',
                'permissions' => [
                    'staff.idea',
                    'staff.createIdea',
                    'staff.publishedIdea',
                    'staff.draftIdea',
                ]
            ],
        ];

        // Create and Assign Permissions
        for ($i = 0; $i < count($data); $i++) {
            $role = Role::create(['name' => $data[$i]['role']]);

            for ($j = 0; $j < count($data[$i]['permissions']); $j++) {
                // Create Permission
                $permission = Permission::create(['name' => $data[$i]['permissions'][$j]]);
                $role->givePermissionTo($permission);
                $permission->assignRole($role);
            }
        }
    }
}
