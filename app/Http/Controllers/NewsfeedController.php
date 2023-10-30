<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\DataModel;
use Illuminate\Support\Facades\Auth;

class NewsfeedController extends Controller
{
    public function index(User $user){
        $user = $user->crmUser();

            return view('newsfeed', [
                'user' => $user,
                'activeMenu' => 'feed'
            ]);

    }
}
