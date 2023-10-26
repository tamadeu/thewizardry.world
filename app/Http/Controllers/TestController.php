<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataModel;

class TestController extends Controller
{
    public function criarArquivoJSON(DataModel $model, Request $request)
    {
        $data = $request->all();

        $array = array();

        $name = substr(md5(uniqid('', true)), 0, 16);

        $array = array_merge(array("id" => $name), $data);

        $model->post('users/'.$name.'', $array);
    }
    
    public function atualizarArquivoJSON(DataModel $model, Request $request, $id)
    {
        $data = $request->all();

        $name = $id;

        $model->put('users/'.$name.'', $data);
    }

    
    public function lerArquivoJSON(DataModel $model, $id = null)
    {
        if(is_null($id)) {

        } else {
            $dados = $model->get('users/'.$id);

            return response()->json($dados);
        }
    }

    public function allUsers(DataModel $model){
        $schools = $model->getAll('schools');
        $country = 'England';
    
        $foundItem = array_filter(json_decode($schools), function ($item) use ($country) {
            return $item->country === $country;
        });
    
        if (!empty($foundItem)) {
            $foundItem = array_values($foundItem); // Re-index the array
            $randomKey = array_rand($foundItem);
            $school = $foundItem[$randomKey];
            return response()->json($school);
        } else {
            return response()->json(null); // No matching schools found
        }
        
    }

    public function specificUser(DataModel $model, $username) {
        $users = $model->getAll('users');
    
        $foundItem = array_filter(json_decode($users), function ($item) use ($username) {
            return $item->username === $username;
        });
    
        if (!empty($foundItem)) {
            $firstMatch = reset($foundItem);
            return response()->json($firstMatch);
        } else {
            return response()->json(null); // No matching user found
        }
    }

    public function school(DataModel $model, $id){
        $students = $model->getAll('students');

        $foundStudents = array_filter(json_decode($students), function ($item) use ($id) {
            return $item->schoolId === $id;
        });

        $firstMatchStudents = array_values($foundStudents);

        return response()->json($firstMatchStudents);
    }
}
