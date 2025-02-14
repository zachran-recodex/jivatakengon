<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UsersRolesAndPermissions extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Create permissions
        $permissions = [
            'manage users',
            'view users',
            'create users',
            'edit users',
            'delete users',
            'manage roles',
            'manage permissions',
        ];

        // Create permissions in the database
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Create roles
        $superAdminRole = Role::create(['name' => 'super-admin']);
        $adminRole = Role::create(['name' => 'admin']);

        // Assign all permissions to super-admin
        $superAdminRole->givePermissionTo($permissions);

        // Assign a subset of permissions to admin
        $adminPermissions = [
            'manage users',
            'view users',
            'create users',
            'edit users',
            'delete users',
        ];
        $adminRole->givePermissionTo($adminPermissions);

        // Create users
        $superAdminUser  = User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@icrp.id',
            'password' => bcrypt('admin123'), // Use a secure password
        ]);
        $superAdminUser ->assignRole($superAdminRole);

        $adminUser  = User::create([
            'name' => 'Admin',
            'email' => 'admin@icrp.id',
            'password' => bcrypt('admin123'), // Use a secure password
        ]);
        $adminUser ->assignRole($adminRole);
    }
}
