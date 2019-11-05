<?php

namespace Laraauto\Automobile\Http\Controllers;

use App\Http\Controllers\ResourceController as BaseController;
use Form;
use Laraauto\Automobile\Http\Requests\MakeRequest;
use Laraauto\Automobile\Interfaces\MakeRepositoryInterface;
use Laraauto\Automobile\Models\Make;

/**
 * Resource controller class for make.
 */
class MakeResourceController extends BaseController
{

    /**
     * Initialize make resource controller.
     *
     * @param type MakeRepositoryInterface $make
     *
     * @return null
     */
    public function __construct(MakeRepositoryInterface $make)
    {
        parent::__construct();
        $this->repository = $make;
        $this->repository
            ->pushCriteria(\Litepie\Repository\Criteria\RequestCriteria::class)
            ->pushCriteria(\Laraauto\Automobile\Repositories\Criteria\MakeResourceCriteria::class);
    }

    /**
     * Display a list of make.
     *
     * @return Response
     */
    public function index(MakeRequest $request)
    {
        $view = $this->response->theme->listView();

        if ($this->response->typeIs('json')) {
            $function = camel_case('get-' . $view);
            return $this->repository
                ->setPresenter(\Laraauto\Automobile\Repositories\Presenter\MakePresenter::class)
                ->$function();
        }

        $makes = $this->repository->paginate();

        return $this->response->title(trans('automobile::make.names'))
            ->view('automobile::make.index', true)
            ->data(compact('makes'))
            ->output();
    }

    /**
     * Display make.
     *
     * @param Request $request
     * @param Model   $make
     *
     * @return Response
     */
    public function show(MakeRequest $request, Make $make)
    {

        if ($make->exists) {
            $view = 'automobile::make.show';
        } else {
            $view = 'automobile::make.new';
        }

        return $this->response->title(trans('app.view') . ' ' . trans('automobile::make.name'))
            ->data(compact('make'))
            ->view($view, true)
            ->output();
    }

    /**
     * Show the form for creating a new make.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function create(MakeRequest $request)
    {

        $make = $this->repository->newInstance([]);
        return $this->response->title(trans('app.new') . ' ' . trans('automobile::make.name')) 
            ->view('automobile::make.create', true) 
            ->data(compact('make'))
            ->output();
    }

    /**
     * Create new make.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(MakeRequest $request)
    {
        try {
            $attributes              = $request->all();
            $attributes['user_id']   = user_id();
            $attributes['user_type'] = user_type();
            $make                 = $this->repository->create($attributes);

            return $this->response->message(trans('messages.success.created', ['Module' => trans('automobile::make.name')]))
                ->code(204)
                ->status('success')
                ->url(guard_url('automobile/make/' . $make->getRouteKey()))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('/automobile/make'))
                ->redirect();
        }

    }

    /**
     * Show make for editing.
     *
     * @param Request $request
     * @param Model   $make
     *
     * @return Response
     */
    public function edit(MakeRequest $request, Make $make)
    {
        return $this->response->title(trans('app.edit') . ' ' . trans('automobile::make.name'))
            ->view('automobile::make.edit', true)
            ->data(compact('make'))
            ->output();
    }

    /**
     * Update the make.
     *
     * @param Request $request
     * @param Model   $make
     *
     * @return Response
     */
    public function update(MakeRequest $request, Make $make)
    {
        try {
            $attributes = $request->all();

            $make->update($attributes);
            return $this->response->message(trans('messages.success.updated', ['Module' => trans('automobile::make.name')]))
                ->code(204)
                ->status('success')
                ->url(guard_url('automobile/make/' . $make->getRouteKey()))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('automobile/make/' . $make->getRouteKey()))
                ->redirect();
        }

    }

    /**
     * Remove the make.
     *
     * @param Model   $make
     *
     * @return Response
     */
    public function destroy(MakeRequest $request, Make $make)
    {
        try {

            $make->delete();
            return $this->response->message(trans('messages.success.deleted', ['Module' => trans('automobile::make.name')]))
                ->code(202)
                ->status('success')
                ->url(guard_url('automobile/make/0'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('automobile/make/' . $make->getRouteKey()))
                ->redirect();
        }

    }

    /**
     * Remove multiple make.
     *
     * @param Model   $make
     *
     * @return Response
     */
    public function delete(MakeRequest $request, $type)
    {
        try {
            $ids = hashids_decode($request->input('ids'));

            if ($type == 'purge') {
                $this->repository->purge($ids);
            } else {
                $this->repository->delete($ids);
            }

            return $this->response->message(trans('messages.success.deleted', ['Module' => trans('automobile::make.name')]))
                ->status("success")
                ->code(202)
                ->url(guard_url('automobile/make'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->status("error")
                ->code(400)
                ->url(guard_url('/automobile/make'))
                ->redirect();
        }

    }

    /**
     * Restore deleted makes.
     *
     * @param Model   $make
     *
     * @return Response
     */
    public function restore(MakeRequest $request)
    {
        try {
            $ids = hashids_decode($request->input('ids'));
            $this->repository->restore($ids);

            return $this->response->message(trans('messages.success.restore', ['Module' => trans('automobile::make.name')]))
                ->status("success")
                ->code(202)
                ->url(guard_url('/automobile/make'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->status("error")
                ->code(400)
                ->url(guard_url('/automobile/make/'))
                ->redirect();
        }

    }

}
