<?php

namespace Laraauto\Automobile\Policies;

use Litepie\User\Contracts\UserPolicy;
use Laraauto\Automobile\Models\Directory;

class DirectoryPolicy
{

    /**
     * Determine if the given user can view the directory.
     *
     * @param UserPolicy $user
     * @param Directory $directory
     *
     * @return bool
     */
    public function view(UserPolicy $user, Directory $directory)
    {
        if ($user->canDo('automobile.directory.view') && $user->isAdmin()) {
            return true;
        }

        return $directory->user_id == user_id() && $directory->user_type == user_type();
    }

    /**
     * Determine if the given user can create a directory.
     *
     * @param UserPolicy $user
     * @param Directory $directory
     *
     * @return bool
     */
    public function create(UserPolicy $user)
    {
        return  $user->canDo('automobile.directory.create');
    }

    /**
     * Determine if the given user can update the given directory.
     *
     * @param UserPolicy $user
     * @param Directory $directory
     *
     * @return bool
     */
    public function update(UserPolicy $user, Directory $directory)
    {
        if ($user->canDo('automobile.directory.edit') && $user->isAdmin()) {
            return true;
        }

        return $directory->user_id == user_id() && $directory->user_type == user_type();
    }

    /**
     * Determine if the given user can delete the given directory.
     *
     * @param UserPolicy $user
     * @param Directory $directory
     *
     * @return bool
     */
    public function destroy(UserPolicy $user, Directory $directory)
    {
        return $directory->user_id == user_id() && $directory->user_type == user_type();
    }

    /**
     * Determine if the given user can verify the given directory.
     *
     * @param UserPolicy $user
     * @param Directory $directory
     *
     * @return bool
     */
    public function verify(UserPolicy $user, Directory $directory)
    {
        if ($user->canDo('automobile.directory.verify')) {
            return true;
        }

        return false;
    }

    /**
     * Determine if the given user can approve the given directory.
     *
     * @param UserPolicy $user
     * @param Directory $directory
     *
     * @return bool
     */
    public function approve(UserPolicy $user, Directory $directory)
    {
        if ($user->canDo('automobile.directory.approve')) {
            return true;
        }

        return false;
    }

    /**
     * Determine if the user can perform a given action ve.
     *
     * @param [type] $user    [description]
     * @param [type] $ability [description]
     *
     * @return [type] [description]
     */
    public function before($user, $ability)
    {
        if ($user->isSuperuser()) {
            return true;
        }
    }
}
