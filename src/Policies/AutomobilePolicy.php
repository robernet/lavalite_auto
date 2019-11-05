<?php

namespace Laraauto\Automobile\Policies;

use Litepie\User\Contracts\UserPolicy;
use Laraauto\Automobile\Models\Automobile;

class AutomobilePolicy
{

    /**
     * Determine if the given user can view the automobile.
     *
     * @param UserPolicy $user
     * @param Automobile $automobile
     *
     * @return bool
     */
    public function view(UserPolicy $user, Automobile $automobile)
    {
        if ($user->canDo('automobile.automobile.view') && $user->isAdmin()) {
            return true;
        }

        return $automobile->user_id == user_id() && $automobile->user_type == user_type();
    }

    /**
     * Determine if the given user can create a automobile.
     *
     * @param UserPolicy $user
     * @param Automobile $automobile
     *
     * @return bool
     */
    public function create(UserPolicy $user)
    {
        return  $user->canDo('automobile.automobile.create');
    }

    /**
     * Determine if the given user can update the given automobile.
     *
     * @param UserPolicy $user
     * @param Automobile $automobile
     *
     * @return bool
     */
    public function update(UserPolicy $user, Automobile $automobile)
    {
        if ($user->canDo('automobile.automobile.edit') && $user->isAdmin()) {
            return true;
        }

        return $automobile->user_id == user_id() && $automobile->user_type == user_type();
    }

    /**
     * Determine if the given user can delete the given automobile.
     *
     * @param UserPolicy $user
     * @param Automobile $automobile
     *
     * @return bool
     */
    public function destroy(UserPolicy $user, Automobile $automobile)
    {
        return $automobile->user_id == user_id() && $automobile->user_type == user_type();
    }

    /**
     * Determine if the given user can verify the given automobile.
     *
     * @param UserPolicy $user
     * @param Automobile $automobile
     *
     * @return bool
     */
    public function verify(UserPolicy $user, Automobile $automobile)
    {
        if ($user->canDo('automobile.automobile.verify')) {
            return true;
        }

        return false;
    }

    /**
     * Determine if the given user can approve the given automobile.
     *
     * @param UserPolicy $user
     * @param Automobile $automobile
     *
     * @return bool
     */
    public function approve(UserPolicy $user, Automobile $automobile)
    {
        if ($user->canDo('automobile.automobile.approve')) {
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
