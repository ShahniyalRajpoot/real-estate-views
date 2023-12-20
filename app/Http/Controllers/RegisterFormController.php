<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class RegisterFormController extends Controller
{
    public function registration(Request $request){
        $inputData = $request->all();
        $response  = Http::post('http://127.0.0.1:8000/api/register',$inputData);
//        dd($response->json());
        $data = $response->json();
        if($data['success'] == false && $data['status'] == 201 ){
            $res = ['msg' => "Please Fill Complete Form" ,'type' => 'danger'];
            session()->put($res);
            return redirect()->route('register-route');
        }else{
            $res = ['msg' => "Your Registration Complete" ,'type' => 'success'];
            session()->put($res);
            return redirect()->route('register-route');
        }


    }


}
