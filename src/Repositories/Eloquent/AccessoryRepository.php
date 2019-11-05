<?php

namespace Laraauto\Automobile\Repositories\Eloquent;

use Laraauto\Automobile\Interfaces\AccessoryRepositoryInterface;
use Litepie\Repository\Eloquent\BaseRepository;

class AccessoryRepository extends BaseRepository implements AccessoryRepositoryInterface
{


    public function boot()
    {
        $this->fieldSearchable = config('laraauto.automobile.accessory.model.search');

    }

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return config('laraauto.automobile.accessory.model.model');
    }
}
