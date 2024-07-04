<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Define permissions
        $permissions = [
            // User permissions
            'browse events',
            'make reservations',
            'receive confirmation email',
            'see available spots',

            // Association permissions
            'publish events',
            'manage events',
            'access registered users list',
            'view reservations',
            'manage reservations',
            'notify users of reservation status',
            'print registrants list',

            // Admin permissions
            'manage associations',
            'validate association accounts',
            'activate/deactivate association accounts',
            'manage user accounts and permissions',
        ];

        // Create permissions only if they do not exist
        foreach ($permissions as $permission) {
            if (!Permission::where('name', $permission)->exists()) {
                Permission::create(['name' => $permission]);
            }
        }

        // Assign permissions to roles
        $adminRole = Role::where('name', 'admin')->first();
        $associationRole = Role::where('name', 'association')->first();
        $userRole = Role::where('name', 'user')->first();

        $adminRole->syncPermissions([
            'manage associations',
            'validate association accounts',
            'activate/deactivate association accounts',
            'manage user accounts and permissions',
        ]);

        $associationRole->syncPermissions([
            'publish events',
            'manage events',
            'access registered users list',
            'view reservations',
            'manage reservations',
            'notify users of reservation status',
            'print registrants list',
        ]);

        $userRole->syncPermissions([
            'browse events',
            'make reservations',
            'receive confirmation email',
            'see available spots',
        ]);
    }
}
