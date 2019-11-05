<?php

namespace Laraauto\Automobile\Http\Controllers;

use App\Http\Controllers\PublicController as BaseController;
use Laraauto\Automobile\Interfaces\AccessoryRepositoryInterface;

class AccessoryPublicController extends BaseController
{
    // use AccessoryWorkflow;

    /**
     * Constructor.
     *
     * @param type \Laraauto\Accessory\Interfaces\AccessoryRepositoryInterface $accessory
     *
     * @return type
     */
    public function __construct(AccessoryRepositoryInterface $accessory)
    {
        $this->repository = $accessory;
        parent::__construct();
    }

    /**
     * Show accessory's list.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function index()
    {
        $accessories = $this->repository
        ->pushCriteria(app('Litepie\Repository\Criteria\RequestCriteria'))
        ->scopeQuery(function($query){
            return $query->orderBy('id','DESC');
        })->paginate();


        return $this->response->title(trans('$automobile::$accessory.names'))
            ->view('$automobile::public.accessory.index')
            ->data(compact('$accessories'))
            ->output();
    }

    /**
     * Show accessory's list based on a type.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function list($type = null)
    {
        $accessories = $this->repository
        ->pushCriteria(app('Litepie\Repository\Criteria\RequestCriteria'))
        ->scopeQuery(function($query){
            return $query->orderBy('id','DESC');
        })->paginate();


        return $this->response->title(trans('$automobile::$accessory.names'))
            ->view('$automobile::public.accessory.index')
            ->data(compact('$accessories'))
            ->output();
    }

    /**
     * Show accessory.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function show($slug)
    {
        $accessory = $this->repository->scopeQuery(function($query) use ($slug) {
            return $query->orderBy('id','DESC')
                         ->where('slug', $slug);
        })->first(['*']);

        return $this->response->title($$accessory->name . trans('$automobile::$accessory.name'))
            ->view('$automobile::public.accessory.show')
            ->data(compact('$accessory'))
            ->output();
    }

}
