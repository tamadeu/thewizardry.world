<?php

namespace App\Http\Controllers;

use App\Models\Crm;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Crm $crm, User $user){

        $user = $user->crmUser();

        $level = $crm->get('Level/653eff4d2edfce303');

        $nextLevel = ($user->points / $level->points) * 100;

        return view('index', [
            'activeMenu' => 'home',
            'level' => $level,
            'nextLevel' => $nextLevel
        ]);
    }
}
