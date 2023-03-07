<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $permissionsOnUser = [
            ['name' => 'staff.*'],
            ['name' => 'user.*'],
            ['name' => 'idea.*'],
            ['name' => 'staff,user.read'],
            ['name' => 'idea.read,update,delete'],
        ];
        foreach ($permissionsOnUser as $permission)
        {
            Permission::create($permission);
        }
    }
}
