<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\DataModel;

class AdminController extends Controller
{
    public function index(DataModel $model){

        $users = $model->getAll('users');

        return view('admin/index', [
            'users'=> json_decode($users),
            'activeMenu' => 'dashboard'
        ]);
    }

    public function students(DataModel $model){

        $users = $model->getAll('users');

        return view('admin/students/index', [
            'students'=> json_decode($users),
            'activeMenu' => 'users'
        ]);
    }

    public function viewStudent($id, DataModel $model){

        $student = $model->get('users/'.$id);

        $words = explode(" ", $student->name); // Split the string into words

        $initials = '';
        foreach ($words as $word) {
            $initials .= $word[0]; // Get the first letter of each word and append it to the initials string
        }

        return view('admin/students/view', [
            'student'=> $student,
            'initials' => $initials,
            'activeMenu' => 'users'
        ]);
    }

    public function updateStudent(DataModel $model, Request $request){

        $data = $request->all();

        $body = array(
            'firstName' => $data['firstName'],
            'lastName' => $data['lastName'],
            'name' => $data['firstName'] . ' ' . $data['lastName'],
            'email' => $data['email'],
            'username' => $data['username'],
            'dateOfBirth' => $data['dateOfBirth'],
            'country' => $data['country'],
            'type' => $data['type'],
        );

        $user = $model->get('users/'.$data['id']);

        if($user->type != $data['type'] || $user->username != $data['username'] || $user->email != $data['email']){
            $dbUser = User::where('crm_id', $data['id'])->first();
            $dbUser->type = ($data['type'] == "admin") ? 1 : 2;
            $dbUser->username = $data['username'];
            $dbUser->email = $data['email'];
            $dbUser->save();
        }

        $model->put('users/'. $data['id'], $body);

        return redirect('wwadmin/students/'.$data['id']);

    }

    public function schools(DataModel $model){

        $schools = $model->getAll('schools');

        return view('admin/schools/index', [
            'schools'=> json_decode($schools),
            'activeMenu' => 'schools'
        ]);
    }

    public function viewSchool($id, DataModel $model){

        $school = $model->get('schools/'.$id);

        $students = $model->getAll('users');
        $houses = $model->getAll('houses');


        $foundStudents = array_filter(json_decode($students), function ($item) use ($id) {
            return $item->schoolId === $id;
        });

        $firstMatchStudents = array_values($foundStudents);

        $foundHouses = array_filter(json_decode($houses), function ($item) use ($id) {
            return $item->schoolId === $id;
        });

        $firstMatchHouses = array_values($foundHouses);
        

        return view('admin/schools/view', [
            'school'=> $school,
            'houses' => $firstMatchHouses,
            'students' => $firstMatchStudents,
            'activeMenu' => 'schools'
        ]);
    }

    public function deleteSchool($id, Request $request, DataModel $model){
        $model->del('schools/'. $id);
        return redirect('wwadmin/schools');
    }

    public function addSchool(Request $request, DataModel $model){

        $data = array(
            "name" => $request->input('name'),
            "description" => null,
            "country" => $request->input('country'),
            "mottoEnglish" => null,
            "mottoLatin" => null,
            "slug" => null
        );

        $newSchool = $model->post('schools/', $data);
        $schoolId = $newSchool['id'];

        return redirect('wwadmin/schools/'.$schoolId);
    }

    public function updateSchool(Request $request, DataModel $model){
        $data = array(
            "name" => $request->input("name"),
            "country" => $request->input("country"),
            "mottoLatin" => $request->input("mottoLatin"),
            "mottoEnglish" => $request->input("mottoEnglish"),
        );

        $model->put('schools/'.$request->input('schoolId'), $data);

        return redirect('wwadmin/schools/'.$request->input('schoolId'));
    }

    public function addHouse(Request $request, DataModel $model){

        $data = array(
            "name" => $request->input('name'),
            "description" => null,
            "story" => $request->input('story'),
            "slug" => null,
            "schoolId" => $request->input('schoolId'),
            "schoolName" => $request->input('schoolName'),
            "foundingWizardName" => $request->input('foundingWizard')
        );

        $model->post('houses/', $data);

        return redirect('wwadmin/schools/'.$request->input('schoolId').'#houses');
    }

    public function deleteHouse($school_id, $house_id, Request $request, DataModel $model){
        $model->del('houses/'. $house_id);
        return redirect('wwadmin/schools/'.$school_id.'#houses');
    }

    public function quiz(DataModel $model){

        $quiz = $model->getAll('quiz');
        $schools = $model->getAll('schools');

        return view('admin/quiz/index', [
            'quizzes'=> json_decode($quiz),
            'activeMenu' => 'quiz',
            'schools' => json_decode($schools),
        ]);
    }

    public function editQuiz($id, DataModel $model){

        $quiz = $model->get('quiz/'.$id);
        $schools = $model->getAll('schools');

        return view('admin/quiz/view', [
            'quiz'=> $quiz,
            'schools' => json_decode($schools),
            'activeMenu' => 'quiz'
        ]);
    }

    public function editQuestions($quiz_id, $id, DataModel $model){

        $quiz = $model->get('quiz/'.$quiz_id);

        $houses = $model->getAll('houses');

        return view('admin/quiz/answers/index', [
            'quiz' => $quiz,
            'question' => $quiz->questions[$id],
            'questionId' => $id,
            'answers' => $quiz->questions[$id]->answers,
            'activeMenu' => 'quiz',
            'houses' => json_decode($houses)
        ]);
    }

    public function editAnswer($quiz_id, $question_id, $id, DataModel $model){

        $quiz = $model->get('quiz/'.$quiz_id);

        $houses = $model->getAll('houses');

        return view('admin/quiz/edit_answer', [
            'quiz' => $quiz,
            'question' => $question_id,
            'answer' => $quiz->questions[$question_id]->answers[$id],
            'answerId' => $id,
            'activeMenu' => 'quiz',
            'houses' => json_decode($houses)
        ]);
    }

    public function newQuiz(DataModel $model){

        $schools = $model->getAll('schools');

        return view('admin/quiz/add_quiz', [
            'activeMenu' => 'quiz',
            'schools' => json_decode($schools)
        ]);
    }

    public function newAnswer($quiz_id, $question_id, DataModel $model){

        $quiz = $model->get('quiz/'.$quiz_id);
        $houses = $model->getAll('houses');

        return view('admin/quiz/add_answer', [
            'quiz' => $quiz,
            'question' => $question_id,
            'activeMenu' => 'quiz',
            'houses' => json_decode($houses)
        ]);
    }

    public function newQuestion($quiz_id, DataModel $model){

        $quiz = $model->get('quiz/'.$quiz_id);

        return view('admin/quiz/add_question', [
            'quiz' => $quiz,
            'activeMenu' => 'quiz'
        ]);
    }

    public function addQuiz(Request $request, DataModel $model)
    {
        $school = $request->input('school');
        $schoolName = $model->get('schools/'. $school)->name;

        $data = array(
            "schoolId" => $school,
            "schoolName" => $schoolName,
            "questions" => array()
        );

        $newQuiz = $model->post('quiz/', $data);

        $quizId = $newQuiz['id'];

        return redirect('wwadmin/quiz/'.$quizId.'');
        
    }

    public function addQuestion(Request $request, DataModel $model)
    {
        $quizId = $request->input('quizId');
        $newAnswerText = $request->input('question');
    
        // Fetch the quiz from your JSON file or database
        $quiz = $model->getAll('quiz');
    
        // Find the specific quiz based on the given `quizId`
        $foundItem = array_filter(json_decode($quiz), function ($item) use ($quizId) {
            return $item->id === $quizId;
        });
    
        if (!empty($foundItem)) {
            $firstMatch = reset($foundItem);
    
            // Check if the given question exists
            if (isset($firstMatch)) {
                // Create a new answer object
                $newAnswer = new \stdClass();
                $newAnswer->question = $newAnswerText;
                $newAnswer->answers = array();
    
                // Add the new answer to the question's answers array
                $firstMatch->questions[] = $newAnswer;
        
                // Save the modified quiz back to your JSON file or database
                $model->put('quiz/' . $quizId, $firstMatch);
                    
                // Optionally return a success message or handle as needed
                return redirect('wwadmin/quiz/'.$quizId.'#questions');

            } else {
                // Handle error: Question not found
                return response()->json(['error' => 'Quiz not found'], 404);
            }
        } else {
            // Handle error: Quiz not found
            return response()->json(['error' => 'Quiz not found'], 404);
        }
    }

    public function addAnswer(Request $request, DataModel $model)
    {
        $quizId = $request->input('quizId');
        $questionId = $request->input('questionId');
        $newAnswerText = $request->input('answer');
        $house = $request->input('house');
        $houseName = $model->get('houses/'. $house)->name;
    
        // Fetch the quiz from your JSON file or database
        $quiz = $model->getAll('quiz');
    
        // Find the specific quiz based on the given `quizId`
        $foundItem = array_filter(json_decode($quiz), function ($item) use ($quizId) {
            return $item->id === $quizId;
        });
    
        if (!empty($foundItem)) {
            $firstMatch = reset($foundItem);
    
            // Check if the given question exists
            if (isset($firstMatch->questions[$questionId])) {
                // Create a new answer object
                $newAnswer = new \stdClass();
                $newAnswer->answer = $newAnswerText;
                $newAnswer->houseId = $house;
                $newAnswer->houseName = $houseName;
    
                // Add the new answer to the question's answers array
                $firstMatch->questions[$questionId]->answers[] = $newAnswer;
    
                // Update the 'modifiedAt' field (if needed)
                $firstMatch->modifiedAt = date('Y-m-d H:i:s');
    
                // Save the modified quiz back to your JSON file or database
                $model->put('quiz/' . $quizId, $firstMatch);
    
                // Optionally return a success message or handle as needed
                return redirect('wwadmin/quiz/'.$quizId.'/'.$questionId.'#answers');
            } else {
                // Handle error: Question not found
                return response()->json(['error' => 'Question not found'], 404);
            }
        } else {
            // Handle error: Quiz not found
            return response()->json(['error' => 'Quiz not found'], 404);
        }
    }

    public function updateQuiz(Request $request, DataModel $model){
        $quizId = $request->input('id');
        $schoolId = $request->input('school');
        $school = $model->get('schools/'.$schoolId);
        $schoolName = $school->name;

        $data = array(
            "schoolId" => $schoolId,
            "schoolName" => $schoolName
        );

        $model->put('quiz/'. $quizId, $data);

        return redirect('wwadmin/quiz/'.$quizId.'');
    }
    

    public function updateAnswer(Request $request, DataModel $model)
    {
        $quizId = $request->input('quizId');
        $questionId = $request->input('questionId');
        $answerId = $request->input('answerId');
        $newAnswerText = $request->input('answer');
        $house = $request->input('house');
        $houseName = $model->get('houses/'. $house)->name;

        // Fetch the quiz from your JSON file or database
        $quiz = $model->getAll('quiz');
    
        // Find the specific quiz based on the given `quizId`
        $foundItem = array_filter(json_decode($quiz), function ($item) use ($quizId) {
            return $item->id === $quizId;
        });
    
        if (!empty($foundItem)) {
            $firstMatch = reset($foundItem);
    
            // Check if the given question and answer exist
            if (isset($firstMatch->questions[$questionId]) &&
                isset($firstMatch->questions[$questionId]->answers[$answerId])) {
    
                // Update the answer text
                $firstMatch->questions[$questionId]->answers[$answerId]->answer = $newAnswerText;
                $firstMatch->questions[$questionId]->answers[$answerId]->houseId = $house;
                $firstMatch->questions[$questionId]->answers[$answerId]->houseName = $houseName;

                // Save the modified quiz back to your JSON file or database
                $model->put('quiz/' . $quizId, $firstMatch);
    
                // Return the updated answer
                return redirect('wwadmin/quiz/'.$quizId.'/'.$questionId.'#answers');
            } else {
                // Handle error: Question or answer not found
            }
        } else {
            // Handle error: Quiz not found
        }
    }

    public function updateQuestion(Request $request, DataModel $model)
    {
        $quizId = $request->input('quizId');
        $questionId = $request->input('questionId');
        $newQuestion = $request->input('question');

        // Fetch the quiz from your JSON file or database
        $quiz = $model->getAll('quiz');
    
        // Find the specific quiz based on the given `quizId`
        $foundItem = array_filter(json_decode($quiz), function ($item) use ($quizId) {
            return $item->id === $quizId;
        });
    
        if (!empty($foundItem)) {
            $firstMatch = reset($foundItem);
    
            // Check if the given question and answer exist
            if (isset($firstMatch->questions[$questionId])) {
    
                // Update the answer text
                $firstMatch->questions[$questionId]->question = $newQuestion;

                // Save the modified quiz back to your JSON file or database
                $model->put('quiz/' . $quizId, $firstMatch);
    
                // Return the updated answer
                return redirect('wwadmin/quiz/'.$quizId.'/'.$questionId.'');
            } else {
                // Handle error: Question or answer not found
            }
        } else {
            // Handle error: Quiz not found
        }
    }

    public function deleteQuiz($id, Request $request, DataModel $model){
        $model->del('quiz/'. $id);
        return redirect('wwadmin/quiz');
    }

    public function deleteAnswer($quizId, $questionId, $answerId, Request $request, DataModel $model)
    {
        // Fetch the quiz from your JSON file or database
        $quiz = $model->getAll('quiz');

        // Find the specific quiz based on the given `quizId`
        $foundItem = array_filter(json_decode($quiz), function ($item) use ($quizId) {
            return $item->id === $quizId;
        });

        if (!empty($foundItem)) {
            $firstMatch = reset($foundItem);

            // Check if the given question and answer exist
            if (isset($firstMatch->questions[$questionId]) &&
                isset($firstMatch->questions[$questionId]->answers[$answerId])) {

                // Delete the answer from the array
                unset($firstMatch->questions[$questionId]->answers[$answerId]);

                // Reindex the array to fill the gap left by the removed item
                $firstMatch->questions[$questionId]->answers = array_values($firstMatch->questions[$questionId]->answers);

                // Save the modified quiz back to your JSON file or database
                $model->put('quiz/' . $quizId, $firstMatch);

                // Optionally return a success message or handle as needed
                return redirect('wwadmin/quiz/'.$quizId.'/'.$questionId.'#answers');
            } else {
                // Handle error: Question or answer not found
                return response()->json(['error' => 'Question or answer not found'], 404);
            }
        } else {
            // Handle error: Quiz not found
            return response()->json(['error' => 'Quiz not found'], 404);
        }
    }

    public function deleteQuestion($quizId, $questionId, Request $request, DataModel $model)
    {
        // Fetch the quiz from your JSON file or database
        $quiz = $model->getAll('quiz');

        // Find the specific quiz based on the given `quizId`
        $foundItem = array_filter(json_decode($quiz), function ($item) use ($quizId) {
            return $item->id === $quizId;
        });

        if (!empty($foundItem)) {
            $firstMatch = reset($foundItem);

            // Check if the given question and answer exist
            if (isset($firstMatch->questions[$questionId])) {

                // Delete the answer from the array
                unset($firstMatch->questions[$questionId]);

                // Reindex the array to fill the gap left by the removed item
                $firstMatch->questions = array_values($firstMatch->questions);

                // Save the modified quiz back to your JSON file or database
                $model->put('quiz/' . $quizId, $firstMatch);

                // Optionally return a success message or handle as needed
                return redirect('wwadmin/quiz/'.$quizId.'#questions');
            } else {
                // Handle error: Question or answer not found
                return response()->json(['error' => 'Question or answer not found'], 404);
            }
        } else {
            // Handle error: Quiz not found
            return response()->json(['error' => 'Quiz not found'], 404);
        }
    }

    public function settings(DataModel $model){

        $users = $model->getAll('users');

        return view('admin/settings/index', [
            'users'=> json_decode($users),
            'activeMenu' => 'dashboard'
        ]);
    }
    
}
