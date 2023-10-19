<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class CrmController extends Controller
{
    public function get($endpoint, $filter = null){
        if($filter == null){
            $filter = '';
        }

        $response = Http::withHeaders([
            'Authorization' => 'Basic '.env('CRM_TOKEN').'',
        ])
        ->get('https://admin.thewizardry.world/api/v1/'.$endpoint.$filter);

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

    public function delete($endpoint, $id)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Basic '.env('CRM_TOKEN').''
        ])
        ->delete('https://admin.thewizardry.world/api/v1/'.$endpoint.'/'.$id);
    
        return json_decode($response);
    }
}
