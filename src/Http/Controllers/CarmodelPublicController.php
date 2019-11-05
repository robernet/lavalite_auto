<?php

namespace Laraauto\Automobile\Http\Controllers;

use App\Http\Controllers\PublicController as BaseController;
use Laraauto\Automobile\Interfaces\CarmodelRepositoryInterface;

class CarmodelPublicController extends BaseController
{
    // use CarmodelWorkflow;

    /**
     * Constructor.
     *
     * @param type \Laraauto\Carmodel\Interfaces\CarmodelRepositoryInterface $carmodel
     *
     * @return type
     */
    public function __construct(CarmodelRepositoryInterface $carmodel)
    {
        $this->repository = $carmodel;
        parent::__construct();
    }

    /**
     * Show carmodel's list.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function index()
    {
        $carmodels = $this->repository
        ->pushCriteria(app('Litepie\Repository\Criteria\RequestCriteria'))
        ->scopeQuery(function($query){
            return $query->orderBy('id','DESC');
        })->paginate();


        return $this->response->title(trans('$automobile::$carmodel.names'))
            ->view('$automobile::public.carmodel.index')
            ->data(compact('$carmodels'))
            ->output();
    }

    /**
     * Show carmodel's list based on a type.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function list($type = null)
    {
        $carmodels = $this->repository
        ->pushCriteria(app('Litepie\Repository\Criteria\RequestCriteria'))
        ->scopeQuery(function($query){
            return $query->orderBy('id','DESC');
        })->paginate();


        return $this->response->title(trans('$automobile::$carmodel.names'))
            ->view('$automobile::public.carmodel.index')
            ->data(compact('$carmodels'))
            ->output();
    }

    /**
     * Show carmodel.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function show($slug)
    {
        $carmodel = $this->repository->scopeQuery(function($query) use ($slug) {
            return $query->orderBy('id','DESC')
                         ->where('slug', $slug);
        })->first(['*']);

        return $this->response->title($$carmodel->name . trans('$automobile::$carmodel.name'))
            ->view('$automobile::public.carmodel.show')
            ->data(compact('$carmodel'))
            ->output();
    }

}
