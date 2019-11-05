<?php

namespace Laraauto\Automobile\Policies;

use Litepie\User\Contracts\UserPolicy;
use Laraauto\Automobile\Models\Accessory;

class AccessoryPolicy
{

    /**
     * Determine if the given user can view the accessory.
     *
     * @param UserPolicy $user
     * @param Accessory $accessory
     *
     * @return bool
     */
    public function view(UserPolicy $user, Accessory $accessory)
    {
        if ($user->canDo('automobile.accessory.view') && $user->isAdmin()) {
            return true;
        }

        return $accessory->user_id == user_id() && $accessory->user_type == user_type();
    }

    /**
     * Determine if the given user can create a accessory.
     *
     * @param UserPolicy $user
     * @param Accessory $accessory
     *
     * @return bool
     */
    public function create(UserPolicy $user)
    {
        return  $user->canDo('automobile.accessory.create');
    }

    /**
     * Determine if the given user can update the given accessory.
     *
     * @param UserPolicy $user
     * @param Accessory $accessory
     *
     * @return bool
     */
    public function update(UserPolicy $user, Accessory $accessory)
    {
        if ($user->canDo('automobile.accessory.edit') && $user->isAdmin()) {
            return true;
        }

        return $accessory->user_id == user_id() && $accessory->user_type == user_type();
    }

    /**
     * Determine if the given user can delete the given accessory.
     *
     * @param UserPolicy $user
     * @param Accessory $accessory
     *
     * @return bool
     */
    public function destroy(UserPolicy $user, Accessory $accessory)
    {
        return $accessory->user_id == user_id() && $accessory->user_type == user_type();
    }

    /**
     * Determine if the given user can verify the given accessory.
     *
     * @param UserPolicy $user
     * @param Accessory $accessory
     *
     * @return bool
     */
    public function verify(UserPolicy $user, Accessory $accessory)
    {
        if ($user->canDo('automobile.accessory.verify')) {
            return true;
        }

        return false;
    }

    /**
     * Determine if the given user can approve the given accessory.
     *
     * @param UserPolicy $user
     * @param Accessory $accessory
     *
     * @return bool
     */
    public function approve(UserPolicy $user, Accessory $accessory)
    {
        if ($user->canDo('automobile.accessory.approve')) {
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
