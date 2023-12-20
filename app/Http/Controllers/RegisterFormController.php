<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class RegisterFormController extends Controller
{
    public function registration(Request $request){
        $inputData = $request->all();
        $response = Http::post('http://real-estate-apis.test/api/register',$inputData);
        dd($response->json());



//        $client = new Client();
//        $response = $client->post('http://real-estate-apis.test/api/register',$inputData);
//        $statusCode = $response->getStatusCode();
//        $responseData = json_decode($response->getBody(), true);
        // Process the response data

    }
}
