<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        Gate::define('admin', function (User $user) {
            return $user->name === 'Admin';
        });
        Gate::define('stakeholder', function (User $user) {
            return $user->name === 'Stakeholder';
        });
        Gate::define('engineer', function (User $user) {
            return $user->name === 'Engineer';
        });
    }
}
