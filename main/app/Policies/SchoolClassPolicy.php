<?php

namespace App\Policies;

use App\Models\Organization;
use App\Models\SchoolClass;
use App\Models\User;

class SchoolClassPolicy
{
    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(
        User $user,
        Organization $organization,
        SchoolClass $class
    ): bool {
        return true;
    }

    public function create(User $user): bool
    {
        return true;
    }

    public function update(User $user, SchoolClass $class): bool
    {
        return true;
    }

    public function delete(User $user, SchoolClass $class): bool
    {
        return true;
    }

    public function restore(User $user, SchoolClass $class): bool
    {
        return true;
    }

    public function forceDelete(User $user, SchoolClass $class): bool
    {
        return true;
    }
}
