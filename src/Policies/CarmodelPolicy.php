<?php

namespace Laraauto\Automobile\Policies;

use Litepie\User\Contracts\UserPolicy;
use Laraauto\Automobile\Models\Carmodel;

class CarmodelPolicy
{

    /**
     * Determine if the given user can view the carmodel.
     *
     * @param UserPolicy $user
     * @param Carmodel $carmodel
     *
     * @return bool
     */
    public function view(UserPolicy $user, Carmodel $carmodel)
    {
        if ($user->canDo('automobile.carmodel.view') && $user->isAdmin()) {
            return true;
        }

        return $carmodel->user_id == user_id() && $carmodel->user_type == user_type();
    }

    /**
     * Determine if the given user can create a carmodel.
     *
     * @param UserPolicy $user
     * @param Carmodel $carmodel
     *
     * @return bool
     */
    public function create(UserPolicy $user)
    {
        return  $user->canDo('automobile.carmodel.create');
    }

    /**
     * Determine if the given user can update the given carmodel.
     *
     * @param UserPolicy $user
     * @param Carmodel $carmodel
     *
     * @return bool
     */
    public function update(UserPolicy $user, Carmodel $carmodel)
    {
        if ($user->canDo('automobile.carmodel.edit') && $user->isAdmin()) {
            return true;
        }

        return $carmodel->user_id == user_id() && $carmodel->user_type == user_type();
    }

    /**
     * Determine if the given user can delete the given carmodel.
     *
     * @param UserPolicy $user
     * @param Carmodel $carmodel
     *
     * @return bool
     */
    public function destroy(UserPolicy $user, Carmodel $carmodel)
    {
        return $carmodel->user_id == user_id() && $carmodel->user_type == user_type();
    }

    /**
     * Determine if the given user can verify the given carmodel.
     *
     * @param UserPolicy $user
     * @param Carmodel $carmodel
     *
     * @return bool
     */
    public function verify(UserPolicy $user, Carmodel $carmodel)
    {
        if ($user->canDo('automobile.carmodel.verify')) {
            return true;
        }

        return false;
    }

    /**
     * Determine if the given user can approve the given carmodel.
     *
     * @param UserPolicy $user
     * @param Carmodel $carmodel
     *
     * @return bool
     */
    public function approve(UserPolicy $user, Carmodel $carmodel)
    {
        if ($user->canDo('automobile.carmodel.approve')) {
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
