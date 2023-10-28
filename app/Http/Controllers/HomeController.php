<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataModel;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(DataModel $model){
        $userId = Auth::user()->crm_id;

        $user = $model->get('users/'.$userId);

        $level = $model->get('levels/'.$user->levelId);

        $nextLevel = ($user->points / $level->points) * 100;

        $schools = $model->get('schools/653129a954790c5de');
        return view('index', [
            'schools' => $schools,
            'user' => $user,
            'activeMenu' => 'home',
            'level' => $level,
            'nextLevel' => $nextLevel
        ]);
    }
}
