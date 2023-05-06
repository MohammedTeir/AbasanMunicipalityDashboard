<?php

namespace App\Policies;

use App\Models\Admin;


class AdminPolicy
{
    /**
     * Determine whether the admin can view any models.
     */
    public function viewAny(Admin $admin):bool
    {
        //
        return $admin->hasPermissionTo('Read-Admin');
    }

    /**
     * Determine whether the admin can view the model.
     */
    public function view(Admin $admin): bool
    {
        //

    return $admin->hasPermissionTo('Read-Admin');

    }

    /**
     * Determine whether the admin can create models.
     */
    public function create(Admin $admin): bool
    {
        //
        return $admin->hasPermissionTo('Create-Admin');

    }

    /**
     * Determine whether the admin can update the model.
     */
    public function update(Admin $admin): bool
    {
        //
        return $admin->hasPermissionTo('Update-Admin');

    }

    /**
     * Determine whether the admin can delete the model.
     */
    public function delete( Admin $admin): bool
    {
        //
       return $admin->hasPermissionTo('Delete-Admin');

    }

    /**
     * Determine whether the admin can restore the model.
     */
    public function restore(Admin $admin): bool
    {
        //
        return $admin->hasPermissionTo('Restore-Admin');

    }

    /**
     * Determine whether the admin can permanently delete the model.
     */
    public function forceDelete(Admin $admin): bool
    {
        //
        return $admin->hasPermissionTo('Delete-Admin');

    }
}
