<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Create permissions
        Permission::create(['name' => 'browse events']);
        Permission::create(['name' => 'make reservations']);
        Permission::create(['name' => 'manage own events']);
        Permission::create(['name' => 'manage reservations']);
        Permission::create(['name' => 'notify users']);
        Permission::create(['name' => 'print registrant list']);
        Permission::create(['name' => 'manage associations']);
        Permission::create(['name' => 'manage user accounts']);

        // Create roles and assign created permissions

        // User role
        $userRole = Role::create(['name' => 'user']);
        $userRole->givePermissionTo('browse events');
        $userRole->givePermissionTo('make reservations');

        // Association role
        $associationRole = Role::create(['name' => 'association']);
        $associationRole->givePermissionTo('manage own events');
        $associationRole->givePermissionTo('manage reservations');
        $associationRole->givePermissionTo('notify users');
        $associationRole->givePermissionTo('print registrant list');

        // Admin role
        $adminRole = Role::create(['name' => 'admin']);
        $adminRole->givePermissionTo('manage associations');
        $adminRole->givePermissionTo('manage user accounts');
    }
}
