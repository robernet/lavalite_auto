<?php

namespace Laraauto\Automobile\Http\Controllers;

use App\Http\Controllers\PublicController as BaseController;
use Laraauto\Automobile\Interfaces\MakeRepositoryInterface;

class MakePublicController extends BaseController
{
    // use MakeWorkflow;

    /**
     * Constructor.
     *
     * @param type \Laraauto\Make\Interfaces\MakeRepositoryInterface $make
     *
     * @return type
     */
    public function __construct(MakeRepositoryInterface $make)
    {
        $this->repository = $make;
        parent::__construct();
    }

    /**
     * Show make's list.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function index()
    {
        $makes = $this->repository
        ->pushCriteria(app('Litepie\Repository\Criteria\RequestCriteria'))
        ->scopeQuery(function($query){
            return $query->orderBy('id','DESC');
        })->paginate();


        return $this->response->title(trans('$automobile::$make.names'))
            ->view('$automobile::public.make.index')
            ->data(compact('$makes'))
            ->output();
    }

    /**
     * Show make's list based on a type.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function list($type = null)
    {
        $makes = $this->repository
        ->pushCriteria(app('Litepie\Repository\Criteria\RequestCriteria'))
        ->scopeQuery(function($query){
            return $query->orderBy('id','DESC');
        })->paginate();


        return $this->response->title(trans('$automobile::$make.names'))
            ->view('$automobile::public.make.index')
            ->data(compact('$makes'))
            ->output();
    }

    /**
     * Show make.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function show($slug)
    {
        $make = $this->repository->scopeQuery(function($query) use ($slug) {
            return $query->orderBy('id','DESC')
                         ->where('slug', $slug);
        })->first(['*']);

        return $this->response->title($$make->name . trans('$automobile::$make.name'))
            ->view('$automobile::public.make.show')
            ->data(compact('$make'))
            ->output();
    }

}
