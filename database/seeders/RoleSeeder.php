<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = $this->data();

        foreach ($data as $value) {
            Role::create([
                'name' => $value['name'],
                'guard_name' => $value['guard_name']
            ]);
        }

    }

    public function data()
    {
        return [
            ['name' => 'Super Admin','guard_name'=>'admin'],
            ['name' => 'Content Admin','guard_name'=>'admin'],
            ['name' => 'Reports Admin','guard_name'=>'admin'],
            ['name' =>'Settings Admin','guard_name'=>'admin'],
            ['name' => 'Basic User','guard_name'=>'user'],
            ['name' => 'Contributor','guard_name'=>'user'],
            ['name' => 'Editor','guard_name'=>'user'],
            ['name' =>'Manager','guard_name'=>'user']
        ];
    }

        // Admin Roles and Permissions:

        // Super Admin: Can access all features and settings, including creating, editing, and deleting users and their permissions.
        // Content Admin: Can create, edit, and delete content, but cannot access or modify user settings.
        // Reports Admin: Can access and generate reports, but cannot modify or delete content or user settings.
        // Settings Admin: Can access and modify system settings, but cannot modify content or user settings.
        // User Roles and Permissions:

        // Basic User: Can view content and interact with the system, but cannot create or modify content or access system settings.
        // Contributor: Can create and edit their own content, but cannot access or modify content or settings created by other users.
        // Editor: Can create and edit content created by other users, but cannot modify system settings or access reports.
        // Manager: Can manage and oversee the content created by other users, including publishing and scheduling content. Cannot access system settings or reports.

}
