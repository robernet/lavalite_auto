<?php

namespace Laraauto\Automobile\Http\Controllers;

use App\Http\Controllers\PublicController as BaseController;
use Laraauto\Automobile\Interfaces\DirectoryRepositoryInterface;

class DirectoryPublicController extends BaseController
{
    // use DirectoryWorkflow;

    /**
     * Constructor.
     *
     * @param type \Laraauto\Directory\Interfaces\DirectoryRepositoryInterface $directory
     *
     * @return type
     */
    public function __construct(DirectoryRepositoryInterface $directory)
    {
        $this->repository = $directory;
        parent::__construct();
    }

    /**
     * Show directory's list.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function index()
    {
        $directories = $this->repository
        ->pushCriteria(app('Litepie\Repository\Criteria\RequestCriteria'))
        ->scopeQuery(function($query){
            return $query->orderBy('id','DESC');
        })->paginate();


        return $this->response->title(trans('$automobile::$directory.names'))
            ->view('$automobile::public.directory.index')
            ->data(compact('$directories'))
            ->output();
    }

    /**
     * Show directory's list based on a type.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function list($type = null)
    {
        $directories = $this->repository
        ->pushCriteria(app('Litepie\Repository\Criteria\RequestCriteria'))
        ->scopeQuery(function($query){
            return $query->orderBy('id','DESC');
        })->paginate();


        return $this->response->title(trans('$automobile::$directory.names'))
            ->view('$automobile::public.directory.index')
            ->data(compact('$directories'))
            ->output();
    }

    /**
     * Show directory.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function show($slug)
    {
        $directory = $this->repository->scopeQuery(function($query) use ($slug) {
            return $query->orderBy('id','DESC')
                         ->where('slug', $slug);
        })->first(['*']);

        return $this->response->title($$directory->name . trans('$automobile::$directory.name'))
            ->view('$automobile::public.directory.show')
            ->data(compact('$directory'))
            ->output();
    }

}
