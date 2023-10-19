<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CrmController;
use Illuminate\Support\Facades\File;

class QuizController extends Controller
{
    public function index(Request $request, CrmController $crm){
        $user = $request->session()->get('user');

        if($user->houseId == null){

            $questions = $crm->get('QuizzQuestion');
            $answers = $crm->get('QuizzAnswer');


            return view('quiz/index', [
                'questions' => $questions,
                'answers' => $answers,
                'user' => $user
            ]);
        } else {
            return redirect('/');
        }
    }

    public function sendQuiz(Request $request, CrmController $crm){
        $user = $request->session()->get('user');
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

        $updateUser = $crm->put('Student', $user->id, $data);

        $request->session()->put('user', $updateUser);

        return redirect('/resultQuiz');
    }

    public function result(Request $request, CrmController $crm){
        $user = $request->session()->get('user');
        $house = $crm->get('House/', $user->houseId);

        return view('quiz/result', [
            'user' => $user,
            'house' => $house
        ]);
    }
}
