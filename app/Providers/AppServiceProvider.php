<?php

namespace App\Providers;

use App\Http\Controllers\View\Composers\CategoryComposer;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
    public function boot(): void
    {
        View::composer('components.navbar', CategoryComposer::class);

        Gate::define('admin-only', function (User $user) {
            return $user->is_admin == 1;
        });
    }
}
