<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AdminPanelPolicy
{
    use HandlesAuthorization;

    public function view(User $user)
    {
        return $user->role == 1;
    }
}
