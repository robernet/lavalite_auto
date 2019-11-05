<?php

namespace Laraauto\Automobile\Repositories\Eloquent;

use Laraauto\Automobile\Interfaces\AutomobileRepositoryInterface;
use Litepie\Repository\Eloquent\BaseRepository;

class AutomobileRepository extends BaseRepository implements AutomobileRepositoryInterface
{


    public function boot()
    {
        $this->fieldSearchable = config('laraauto.automobile.automobile.model.search');

    }

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return config('laraauto.automobile.automobile.model.model');
    }
}
