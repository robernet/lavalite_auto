<?php

namespace Laraauto\Automobile\Providers;

use Illuminate\Support\ServiceProvider;

class AutomobileServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // Load view
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'automobile');

        // Load translation
        $this->loadTranslationsFrom(__DIR__ . '/../../resources/lang', 'automobile');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');

        // Call pblish redources function
        $this->publishResources();

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // Bind facade
        $this->app->bind('laraauto.automobile', function ($app) {
            return $this->app->make('Laraauto\Automobile\Automobile');
        });

        // Bind Automobile to repository
        $this->app->bind(
            'Laraauto\Automobile\Interfaces\AutomobileRepositoryInterface',
            \Laraauto\Automobile\Repositories\Eloquent\AutomobileRepository::class
        );
        // Bind Make to repository
        $this->app->bind(
            'Laraauto\Automobile\Interfaces\MakeRepositoryInterface',
            \Laraauto\Automobile\Repositories\Eloquent\MakeRepository::class
        );
        // Bind Carmodel to repository
        $this->app->bind(
            'Laraauto\Automobile\Interfaces\CarmodelRepositoryInterface',
            \Laraauto\Automobile\Repositories\Eloquent\CarmodelRepository::class
        );
        // Bind Directory to repository
        $this->app->bind(
            'Laraauto\Automobile\Interfaces\DirectoryRepositoryInterface',
            \Laraauto\Automobile\Repositories\Eloquent\DirectoryRepository::class
        );
        // Bind Accessory to repository
        $this->app->bind(
            'Laraauto\Automobile\Interfaces\AccessoryRepositoryInterface',
            \Laraauto\Automobile\Repositories\Eloquent\AccessoryRepository::class
        );

        $this->app->register(\Laraauto\Automobile\Providers\AuthServiceProvider::class);
        
        $this->app->register(\Laraauto\Automobile\Providers\RouteServiceProvider::class);
                
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['laraauto.automobile'];
    }

    /**
     * Publish resources.
     *
     * @return void
     */
    private function publishResources()
    {
        // Publish configuration file
        $this->publishes([__DIR__ . '/../../config/config.php' => config_path('laraauto/automobile.php')], 'config');

        // Publish admin view
        $this->publishes([__DIR__ . '/../../resources/views' => base_path('resources/views/vendor/automobile')], 'view');

        // Publish language files
        $this->publishes([__DIR__ . '/../../resources/lang' => base_path('resources/lang/vendor/automobile')], 'lang');

        // Publish public files and assets.
        $this->publishes([__DIR__ . '/public/' => public_path('/')], 'public');
    }
}
