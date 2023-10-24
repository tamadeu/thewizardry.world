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
use App\Models\DataModel;

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
    public function store(Request $request, DataModel $model): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:20', 'unique:'.User::class],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $schools = $model->getAll('schools');

        $country = $request->country;

        $foundItem = array_filter(json_decode($schools), function ($item) use ($country) {
            return $item->country === $country;
        });

        $foundItem = array_values($foundItem);
        
        $randomKey = array_rand($foundItem);
        $school = $foundItem[$randomKey];

        $id = substr(md5(uniqid('', true)), 0, 16);

        $body = [
            "id" => $id,
            "firstName" => $request->name,
            "lastName" => $request->lastName,
            "email" => $request->email,
            "username" => $request->username,
            "name" => $request->name . ' ' . $request->lastName,
            "pictureUrl" => "placeholder.png",
            "schoolId" => $school->id,
            "schoolName" => $school->name,
            "country" => $request->country
        ];

        $user = User::create([
            'name' => $request->name,
            'lastName' => $request->lastName,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'crm_id' => $id,
        ]);

        $model->post('users/'.$id.'', $body);


        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
        

    }
}
