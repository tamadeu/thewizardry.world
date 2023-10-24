<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\CrmController;
use Illuminate\Support\Facades\File;
use App\Models\DataModel;

class QuizController extends Controller
{
    public function index(Request $request, CrmController $crm, DataModel $model){

        $user = $model->get('users/'.Auth::user()->crm_id);

        $houseId = Auth::user()->houseId;

        if($houseId == null){

            $questions = $crm->get('QuizzQuestion');
            $answers = $crm->get('QuizzAnswer');


            return view('quiz/index', [
                'questions' => $questions,
                'answers' => $answers,
                'user' => $user,
                'activeMenu' => ''
            ]);
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

    public function result(Request $request, DataModel $model){
        $user = $model->get('users/'.Auth::user()->crm_id);
        $house = $model->get('houses/'.$user->houseId);

        return view('quiz/result', [
            'user' => $user,
            'house' => $house
        ]);
    }
}
