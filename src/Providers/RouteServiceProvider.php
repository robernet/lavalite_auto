<?php

namespace Laraauto\Automobile\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Routing\Router;
use Laraauto\Automobile\Models\Automobile;
use Request;
use Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to the controller routes in your routes file.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'Laraauto\Automobile\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param   \Illuminate\Routing\Router  $router
     * @return void
     */
    public function boot()
    {
        parent::boot();

        if (Request::is('*/automobile/automobile/*')) {
            Route::bind('automobile', function ($automobile) {
                $automobilerepo = $this->app->make('Laraauto\Automobile\Interfaces\AutomobileRepositoryInterface');
                return $automobilerepo->findorNew($automobile);
            });
        }

        if (Request::is('*/automobile/make/*')) {
            Route::bind('make', function ($make) {
                $makerepo = $this->app->make('Laraauto\Automobile\Interfaces\MakeRepositoryInterface');
                return $makerepo->findorNew($make);
            });
        }

        if (Request::is('*/automobile/carmodel/*')) {
            Route::bind('carmodel', function ($carmodel) {
                $carmodelrepo = $this->app->make('Laraauto\Automobile\Interfaces\CarmodelRepositoryInterface');
                return $carmodelrepo->findorNew($carmodel);
            });
        }

        if (Request::is('*/automobile/directory/*')) {
            Route::bind('directory', function ($directory) {
                $directoryrepo = $this->app->make('Laraauto\Automobile\Interfaces\DirectoryRepositoryInterface');
                return $directoryrepo->findorNew($directory);
            });
        }

        if (Request::is('*/automobile/accessory/*')) {
            Route::bind('accessory', function ($accessory) {
                $accessoryrepo = $this->app->make('Laraauto\Automobile\Interfaces\AccessoryRepositoryInterface');
                return $accessoryrepo->findorNew($accessory);
            });
        }

    }

    /**
     * Define the routes for the package.
     *
     * @return void
     */
    public function map()
    {
        $this->mapWebRoutes();
    }

    /**
     * Define the "web" routes for the package.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        if (request()->segment(1) == 'api' || request()->segment(2) == 'api') {
            return;
        }
        
        Route::group([
            'middleware' => 'web',
            'namespace'  => $this->namespace,
            'prefix'     => trans_setlocale(),
        ], function ($router) {
            require (__DIR__ . '/../../routes/web.php');
        });
    }

}
