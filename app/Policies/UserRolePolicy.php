<?php

namespace App\Policies;

use App\Models\User;

class UserRolePolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function manageAdmin(User $user)
    {
        return $user->role_id == '1';
    }
}
