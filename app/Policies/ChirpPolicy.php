<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Chirp;

class ChirpPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }
    public function update(User $user, Chirp $chirp): bool
    {
        //
        return $chirp->user()->is($user);
    }
}