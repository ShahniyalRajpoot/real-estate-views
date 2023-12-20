<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
class LoginController extends Controller
{
    public function login(Request $request){

        $inputData = $request->only('email','password');
        $response  = Http::post('http://127.0.0.1:8000/api/login',$inputData);
            if($response->successful()){
                $data = $response->json();
                if($data['success'] == true && $data['status'] == 200 ){
                    session()->put($data);
                    return redirect()->route('go-home');
                }else{
                    $res = ['msg' => "Please Enter Correct Email and Password" ,'type' => 'danger'];
                    session()->put($res);
                    return redirect()->route('login-route');
                }
            }


    }

    public function home(){
        return view('dashboard.dashboard');
    }

}
