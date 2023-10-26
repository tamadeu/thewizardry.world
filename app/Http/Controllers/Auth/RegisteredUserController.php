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

        $currentYear = date('Y');
        $currentMonth = date('m');
        $words = explode(" ", $school->name); // Split the string into words

        $initials = '';
        foreach ($words as $word) {
            $initials .= $word[0]; // Get the first letter of each word and append it to the initials string
        }

        $user = User::create([
            'name' => $request->name,
            'lastName' => $request->lastName,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'type' => 2
        ]);

        event(new Registered($user));

        $studentCode = $initials.$currentYear.$currentMonth.$user->id;

        $body = [
            "firstName" => $request->name,
            "lastName" => $request->lastName,
            "email" => $request->email,
            "username" => $request->username,
            "name" => $request->name . ' ' . $request->lastName,
            "pictureUrl" => "placeholder.png",
            "schoolId" => $school->id,
            "schoolName" => $school->name,
            "country" => $request->country,
            "dateOfBirth" => null,
            "studentCode" => $studentCode,
            "houseId" => null,
            "houseName" => null,
            "type" => "regular",
            "level" => 1
        ];

        $newUser = $model->post('users/', $body);

        $user->crm_id = $newUser['id'];
        $user->save();


        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
        

    }
}
