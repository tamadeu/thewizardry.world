<?php

namespace App\Http\Controllers;

use App\Models\Crm;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\CrmController;
use Illuminate\Support\Facades\File;
use App\Models\DataModel;

class QuizController extends Controller
{
    public function index(Request $request, Crm $crm, DataModel $model){

        $userId = Auth::user()->crm_id;
    
        $user = $crm->get('Student/' . $userId);
    

        if($user->houseId == null){
            $quizzes = $model->getAll('quiz');

            $schoolId = $user->schoolId;

            $foundItem = array_filter(json_decode($quizzes), function ($item) use ($schoolId) {
                return $item->schoolId === $schoolId;
            });

            if (!empty($foundItem)) {
                $firstMatch = reset($foundItem);

                $questions = $firstMatch->questions;
                $answers = $crm->get('QuizzAnswer');


                return view('quiz/index', [
                    'test' => $questions,
                    'questions' => $questions,
                    'answers' => $answers,
                    'activeMenu' => ''
                ]);
            } else {
                echo $quizzes;
            }

        } else {
            return redirect('/');
        }
    }

    public function sendQuiz(Request $request, DataModel $model){
        $user = $model->get('users/'.Auth::user()->crm_id);
        $data = $request->all();
    
        // Convert the data array to JSON format
        $jsonData = json_encode($data);
    
        // Decode the JSON data back to an array
        $dataArr = json_decode($jsonData, true);

        // Count the frequency of each word
        $wordCounts = array_count_values($dataArr);

        // Sort the word counts in descending order
        $houseId = array_search(max($wordCounts), $wordCounts);
    
        $data = [
            "houseId" => $houseId
        ];

       $model->put('users/'.$user->id, $data);

        return redirect('/resultQuiz');
    }

    public function result(Crm $crm, User $user){
        $user = $user->crmUser();
        $house = $crm->get('House/'.$user->houseId);

        return view('quiz/result', [
            'house' => $house,
            'activeMenu' => ''
        ]);
    }
}
