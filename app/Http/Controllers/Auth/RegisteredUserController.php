<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Http\Controllers\CrmController;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:20', 'unique:'.User::class],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $crm = new CrmController();

        $body = [
            "firstName" => $request->name,
            "lastName" => $request->lastName,
            "email" => $request->email,
            "username" => $request->username
        ];

        $createUser = $crm->post('Student', $body);

        if($createUser != null){

            $user = User::create([
                'name' => $request->name,
                'lastName' => $request->lastName,
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'crm_id' => $createUser->id,
            ]);
    
            event(new Registered($user));
    
            Auth::login($user);
    
            return redirect(RouteServiceProvider::HOME);
        }

    }
}
