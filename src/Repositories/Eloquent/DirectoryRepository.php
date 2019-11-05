<?php

namespace Laraauto\Automobile\Repositories\Eloquent;

use Laraauto\Automobile\Interfaces\DirectoryRepositoryInterface;
use Litepie\Repository\Eloquent\BaseRepository;

class DirectoryRepository extends BaseRepository implements DirectoryRepositoryInterface
{


    public function boot()
    {
        $this->fieldSearchable = config('laraauto.automobile.directory.model.search');

    }

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return config('laraauto.automobile.directory.model.model');
    }
}
