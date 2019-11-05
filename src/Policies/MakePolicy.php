<?php

namespace Laraauto\Automobile\Policies;

use Litepie\User\Contracts\UserPolicy;
use Laraauto\Automobile\Models\Make;

class MakePolicy
{

    /**
     * Determine if the given user can view the make.
     *
     * @param UserPolicy $user
     * @param Make $make
     *
     * @return bool
     */
    public function view(UserPolicy $user, Make $make)
    {
        if ($user->canDo('automobile.make.view') && $user->isAdmin()) {
            return true;
        }

        return $make->user_id == user_id() && $make->user_type == user_type();
    }

    /**
     * Determine if the given user can create a make.
     *
     * @param UserPolicy $user
     * @param Make $make
     *
     * @return bool
     */
    public function create(UserPolicy $user)
    {
        return  $user->canDo('automobile.make.create');
    }

    /**
     * Determine if the given user can update the given make.
     *
     * @param UserPolicy $user
     * @param Make $make
     *
     * @return bool
     */
    public function update(UserPolicy $user, Make $make)
    {
        if ($user->canDo('automobile.make.edit') && $user->isAdmin()) {
            return true;
        }

        return $make->user_id == user_id() && $make->user_type == user_type();
    }

    /**
     * Determine if the given user can delete the given make.
     *
     * @param UserPolicy $user
     * @param Make $make
     *
     * @return bool
     */
    public function destroy(UserPolicy $user, Make $make)
    {
        return $make->user_id == user_id() && $make->user_type == user_type();
    }

    /**
     * Determine if the given user can verify the given make.
     *
     * @param UserPolicy $user
     * @param Make $make
     *
     * @return bool
     */
    public function verify(UserPolicy $user, Make $make)
    {
        if ($user->canDo('automobile.make.verify')) {
            return true;
        }

        return false;
    }

    /**
     * Determine if the given user can approve the given make.
     *
     * @param UserPolicy $user
     * @param Make $make
     *
     * @return bool
     */
    public function approve(UserPolicy $user, Make $make)
    {
        if ($user->canDo('automobile.make.approve')) {
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
