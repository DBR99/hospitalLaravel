<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('administrador-medico-paciente-permisos',function($user){
            return $user->hasAnyRol(['admin','medico','paciente']);
         });
        Gate::define('administrador-y-medico-permisos',function($user){
            return $user->hasAnyRol(['admin','medico']);
         });
        Gate::define('administrador-permisos',function($user){
           return $user->hasRol('admin');
        });
        Gate::define('editar-usuario',function($user){
             return $user->hasRol('admin');
        });
        Gate::define('eliminar-usuario',function($user){
            return $user->hasRol('admin');
            });
    }
}
