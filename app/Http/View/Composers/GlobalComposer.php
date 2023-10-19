<?php

namespace App\Http\View\Composers;

use Illuminate\Support\Facades\Auth;
use \App\Http\Controllers\CrmController;
use Illuminate\View\View;


class GlobalComposer
{
    public function compose(View $view){

        if (Auth::check()) {
            $userId = Auth::user()->crm_id;
            $crm = new CrmController();
            $user = $crm->get('Student/', $userId);
    
            $view->with(['user' => $user]);
        } else {
            // User is not logged in
            // You might want to handle this case, e.g., redirect them to the login page.
        }
    }
}
