<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Http\Controllers\CrmController;
use App\Models\DataModel;

class ProfileController extends Controller
{
    public function timeline(Request $request, $username, CrmController $crm, DataModel $model){
        $userId = Auth::user()->crm_id;
        $user = $model->get('users/'.$userId);

        $users = $model->getAll('users');

        $foundItem = array_filter(json_decode($users), function ($item) use ($username) {
            return $item->username === $username;
        });


        if (!empty($foundItem)) {
            $firstMatch = reset($foundItem);
            return view('profile/index', [
                'profile'=> $firstMatch,
                'user' => $user,
                'activeMenu' => ''
            ]);
        } else {
            // Element with the specified id was not found
            echo "Element not found";
        }

    }
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
