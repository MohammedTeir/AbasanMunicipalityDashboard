<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $admin = Admin::create([
            'name' => 'admin',
            'email' => 'mido@mail.com',
            'password' => bcrypt('12345')
        ]);
        $admin->assignRole('Super Admin');
        $role = Role::where('name', 'Super Admin')->first();
        $role->givePermissionTo(['Read-Role','Update-Role','Delete-Role','Create-Role']);

    }

}
