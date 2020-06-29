<?php

namespace App\Providers;

use App\User;
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

        Gate::define('full service', function (User $user) {
            return $user->role_id == 1;
        });

        Gate::define('read all', function (User $user) {
            return $user->role_id == 2;
        });

        Gate::define('read own', function (User $user) {
            return $user->role_id == 3;
        });

    }
}
