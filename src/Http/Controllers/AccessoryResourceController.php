<?php

namespace Laraauto\Automobile\Http\Controllers;

use App\Http\Controllers\ResourceController as BaseController;
use Form;
use Laraauto\Automobile\Http\Requests\AccessoryRequest;
use Laraauto\Automobile\Interfaces\AccessoryRepositoryInterface;
use Laraauto\Automobile\Models\Accessory;

/**
 * Resource controller class for accessory.
 */
class AccessoryResourceController extends BaseController
{

    /**
     * Initialize accessory resource controller.
     *
     * @param type AccessoryRepositoryInterface $accessory
     *
     * @return null
     */
    public function __construct(AccessoryRepositoryInterface $accessory)
    {
        parent::__construct();
        $this->repository = $accessory;
        $this->repository
            ->pushCriteria(\Litepie\Repository\Criteria\RequestCriteria::class)
            ->pushCriteria(\Laraauto\Automobile\Repositories\Criteria\AccessoryResourceCriteria::class);
    }

    /**
     * Display a list of accessory.
     *
     * @return Response
     */
    public function index(AccessoryRequest $request)
    {
        $view = $this->response->theme->listView();

        if ($this->response->typeIs('json')) {
            $function = camel_case('get-' . $view);
            return $this->repository
                ->setPresenter(\Laraauto\Automobile\Repositories\Presenter\AccessoryPresenter::class)
                ->$function();
        }

        $accessories = $this->repository->paginate();

        return $this->response->title(trans('automobile::accessory.names'))
            ->view('automobile::accessory.index', true)
            ->data(compact('accessories'))
            ->output();
    }

    /**
     * Display accessory.
     *
     * @param Request $request
     * @param Model   $accessory
     *
     * @return Response
     */
    public function show(AccessoryRequest $request, Accessory $accessory)
    {

        if ($accessory->exists) {
            $view = 'automobile::accessory.show';
        } else {
            $view = 'automobile::accessory.new';
        }

        return $this->response->title(trans('app.view') . ' ' . trans('automobile::accessory.name'))
            ->data(compact('accessory'))
            ->view($view, true)
            ->output();
    }

    /**
     * Show the form for creating a new accessory.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function create(AccessoryRequest $request)
    {

        $accessory = $this->repository->newInstance([]);
        return $this->response->title(trans('app.new') . ' ' . trans('automobile::accessory.name')) 
            ->view('automobile::accessory.create', true) 
            ->data(compact('accessory'))
            ->output();
    }

    /**
     * Create new accessory.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(AccessoryRequest $request)
    {
        try {
            $attributes              = $request->all();
            $attributes['user_id']   = user_id();
            $attributes['user_type'] = user_type();
            $accessory                 = $this->repository->create($attributes);

            return $this->response->message(trans('messages.success.created', ['Module' => trans('automobile::accessory.name')]))
                ->code(204)
                ->status('success')
                ->url(guard_url('automobile/accessory/' . $accessory->getRouteKey()))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('/automobile/accessory'))
                ->redirect();
        }

    }

    /**
     * Show accessory for editing.
     *
     * @param Request $request
     * @param Model   $accessory
     *
     * @return Response
     */
    public function edit(AccessoryRequest $request, Accessory $accessory)
    {
        return $this->response->title(trans('app.edit') . ' ' . trans('automobile::accessory.name'))
            ->view('automobile::accessory.edit', true)
            ->data(compact('accessory'))
            ->output();
    }

    /**
     * Update the accessory.
     *
     * @param Request $request
     * @param Model   $accessory
     *
     * @return Response
     */
    public function update(AccessoryRequest $request, Accessory $accessory)
    {
        try {
            $attributes = $request->all();

            $accessory->update($attributes);
            return $this->response->message(trans('messages.success.updated', ['Module' => trans('automobile::accessory.name')]))
                ->code(204)
                ->status('success')
                ->url(guard_url('automobile/accessory/' . $accessory->getRouteKey()))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('automobile/accessory/' . $accessory->getRouteKey()))
                ->redirect();
        }

    }

    /**
     * Remove the accessory.
     *
     * @param Model   $accessory
     *
     * @return Response
     */
    public function destroy(AccessoryRequest $request, Accessory $accessory)
    {
        try {

            $accessory->delete();
            return $this->response->message(trans('messages.success.deleted', ['Module' => trans('automobile::accessory.name')]))
                ->code(202)
                ->status('success')
                ->url(guard_url('automobile/accessory/0'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('automobile/accessory/' . $accessory->getRouteKey()))
                ->redirect();
        }

    }

    /**
     * Remove multiple accessory.
     *
     * @param Model   $accessory
     *
     * @return Response
     */
    public function delete(AccessoryRequest $request, $type)
    {
        try {
            $ids = hashids_decode($request->input('ids'));

            if ($type == 'purge') {
                $this->repository->purge($ids);
            } else {
                $this->repository->delete($ids);
            }

            return $this->response->message(trans('messages.success.deleted', ['Module' => trans('automobile::accessory.name')]))
                ->status("success")
                ->code(202)
                ->url(guard_url('automobile/accessory'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->status("error")
                ->code(400)
                ->url(guard_url('/automobile/accessory'))
                ->redirect();
        }

    }

    /**
     * Restore deleted accessories.
     *
     * @param Model   $accessory
     *
     * @return Response
     */
    public function restore(AccessoryRequest $request)
    {
        try {
            $ids = hashids_decode($request->input('ids'));
            $this->repository->restore($ids);

            return $this->response->message(trans('messages.success.restore', ['Module' => trans('automobile::accessory.name')]))
                ->status("success")
                ->code(202)
                ->url(guard_url('/automobile/accessory'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->status("error")
                ->code(400)
                ->url(guard_url('/automobile/accessory/'))
                ->redirect();
        }

    }

}
