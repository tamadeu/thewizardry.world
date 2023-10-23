<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataModel;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(CrmController $crm, DataModel $model){
        if (Auth::check()) {
            $userId = Auth::user()->crm_id;

            $user = $model->get('users/'.$userId);

            $houseId = Auth::user()->houseId;

            if($houseId != null){
                $schools = $model->get('schools/653129a954790c5de');
                return view('index', ['schools' => $schools, 'user' => $user]);
            } else {
                return redirect('/quiz');
            }
        }
    }
}
