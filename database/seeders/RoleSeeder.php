<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
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

        $adminRole = Role::create(['name' => 'Admin']);
        $adminRole->givePermissionTo('staff.*');
        $adminRole->givePermissionTo('user.*');
        $adminRole->givePermissionTo('idea.*');

        $qamRole = Role::create(['name' => 'QA Manager']);
        $qamRole->givePermissionTo('staff,user.read');
        $qamRole->givePermissionTo('idea.read,update,delete');

        $qacRole = Role::create(['name' => 'QA Coordinator']);
        $qacRole->givePermissionTo('staff,user.read');
        $qacRole->givePermissionTo('idea.read,update,delete');

        $staffRole = Role::create(['name' => 'Staff']);
        $staffRole->givePermissionTo('idea.*');
    }
}
