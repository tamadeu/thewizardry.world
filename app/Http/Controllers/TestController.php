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
}
