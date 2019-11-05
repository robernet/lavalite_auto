<?php

namespace Laraauto\Automobile\Http\Controllers;

use App\Http\Controllers\PublicController as BaseController;
use Laraauto\Automobile\Interfaces\AutomobileRepositoryInterface;

class AutomobilePublicController extends BaseController
{
    // use AutomobileWorkflow;

    /**
     * Constructor.
     *
     * @param type \Laraauto\Automobile\Interfaces\AutomobileRepositoryInterface $automobile
     *
     * @return type
     */
    public function __construct(AutomobileRepositoryInterface $automobile)
    {
        $this->repository = $automobile;
        parent::__construct();
    }

    /**
     * Show automobile's list.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function index()
    {
        $automobiles = $this->repository
        ->pushCriteria(app('Litepie\Repository\Criteria\RequestCriteria'))
        ->scopeQuery(function($query){
            return $query->orderBy('id','DESC');
        })->paginate();


        return $this->response->title(trans('$automobile::$automobile.names'))
            ->view('$automobile::public.automobile.index')
            ->data(compact('$automobiles'))
            ->output();
    }

    /**
     * Show automobile's list based on a type.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function list($type = null)
    {
        $automobiles = $this->repository
        ->pushCriteria(app('Litepie\Repository\Criteria\RequestCriteria'))
        ->scopeQuery(function($query){
            return $query->orderBy('id','DESC');
        })->paginate();


        return $this->response->title(trans('$automobile::$automobile.names'))
            ->view('$automobile::public.automobile.index')
            ->data(compact('$automobiles'))
            ->output();
    }

    /**
     * Show automobile.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function show($slug)
    {
        $automobile = $this->repository->scopeQuery(function($query) use ($slug) {
            return $query->orderBy('id','DESC')
                         ->where('slug', $slug);
        })->first(['*']);

        return $this->response->title($$automobile->name . trans('$automobile::$automobile.name'))
            ->view('$automobile::public.automobile.show')
            ->data(compact('$automobile'))
            ->output();
    }

}
