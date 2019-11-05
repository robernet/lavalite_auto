<?php

namespace Laraauto\Automobile\Repositories\Eloquent;

use Laraauto\Automobile\Interfaces\MakeRepositoryInterface;
use Litepie\Repository\Eloquent\BaseRepository;

class MakeRepository extends BaseRepository implements MakeRepositoryInterface
{


    public function boot()
    {
        $this->fieldSearchable = config('laraauto.automobile.make.model.search');

    }

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return config('laraauto.automobile.make.model.model');
    }
}
