<?php

namespace App\Http\Controllers;

use App\Models\Crm;
use App\Models\User;
use Illuminate\Http\Request;

class NewsfeedController extends Controller
{
    public function index(User $user, Crm $crm){
        $user = $user->crmUser();

        $users = $crm->get('Student');

        $posts = $crm->get("Post");
        $reactions = $crm->get("Reaction");
        $reactionTypes = $crm->get("ReactionType?orderBy=createdAt&order=asc");


            return view('newsfeed', [
                'posts' => $posts,
                'user' => $user,
                'reactions' => $reactions,
                'reactionTypes' => $reactionTypes,
                'users' => $users->list,
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

        return redirect()->back()->with('success', 'Post created succesfully');
    }

    public function deleteContent(Request $request, User $user, Crm $crm){
        $user = $user->crmUser();

        $post = $crm->del("Post", $request->id);

        return redirect()->back()->with('success', 'Your post was deleted succesfully');
    }

    public function react(Request $request, User $user, Crm $crm){
        $user = $user->crmUser();
        $userId = $user->id;
        $reactionTypeId = $request->reactionTypeId;

        $data = array(
            'reactionTypeId' => $request->input('reactionTypeId'),
            'postId' => $request->input('postId'),
            'givingUserId' => $user->id,
            'receivingUserId' => $request->input('receivingUser')
        );

        $existingPostReactions = $crm->get('Post/'.$request->input('postId').'/reactions');

        if($existingPostReactions->total > 0){
            $sameReactionFound = array_filter($existingPostReactions->list, function ($item) use($userId, $reactionTypeId) {
                return $item->givingUserId === $userId && $item->reactionTypeId === $reactionTypeId;
            });
    
            if (!empty($sameReactionFound)) {
                $sameReaction = reset($sameReactionFound);
                $response = $crm->del('Reaction', $sameReaction->id);
                return response()->json(['message' => 'Post unliked succesfully']); 
            }

            $foundReactionDiffType = array_filter($existingPostReactions->list, function ($item) use($userId, $reactionTypeId) {
                return $item->givingUserId === $userId && $item->reactionTypeId !== $reactionTypeId;
            });
    
            if (!empty($foundReactionDiffType)) {
                $sameReaction = reset($foundReactionDiffType);
                $crm->del('Reaction', $sameReaction->id);
                $crm->post("Reaction", $data);

                return response()->json(['message' => 'Post updated successfully']);   
            }

            $newReaction = array_filter($existingPostReactions->list, function ($item) use($userId, $reactionTypeId) {
                return $item->givingUserId !== $userId && $item->reactionTypeId !== $reactionTypeId;
            });
    
            if (!empty($newReaction)) {
                $crm->post("Reaction", $data);

                return response()->json(['message' => 'Post liked successfully']);    
            }

        } else {
            $crm->post("Reaction", $data);

            return response()->json(['message' => 'Post liked successfully']);    
        }

    }

    public function sendFriendRequest(Request $request, User $user, Crm $crm){
        $user = $user->crmUser();
        $data = $request->all();

        $data = array(
            "inviteeId" => $request->input('inviteeId'),
            "inviterId" => $user->id,
            "status" => "Pending"
        );

        $crm->post("FriendRequest", $data);

        return response()->json(['message' => 'Friend request sent successfully']);  
    }


}
