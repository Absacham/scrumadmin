<?php

namespace App\Policies;

use App\User;
use App\Level;
use Illuminate\Auth\Access\HandlesAuthorization;

class LevelPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the level.
     *
     * @param  \App\User  $user
     * @param  \App\Level  $level
     * @return mixed
     */

    public function viewAny(User $user)
    {
        return $user->hasRole('Admin');
    }

    public function create(User $user)
    {
        return $user->hasRole('Admin');
    }

    public function update(User $user)
    {
        return $user->hasRole('Admin');
    }

    public function delete(User $user)
    {
        return $user->hasRole('Admin');
    }

    public function forceDelete(User $user)
    {
        return $user->hasRole('Admin');
    }

    public function view(User $user)
    {
        return $user->hasRole('Admin');
    }


    /**
     * Determine whether the user can create levels.
     *
     * @param  \App\User  $user
     * @return mixed
     */
}
