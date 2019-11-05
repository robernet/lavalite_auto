<?php

namespace Laraauto\Automobile\Http\Controllers;

use App\Http\Controllers\ResourceController as BaseController;
use Form;
use Laraauto\Automobile\Http\Requests\AutomobileRequest;
use Laraauto\Automobile\Interfaces\AutomobileRepositoryInterface;
use Laraauto\Automobile\Models\Automobile;

/**
 * Resource controller class for automobile.
 */
class AutomobileResourceController extends BaseController
{

    /**
     * Initialize automobile resource controller.
     *
     * @param type AutomobileRepositoryInterface $automobile
     *
     * @return null
     */
    public function __construct(AutomobileRepositoryInterface $automobile)
    {
        parent::__construct();
        $this->repository = $automobile;
        $this->repository
            ->pushCriteria(\Litepie\Repository\Criteria\RequestCriteria::class)
            ->pushCriteria(\Laraauto\Automobile\Repositories\Criteria\AutomobileResourceCriteria::class);
    }

    /**
     * Display a list of automobile.
     *
     * @return Response
     */
    public function index(AutomobileRequest $request)
    {
        $view = $this->response->theme->listView();

        if ($this->response->typeIs('json')) {
            $function = camel_case('get-' . $view);
            return $this->repository
                ->setPresenter(\Laraauto\Automobile\Repositories\Presenter\AutomobilePresenter::class)
                ->$function();
        }

        $automobiles = $this->repository->paginate();

        return $this->response->title(trans('automobile::automobile.names'))
            ->view('automobile::automobile.index', true)
            ->data(compact('automobiles'))
            ->output();
    }

    /**
     * Display automobile.
     *
     * @param Request $request
     * @param Model   $automobile
     *
     * @return Response
     */
    public function show(AutomobileRequest $request, Automobile $automobile)
    {

        if ($automobile->exists) {
            $view = 'automobile::automobile.show';
        } else {
            $view = 'automobile::automobile.new';
        }

        return $this->response->title(trans('app.view') . ' ' . trans('automobile::automobile.name'))
            ->data(compact('automobile'))
            ->view($view, true)
            ->output();
    }

    /**
     * Show the form for creating a new automobile.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function create(AutomobileRequest $request)
    {

        $automobile = $this->repository->newInstance([]);
        return $this->response->title(trans('app.new') . ' ' . trans('automobile::automobile.name')) 
            ->view('automobile::automobile.create', true) 
            ->data(compact('automobile'))
            ->output();
    }

    /**
     * Create new automobile.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(AutomobileRequest $request)
    {
        try {
            $attributes              = $request->all();
            $attributes['user_id']   = user_id();
            $attributes['user_type'] = user_type();
            $automobile                 = $this->repository->create($attributes);

            return $this->response->message(trans('messages.success.created', ['Module' => trans('automobile::automobile.name')]))
                ->code(204)
                ->status('success')
                ->url(guard_url('automobile/automobile/' . $automobile->getRouteKey()))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('/automobile/automobile'))
                ->redirect();
        }

    }

    /**
     * Show automobile for editing.
     *
     * @param Request $request
     * @param Model   $automobile
     *
     * @return Response
     */
    public function edit(AutomobileRequest $request, Automobile $automobile)
    {
        return $this->response->title(trans('app.edit') . ' ' . trans('automobile::automobile.name'))
            ->view('automobile::automobile.edit', true)
            ->data(compact('automobile'))
            ->output();
    }

    /**
     * Update the automobile.
     *
     * @param Request $request
     * @param Model   $automobile
     *
     * @return Response
     */
    public function update(AutomobileRequest $request, Automobile $automobile)
    {
        try {
            $attributes = $request->all();

            $automobile->update($attributes);
            return $this->response->message(trans('messages.success.updated', ['Module' => trans('automobile::automobile.name')]))
                ->code(204)
                ->status('success')
                ->url(guard_url('automobile/automobile/' . $automobile->getRouteKey()))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('automobile/automobile/' . $automobile->getRouteKey()))
                ->redirect();
        }

    }

    /**
     * Remove the automobile.
     *
     * @param Model   $automobile
     *
     * @return Response
     */
    public function destroy(AutomobileRequest $request, Automobile $automobile)
    {
        try {

            $automobile->delete();
            return $this->response->message(trans('messages.success.deleted', ['Module' => trans('automobile::automobile.name')]))
                ->code(202)
                ->status('success')
                ->url(guard_url('automobile/automobile/0'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('automobile/automobile/' . $automobile->getRouteKey()))
                ->redirect();
        }

    }

    /**
     * Remove multiple automobile.
     *
     * @param Model   $automobile
     *
     * @return Response
     */
    public function delete(AutomobileRequest $request, $type)
    {
        try {
            $ids = hashids_decode($request->input('ids'));

            if ($type == 'purge') {
                $this->repository->purge($ids);
            } else {
                $this->repository->delete($ids);
            }

            return $this->response->message(trans('messages.success.deleted', ['Module' => trans('automobile::automobile.name')]))
                ->status("success")
                ->code(202)
                ->url(guard_url('automobile/automobile'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->status("error")
                ->code(400)
                ->url(guard_url('/automobile/automobile'))
                ->redirect();
        }

    }

    /**
     * Restore deleted automobiles.
     *
     * @param Model   $automobile
     *
     * @return Response
     */
    public function restore(AutomobileRequest $request)
    {
        try {
            $ids = hashids_decode($request->input('ids'));
            $this->repository->restore($ids);

            return $this->response->message(trans('messages.success.restore', ['Module' => trans('automobile::automobile.name')]))
                ->status("success")
                ->code(202)
                ->url(guard_url('/automobile/automobile'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->status("error")
                ->code(400)
                ->url(guard_url('/automobile/automobile/'))
                ->redirect();
        }

    }

}
