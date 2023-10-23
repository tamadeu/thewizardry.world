<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class DataModel extends Model
{
    public function getStoragePath()
    {
        return storage_path('data/');
    }

    public function post($nome, $dados)
    {
        $caminho = $this->getStoragePath() . $nome . '.json';

        $array = array();

        $array = array_merge(
            $dados,
            array(
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            )
        );

        file_put_contents($caminho, json_encode($array, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
    }

    public function put($nome, $payload)
    {
        $caminho = $this->getStoragePath() . $nome . '.json';
    
        // Read the existing JSON data
        $jsonData = json_decode(file_get_contents($caminho), true);
    
        // Ensure the payload is an array
        if (!is_array($payload)) {
            // Handle invalid payload here, e.g., return an error
        }
    
        // Update the fields specified in the payload
        foreach ($payload as $key => $value) {
            if (array_key_exists($key, $jsonData)) {
                $jsonData[$key] = $value;
            }
        }
    
        // Update the 'updated_at' field
        $jsonData['updated_at'] = date('Y-m-d H:i:s');
    
        // Write the updated JSON data back to the file
        file_put_contents($caminho, json_encode($jsonData, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
    }

    public function get($nome)
    {
        $caminho = $this->getStoragePath() . $nome . '.json';
        if (file_exists($caminho)) {
            return json_decode(file_get_contents($caminho));
        }
        return null;
    }

    public function getAll($endpoint){
        $directory = $this->getStoragePath() . '/'. $endpoint;

        // Array para armazenar os dados dos arquivos JSON
        $userData = array();

        // Verifica se o diretório existe
        if (is_dir($directory)) {
            // Abre o diretório
            if ($dh = opendir($directory)) {
                // Loop para ler cada arquivo no diretório
                while (($file = readdir($dh)) !== false) {
                    // Verifica se o arquivo é um arquivo JSON
                    if (pathinfo($file, PATHINFO_EXTENSION) === 'json') {
                        // Lê o conteúdo do arquivo JSON
                        $jsonContent = file_get_contents($directory . '/' . $file);
                        // Decodifica o JSON e adiciona ao array de dados
                        $userData[] = json_decode($jsonContent);
                    }
                }
                // Fecha o diretório
                closedir($dh);
            }
        }

        // Converte o array de dados em JSON
        $responseJSON = json_encode($userData);

        return $responseJSON;
    }

}
