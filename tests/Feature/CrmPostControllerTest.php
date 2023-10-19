<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class CrmPostControllerTest extends TestCase
{
    public function testPostMethod()
    {

    // Simulate the HTTP request
    $response = Http::withHeaders([
        'Content-Type' => 'application/json',
        'Authorization' => 'Basic aW50ZWdyYXRpb25zOmQ3OHdzd1RZU1U='
    ])
    ->post('https://admin.thewizardry.world/api/v1/Student', [
        'firstName' => 'Talles',
        'lastName' => 'Amadeu',
        'email' => 'tamadeu@hotmail.com',
        'username' => 'tamadeu',
    ]);

    // Assertions to check the response
    $response->assertStatus(200); // Assert the HTTP status code
    $response->assertJson(['expected_response_data']); // Assert the JSON response

    }
}
