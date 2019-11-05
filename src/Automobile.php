<?php

namespace Laraauto\Automobile;

use User;

class Automobile
{
    /**
     * $automobile object.
     */
    protected $automobile;
    /**
     * $make object.
     */
    protected $make;
    /**
     * $carmodel object.
     */
    protected $carmodel;
    /**
     * $directory object.
     */
    protected $directory;
    /**
     * $accessory object.
     */
    protected $accessory;

    /**
     * Constructor.
     */
    public function __construct(\Laraauto\Automobile\Interfaces\AutomobileRepositoryInterface $automobile,
        \Laraauto\Automobile\Interfaces\MakeRepositoryInterface $make,
        \Laraauto\Automobile\Interfaces\CarmodelRepositoryInterface $carmodel,
        \Laraauto\Automobile\Interfaces\DirectoryRepositoryInterface $directory,
        \Laraauto\Automobile\Interfaces\AccessoryRepositoryInterface $accessory)
    {
        $this->automobile = $automobile;
        $this->make = $make;
        $this->carmodel = $carmodel;
        $this->directory = $directory;
        $this->accessory = $accessory;
    }

    /**
     * Returns count of automobile.
     *
     * @param array $filter
     *
     * @return int
     */
    public function count()
    {
        return  0;
    }

    /**
     * Make gadget View
     *
     * @param string $view
     *
     * @param int $count
     *
     * @return View
     */
    public function gadget($view = 'admin.automobile.gadget', $count = 10)
    {

        if (User::hasRole('user')) {
            $this->automobile->pushCriteria(new \Litepie\Laraauto\Repositories\Criteria\AutomobileUserCriteria());
        }

        $automobile = $this->automobile->scopeQuery(function ($query) use ($count) {
            return $query->orderBy('id', 'DESC')->take($count);
        })->all();

        return view('automobile::' . $view, compact('automobile'))->render();
    }
    /**
     * Make gadget View
     *
     * @param string $view
     *
     * @param int $count
     *
     * @return View
     */
    public function gadget($view = 'admin.make.gadget', $count = 10)
    {

        if (User::hasRole('user')) {
            $this->make->pushCriteria(new \Litepie\Laraauto\Repositories\Criteria\MakeUserCriteria());
        }

        $make = $this->make->scopeQuery(function ($query) use ($count) {
            return $query->orderBy('id', 'DESC')->take($count);
        })->all();

        return view('automobile::' . $view, compact('make'))->render();
    }
    /**
     * Make gadget View
     *
     * @param string $view
     *
     * @param int $count
     *
     * @return View
     */
    public function gadget($view = 'admin.carmodel.gadget', $count = 10)
    {

        if (User::hasRole('user')) {
            $this->carmodel->pushCriteria(new \Litepie\Laraauto\Repositories\Criteria\CarmodelUserCriteria());
        }

        $carmodel = $this->carmodel->scopeQuery(function ($query) use ($count) {
            return $query->orderBy('id', 'DESC')->take($count);
        })->all();

        return view('automobile::' . $view, compact('carmodel'))->render();
    }
    /**
     * Make gadget View
     *
     * @param string $view
     *
     * @param int $count
     *
     * @return View
     */
    public function gadget($view = 'admin.directory.gadget', $count = 10)
    {

        if (User::hasRole('user')) {
            $this->directory->pushCriteria(new \Litepie\Laraauto\Repositories\Criteria\DirectoryUserCriteria());
        }

        $directory = $this->directory->scopeQuery(function ($query) use ($count) {
            return $query->orderBy('id', 'DESC')->take($count);
        })->all();

        return view('automobile::' . $view, compact('directory'))->render();
    }
    /**
     * Make gadget View
     *
     * @param string $view
     *
     * @param int $count
     *
     * @return View
     */
    public function gadget($view = 'admin.accessory.gadget', $count = 10)
    {

        if (User::hasRole('user')) {
            $this->accessory->pushCriteria(new \Litepie\Laraauto\Repositories\Criteria\AccessoryUserCriteria());
        }

        $accessory = $this->accessory->scopeQuery(function ($query) use ($count) {
            return $query->orderBy('id', 'DESC')->take($count);
        })->all();

        return view('automobile::' . $view, compact('accessory'))->render();
    }
}
