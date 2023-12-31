<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\DataModel;
use App\Models\Crm;
use Illuminate\Support\Facades\Auth;

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
        $users = $model->getAll('users');

        return response()->json(json_decode($users));
        
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

    public function levels(){
        function pointsToNextLevel($currentLevel, $currentPoints){
            $model = new DataModel();
            $levels = json_decode($model->getAll('levels'));

            $targetName = $currentLevel + 1; // Próximo "name" que você deseja alcançar
            $pointsNeeded = 0;
            
            foreach ($levels as $item) {
                if ($item->name > $currentLevel && $item->name <= $targetName) {
                    $pointsNeeded += $item->points;
                    if ($item->name == $targetName) {
                        break; // Saia do loop quando atingir o "name" desejado
                    }
                }
            }
            
            $pointsNeeded -= $currentPoints;

            return $pointsNeeded;
        }
        
        $points = pointsToNextLevel(1, 10);
        
        echo "Faltam $points pontos para atingir próximo nível";

    }

    public function testBlade(User $user){

        $user = $user->crmUser();

        return view('test', [
            "user"=> $user,
            "activeMenu" => "home",
            "test" => $user
        ]);
    }
}
