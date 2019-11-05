<?php

namespace Laraauto\Automobile\Repositories\Eloquent;

use Laraauto\Automobile\Interfaces\CarmodelRepositoryInterface;
use Litepie\Repository\Eloquent\BaseRepository;

class CarmodelRepository extends BaseRepository implements CarmodelRepositoryInterface
{


    public function boot()
    {
        $this->fieldSearchable = config('laraauto.automobile.carmodel.model.search');

    }

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return config('laraauto.automobile.carmodel.model.model');
    }
}
