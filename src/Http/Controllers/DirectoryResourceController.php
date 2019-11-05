<?php

namespace Laraauto\Automobile\Http\Controllers;

use App\Http\Controllers\ResourceController as BaseController;
use Form;
use Laraauto\Automobile\Http\Requests\DirectoryRequest;
use Laraauto\Automobile\Interfaces\DirectoryRepositoryInterface;
use Laraauto\Automobile\Models\Directory;

/**
 * Resource controller class for directory.
 */
class DirectoryResourceController extends BaseController
{

    /**
     * Initialize directory resource controller.
     *
     * @param type DirectoryRepositoryInterface $directory
     *
     * @return null
     */
    public function __construct(DirectoryRepositoryInterface $directory)
    {
        parent::__construct();
        $this->repository = $directory;
        $this->repository
            ->pushCriteria(\Litepie\Repository\Criteria\RequestCriteria::class)
            ->pushCriteria(\Laraauto\Automobile\Repositories\Criteria\DirectoryResourceCriteria::class);
    }

    /**
     * Display a list of directory.
     *
     * @return Response
     */
    public function index(DirectoryRequest $request)
    {
        $view = $this->response->theme->listView();

        if ($this->response->typeIs('json')) {
            $function = camel_case('get-' . $view);
            return $this->repository
                ->setPresenter(\Laraauto\Automobile\Repositories\Presenter\DirectoryPresenter::class)
                ->$function();
        }

        $directories = $this->repository->paginate();

        return $this->response->title(trans('automobile::directory.names'))
            ->view('automobile::directory.index', true)
            ->data(compact('directories'))
            ->output();
    }

    /**
     * Display directory.
     *
     * @param Request $request
     * @param Model   $directory
     *
     * @return Response
     */
    public function show(DirectoryRequest $request, Directory $directory)
    {

        if ($directory->exists) {
            $view = 'automobile::directory.show';
        } else {
            $view = 'automobile::directory.new';
        }

        return $this->response->title(trans('app.view') . ' ' . trans('automobile::directory.name'))
            ->data(compact('directory'))
            ->view($view, true)
            ->output();
    }

    /**
     * Show the form for creating a new directory.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function create(DirectoryRequest $request)
    {

        $directory = $this->repository->newInstance([]);
        return $this->response->title(trans('app.new') . ' ' . trans('automobile::directory.name')) 
            ->view('automobile::directory.create', true) 
            ->data(compact('directory'))
            ->output();
    }

    /**
     * Create new directory.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(DirectoryRequest $request)
    {
        try {
            $attributes              = $request->all();
            $attributes['user_id']   = user_id();
            $attributes['user_type'] = user_type();
            $directory                 = $this->repository->create($attributes);

            return $this->response->message(trans('messages.success.created', ['Module' => trans('automobile::directory.name')]))
                ->code(204)
                ->status('success')
                ->url(guard_url('automobile/directory/' . $directory->getRouteKey()))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('/automobile/directory'))
                ->redirect();
        }

    }

    /**
     * Show directory for editing.
     *
     * @param Request $request
     * @param Model   $directory
     *
     * @return Response
     */
    public function edit(DirectoryRequest $request, Directory $directory)
    {
        return $this->response->title(trans('app.edit') . ' ' . trans('automobile::directory.name'))
            ->view('automobile::directory.edit', true)
            ->data(compact('directory'))
            ->output();
    }

    /**
     * Update the directory.
     *
     * @param Request $request
     * @param Model   $directory
     *
     * @return Response
     */
    public function update(DirectoryRequest $request, Directory $directory)
    {
        try {
            $attributes = $request->all();

            $directory->update($attributes);
            return $this->response->message(trans('messages.success.updated', ['Module' => trans('automobile::directory.name')]))
                ->code(204)
                ->status('success')
                ->url(guard_url('automobile/directory/' . $directory->getRouteKey()))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('automobile/directory/' . $directory->getRouteKey()))
                ->redirect();
        }

    }

    /**
     * Remove the directory.
     *
     * @param Model   $directory
     *
     * @return Response
     */
    public function destroy(DirectoryRequest $request, Directory $directory)
    {
        try {

            $directory->delete();
            return $this->response->message(trans('messages.success.deleted', ['Module' => trans('automobile::directory.name')]))
                ->code(202)
                ->status('success')
                ->url(guard_url('automobile/directory/0'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('automobile/directory/' . $directory->getRouteKey()))
                ->redirect();
        }

    }

    /**
     * Remove multiple directory.
     *
     * @param Model   $directory
     *
     * @return Response
     */
    public function delete(DirectoryRequest $request, $type)
    {
        try {
            $ids = hashids_decode($request->input('ids'));

            if ($type == 'purge') {
                $this->repository->purge($ids);
            } else {
                $this->repository->delete($ids);
            }

            return $this->response->message(trans('messages.success.deleted', ['Module' => trans('automobile::directory.name')]))
                ->status("success")
                ->code(202)
                ->url(guard_url('automobile/directory'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->status("error")
                ->code(400)
                ->url(guard_url('/automobile/directory'))
                ->redirect();
        }

    }

    /**
     * Restore deleted directories.
     *
     * @param Model   $directory
     *
     * @return Response
     */
    public function restore(DirectoryRequest $request)
    {
        try {
            $ids = hashids_decode($request->input('ids'));
            $this->repository->restore($ids);

            return $this->response->message(trans('messages.success.restore', ['Module' => trans('automobile::directory.name')]))
                ->status("success")
                ->code(202)
                ->url(guard_url('/automobile/directory'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->status("error")
                ->code(400)
                ->url(guard_url('/automobile/directory/'))
                ->redirect();
        }

    }

}
