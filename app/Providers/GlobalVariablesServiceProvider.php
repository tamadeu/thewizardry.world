<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Cache;
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
    public function boot()
    {
        View::composer('*', function ($view) {
            // Define a cache key for your notifications
            if(Auth::check()) {
            $cacheNotifications = 'notifications_' . auth()->user()->id;
            $cacheUser = 'user_' . auth()->user()->id;
    
            $notifications = Cache::remember($cacheNotifications, now()->addMinutes(10), function () {
                // This closure will be executed if the data is not found in the cache
    
                $user = new User();
                $crm = new Crm();
                $user = $user->crmUser();
    
                return $crm->get("Student/" . $user->id . '/userNotifications1');
            });

            $user = Cache::remember($cacheUser, now()->addMinutes(10), function () {
                $user = new User();
                return $user->crmUser();
            });

            $view->with([
                'user' => $user,
                'notifications' => $notifications,
            ]);
        }
        });
    }
    
}
