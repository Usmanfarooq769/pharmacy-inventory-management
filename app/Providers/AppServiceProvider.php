<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    // public function boot(): void
    // {
    //     // Schema::defaultStringLength(191);
    //     Schema::defaultStringLength(125);
    // }


     /**
     * Bootstrap any application services.
     */
   

public function boot(): void
{
    Schema::defaultStringLength(125);

    // 🔑 Hook Laravel's Gate into your custom User::hasPermission()
    Gate::before(function (User $user, string $ability) {
        return $user->hasPermission($ability) ? true : null;
    });

    // Your existing custom Blade directives...
    Blade::if('permission', function ($permission) {
        return auth()->check() && auth()->user()->hasPermission($permission);
    });

    Blade::if('canany', function (...$permissions) {
        return auth()->check() && auth()->user()->hasAnyPermission(...$permissions);
    });

    Blade::if('canall', function (...$permissions) {
        return auth()->check() && auth()->user()->hasAllPermissions(...$permissions);
    });

    Blade::if('role', function ($role) {
        return auth()->check() && auth()->user()->hasRole($role);
    });

    Blade::if('hasrole', function ($role) {
        return auth()->check() && auth()->user()->hasRole($role);
    });

    Blade::if('hasanyrole', function (...$roles) {
        if (!auth()->check()) return false;

        foreach ($roles as $role) {
            if (auth()->user()->hasRole($role)) {
                return true;
            }
        }
        return false;
    });
}

}
