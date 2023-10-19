<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request, CrmController $crm){
        $user = $request->session()->get('user');

        if($user->houseId != null){
            $schools = $crm->get('School/', '653129a954790c5de');
            return view('index', ['schools' => $schools, 'user' => $user]);
        } else {
            return redirect('/quiz');
        }
    }
}
