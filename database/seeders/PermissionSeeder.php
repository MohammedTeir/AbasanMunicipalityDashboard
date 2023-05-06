<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $data = $this->data();

        foreach ($data as $value) {
            Permission::create([
                'name' => $value['name'],
                'guard_name'=>'admin'
            ]);
        }

    }

    public function data()
    {
        $data = [];
        // list of model permission
        $model = ['Content', 'Admin' , 'User', 'Role', 'Permission'];

        foreach ($model as $value) {
            foreach ($this->crudActions($value) as $action) {
                $data[] = ['name' => $action];
            }
        }

        return $data;
    }

    public function crudActions($name)
    {
        $actions = [];
        // list of permission actions
        $crud = ['Create', 'Read', 'Update', 'Delete'];

        foreach ($crud as $value) {
            $actions[] = $value.'-'.$name;
        }

        return $actions;
    }
}
