<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function logoutAllUsers()
    {
        $users = User::all(); // Assuming you have a User model
        
        foreach ($users as $user) {
            Auth::logoutOtherDevices($user->password);
        }
    
        return redirect('/')->with('success', 'All users have been logged out.');
    }
}
