<?php

namespace App\Http\Controllers;

use App\Models\Crm;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AccountController extends Controller
{
    public function profile_info(User $user){
        $user = $user->crmUser();
        return view('account/profile_info',[
            'user'=> $user,
            'activeMenu' => 'profile_info'
        ]);
    }

    public function profile_social(User $user){
        $user = $user->crmUser();
        return view('account/profile_social',[
            'user'=> $user,
            'activeMenu' => 'profile_social'
        ]);
    }

    public function profile_notifications(User $user){
        $user = $user->crmUser();
        return view('account/profile_notifications',[
            'user'=> $user,
            'activeMenu' => 'profile_notifications'
        ]);
    }

    public function profile_messages(User $user){
        $user = $user->crmUser();
        return view('account/profile_messages',[
            'user'=> $user,
            'activeMenu' => 'profile_messages'
        ]);
    }

    public function profile_requests(User $user, Crm $crm){
        $user = $user->crmUser();

        $requestsReceived = $crm->get("Student/".$user->id."/friendRequests1?where[0][type]=equals&where[0][field]=status&where[0][value]=Pending");

        return view('account/profile_requests',[
            'user'=> $user,
            'requestsReceived' => $requestsReceived,
            'activeMenu' => 'profile_requests'
        ]);
    }

    public function acceptRequest(Request $request, User $user, Crm $crm){
        $user = $user->crmUser();

        $data = array(
            "id" => $request->input('friendId'),
        );

        $data2 = array(
            "id" => $user->id
        );

        $data3 = array(
            "status" => "Accepted"
        );

        $crm->post("Student/".$user->id."/friends", $data);

        $crm->post("Student/".$request->input('friendId')."/friends", $data2);

        $crm->put("FriendRequest", $request->input("requestId"), $data3);

        return redirect()->back()->with('success', 'Request accepted succesfully');
    }

    public function account_info(User $user){
        $user = $user->crmUser();
        return view('account/account_info',[
            'user'=> $user,
            'activeMenu' => 'account_info'
        ]);
    }

    public function account_password(User $user){
        $user = $user->crmUser();
        return view('account/account_password',[
            'user'=> $user,
            'activeMenu' => 'account_password'
        ]);
    }

    public function account_settings(User $user){
        $user = $user->crmUser();
        return view('account/account_settings',[
            'user'=> $user,
            'activeMenu' => 'account_settings'
        ]);
    }

    public function groups_manage(User $user){
        $user = $user->crmUser();
        return view('account/groups_manage',[
            'user'=> $user,
            'activeMenu' => 'groups_manage'
        ]);
    }

    public function groups_invitations(User $user){
        $user = $user->crmUser();
        return view('account/groups_invitations',[
            'user'=> $user,
            'activeMenu' => 'groups_invitations'
        ]);
    }

    public function store_account(User $user){
        $user = $user->crmUser();
        return view('account/store_account',[
            'user'=> $user,
            'activeMenu' => 'store_account'
        ]);
    }

    public function store_statement(User $user){
        $user = $user->crmUser();
        return view('account/store_statement',[
            'user'=> $user,
            'activeMenu' => 'store_statement'
        ]);
    }

    public function store_items(User $user){
        $user = $user->crmUser();
        return view('account/store_items',[
            'user'=> $user,
            'activeMenu' => 'store_items'
        ]);
    }

    public function store_downloads(User $user){
        $user = $user->crmUser();
        return view('account/store_downloads',[
            'user'=> $user,
            'activeMenu' => 'store_downloads'
        ]);
    }

    public function updateAvatar(Request $request, User $user, Crm $crm){
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $user = $user->crmUser();

            if($user->avatar != 'placeholder.png'){
                Storage::delete('public/img/profile/' . $user->avatar);
                $path = $avatar->store('public/img/profile'); 

                $fileName = str_replace('public/img/profile/', '', $path);
        
                $data = array(
                    "avatar" => $fileName,
                );
        
                $crm->put("Student", $user->id, $data);
        
                return redirect()->back()->with('success', 'Avatar uploaded successfully');
        
            } else {
                $path = $avatar->store('public/img/profile'); 

                $fileName = str_replace('public/img/profile/', '', $path);
        
                $data = array(
                    "avatar" => $fileName,
                );
        
                $crm->put("Student", $user->id, $data);
        
                return redirect()->back()->with('success', 'Avatar uploaded successfully');
        
            }

        }

        // Handle the case where no file was uploaded
        return redirect()->back()->with('error', 'No file was uploaded');
    }

    public function updateCover(Request $request, User $user, Crm $crm){
        if ($request->hasFile('cover')) {
            $cover = $request->file('cover');
            $user = $user->crmUser();

            if($user->cover != 'placeholder.png'){
                Storage::delete('public/img/cover/' . $user->cover);
                $path = $cover->store('public/img/cover'); 

                $fileName = str_replace('public/img/cover/', '', $path);
        
                $data = array(
                    "cover" => $fileName,
                );
        
                $crm->put("Student", $user->id, $data);
        
                return redirect()->back()->with('success', 'Cover uploaded successfully');
        
            } else {
                $path = $cover->store('public/img/cover'); 

                $fileName = str_replace('public/img/cover/', '', $path);
        
                $data = array(
                    "cover" => $fileName,
                );
        
                $crm->put("Student", $user->id, $data);
        
                return redirect()->back()->with('success', 'Cover uploaded successfully');
        
            }

        }

        // Handle the case where no file was uploaded
        return redirect()->back()->with('error', 'No file was uploaded');
    }
}
