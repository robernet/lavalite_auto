<?php

namespace Laraauto\Automobile\Http\Controllers;

use App\Http\Controllers\ResourceController as BaseController;
use Form;
use Laraauto\Automobile\Http\Requests\CarmodelRequest;
use Laraauto\Automobile\Interfaces\CarmodelRepositoryInterface;
use Laraauto\Automobile\Models\Carmodel;

/**
 * Resource controller class for carmodel.
 */
class CarmodelResourceController extends BaseController
{

    /**
     * Initialize carmodel resource controller.
     *
     * @param type CarmodelRepositoryInterface $carmodel
     *
     * @return null
     */
    public function __construct(CarmodelRepositoryInterface $carmodel)
    {
        parent::__construct();
        $this->repository = $carmodel;
        $this->repository
            ->pushCriteria(\Litepie\Repository\Criteria\RequestCriteria::class)
            ->pushCriteria(\Laraauto\Automobile\Repositories\Criteria\CarmodelResourceCriteria::class);
    }

    /**
     * Display a list of carmodel.
     *
     * @return Response
     */
    public function index(CarmodelRequest $request)
    {
        $view = $this->response->theme->listView();

        if ($this->response->typeIs('json')) {
            $function = camel_case('get-' . $view);
            return $this->repository
                ->setPresenter(\Laraauto\Automobile\Repositories\Presenter\CarmodelPresenter::class)
                ->$function();
        }

        $carmodels = $this->repository->paginate();

        return $this->response->title(trans('automobile::carmodel.names'))
            ->view('automobile::carmodel.index', true)
            ->data(compact('carmodels'))
            ->output();
    }

    /**
     * Display carmodel.
     *
     * @param Request $request
     * @param Model   $carmodel
     *
     * @return Response
     */
    public function show(CarmodelRequest $request, Carmodel $carmodel)
    {

        if ($carmodel->exists) {
            $view = 'automobile::carmodel.show';
        } else {
            $view = 'automobile::carmodel.new';
        }

        return $this->response->title(trans('app.view') . ' ' . trans('automobile::carmodel.name'))
            ->data(compact('carmodel'))
            ->view($view, true)
            ->output();
    }

    /**
     * Show the form for creating a new carmodel.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function create(CarmodelRequest $request)
    {

        $carmodel = $this->repository->newInstance([]);
        return $this->response->title(trans('app.new') . ' ' . trans('automobile::carmodel.name')) 
            ->view('automobile::carmodel.create', true) 
            ->data(compact('carmodel'))
            ->output();
    }

    /**
     * Create new carmodel.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(CarmodelRequest $request)
    {
        try {
            $attributes              = $request->all();
            $attributes['user_id']   = user_id();
            $attributes['user_type'] = user_type();
            $carmodel                 = $this->repository->create($attributes);

            return $this->response->message(trans('messages.success.created', ['Module' => trans('automobile::carmodel.name')]))
                ->code(204)
                ->status('success')
                ->url(guard_url('automobile/carmodel/' . $carmodel->getRouteKey()))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('/automobile/carmodel'))
                ->redirect();
        }

    }

    /**
     * Show carmodel for editing.
     *
     * @param Request $request
     * @param Model   $carmodel
     *
     * @return Response
     */
    public function edit(CarmodelRequest $request, Carmodel $carmodel)
    {
        return $this->response->title(trans('app.edit') . ' ' . trans('automobile::carmodel.name'))
            ->view('automobile::carmodel.edit', true)
            ->data(compact('carmodel'))
            ->output();
    }

    /**
     * Update the carmodel.
     *
     * @param Request $request
     * @param Model   $carmodel
     *
     * @return Response
     */
    public function update(CarmodelRequest $request, Carmodel $carmodel)
    {
        try {
            $attributes = $request->all();

            $carmodel->update($attributes);
            return $this->response->message(trans('messages.success.updated', ['Module' => trans('automobile::carmodel.name')]))
                ->code(204)
                ->status('success')
                ->url(guard_url('automobile/carmodel/' . $carmodel->getRouteKey()))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('automobile/carmodel/' . $carmodel->getRouteKey()))
                ->redirect();
        }

    }

    /**
     * Remove the carmodel.
     *
     * @param Model   $carmodel
     *
     * @return Response
     */
    public function destroy(CarmodelRequest $request, Carmodel $carmodel)
    {
        try {

            $carmodel->delete();
            return $this->response->message(trans('messages.success.deleted', ['Module' => trans('automobile::carmodel.name')]))
                ->code(202)
                ->status('success')
                ->url(guard_url('automobile/carmodel/0'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('automobile/carmodel/' . $carmodel->getRouteKey()))
                ->redirect();
        }

    }

    /**
     * Remove multiple carmodel.
     *
     * @param Model   $carmodel
     *
     * @return Response
     */
    public function delete(CarmodelRequest $request, $type)
    {
        try {
            $ids = hashids_decode($request->input('ids'));

            if ($type == 'purge') {
                $this->repository->purge($ids);
            } else {
                $this->repository->delete($ids);
            }

            return $this->response->message(trans('messages.success.deleted', ['Module' => trans('automobile::carmodel.name')]))
                ->status("success")
                ->code(202)
                ->url(guard_url('automobile/carmodel'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->status("error")
                ->code(400)
                ->url(guard_url('/automobile/carmodel'))
                ->redirect();
        }

    }

    /**
     * Restore deleted carmodels.
     *
     * @param Model   $carmodel
     *
     * @return Response
     */
    public function restore(CarmodelRequest $request)
    {
        try {
            $ids = hashids_decode($request->input('ids'));
            $this->repository->restore($ids);

            return $this->response->message(trans('messages.success.restore', ['Module' => trans('automobile::carmodel.name')]))
                ->status("success")
                ->code(202)
                ->url(guard_url('/automobile/carmodel'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->status("error")
                ->code(400)
                ->url(guard_url('/automobile/carmodel/'))
                ->redirect();
        }

    }

}
