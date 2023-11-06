<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class Crm extends Model
{
    public function get($endpoint, $filter = null){
        if($filter == null){
            $filter = '';
        }

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://admin.thewizardry.world/api/v1/'.$endpoint.$filter,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_2_0,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Authorization: Basic '.env('CRM_TOKEN').'='
        ),
        ));

        $response = curl_exec($curl);

        return json_decode($response);
    }

    public function post($endpoint, $body)
    {
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Basic '.env('CRM_TOKEN').'',
        ])
        ->post('https://admin.thewizardry.world/api/v1/'.$endpoint, $body);

        $response->status();
    
        return json_decode($response);
    }

    public function put($endpoint, $id, $body)
    {
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Basic '.env('CRM_TOKEN').''
        ])
        ->put('https://admin.thewizardry.world/api/v1/'.$endpoint.'/'.$id, $body);

        return json_decode($response);
    }

    public function del($endpoint, $id)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Basic '.env('CRM_TOKEN').''
        ])
        ->delete('https://admin.thewizardry.world/api/v1/'.$endpoint.'/'.$id);
    
        return json_decode($response);
    }

}
