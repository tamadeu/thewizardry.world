<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Crm;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\DataModel;

class ProfileController extends Controller
{
    public function timeline($username, User $user, Crm $crm){
        $user = $user->crmUser();

        $profile = $crm->get('Student','?where[0][type]=equals&where[0][field]=username&where[0][value]='.$username);

        $friendRequest = $crm->get("FriendRequest?where[0][type]=and&where[0][value][0][type]=equals&where[0][value][0][field]=inviterId&where[0][value][0][value]=".$user->id."&where[0][value][1][type]=equals&where[0][value][1][field]=inviteeId&where[0][value][1][value]=".$profile->list[0]->id."");

        $friends = $crm->get("Student/".$profile->list[0]->id."/friends");

        $isFriend = $crm->get("Student/".$profile->list[0]->id."/friends?where[0][type]=equals&where[0][field]=id&where[0][value]=".$user->id."");

        if($profile->total > 0) {
            return view('profile/index', [
                'profile'=> $profile->list[0],
                'friendRequest' => $friendRequest,
                'friends' => $friends,
                'isFriend' => $isFriend,
                'user' => $user,
                'activeMenu' => ''
            ]);
        } else {
            // Element with the specified id was not found
            return view('profile/error', [
                'user' => $user,
                'activeMenu' => ''
            ]);
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
