<?php

namespace App\Http\Controllers;

use App\Models\Crm;
use App\Models\User;
use Illuminate\Http\Request;

class NewsfeedController extends Controller
{
    public function index(User $user, Crm $crm){
        $user = $user->crmUser();

        $posts = $crm->get("Post");
        $reactions = $crm->get("Reaction");

            return view('newsfeed', [
                'posts' => $posts,
                'user' => $user,
                'reactions' => $reactions,
                'activeMenu' => 'feed'
            ]);
    }

    public function postContent(Request $request, User $user, Crm $crm){
        $user = $user->crmUser();

        $content = $request->input('content');

        $data = array(
            'content' => $content,
            'studentId' => $user->id,
            'type' => 'Text'
        );

        $post = $crm->post("Post", $data);

        return redirect()->back()->with('success', json_encode($post));
    }

    public function react(Request $request, User $user, Crm $crm){
        $user = $user->crmUser();

        $data = array(
            'type' => $request->input('type'),
            'postId' => $request->input('postId'),
            'givingUserId' => $user->id,
            'receivingUserId' => $request->input('receivingUser')
        );

        $crm->post("Reaction", $data);

        return redirect()->back()->with('success', 'Post liked successfully');
    }


}
