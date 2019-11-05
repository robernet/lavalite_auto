<?php

namespace Laraauto\Automobile\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the package.
     *
     * @var array
     */
    protected $policies = [
        // Bind Automobile policy
        'Laraauto\Automobile\Models\Automobile' => \Laraauto\Automobile\Policies\AutomobilePolicy::class,
// Bind Make policy
        'Laraauto\Automobile\Models\Make' => \Laraauto\Automobile\Policies\MakePolicy::class,
// Bind Carmodel policy
        'Laraauto\Automobile\Models\Carmodel' => \Laraauto\Automobile\Policies\CarmodelPolicy::class,
// Bind Directory policy
        'Laraauto\Automobile\Models\Directory' => \Laraauto\Automobile\Policies\DirectoryPolicy::class,
// Bind Accessory policy
        'Laraauto\Automobile\Models\Accessory' => \Laraauto\Automobile\Policies\AccessoryPolicy::class,
    ];

    /**
     * Register any package authentication / authorization services.
     *
     * @param \Illuminate\Contracts\Auth\Access\Gate $gate
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        parent::registerPolicies($gate);
    }
}
