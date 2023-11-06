<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Crm;
use Illuminate\Support\Facades\Auth;

class GlobalVariablesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
   
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $user = new User();
            $crm = new Crm();
            $user = $user->crmUser();

            $notifications = $crm->get("Student/". $user->id.'/userNotifications1');

            $view->with([
                'user' => $user,
                'notifications' => $notifications
            ]);
        });
    }
}
