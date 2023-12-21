<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
class LoginController extends Controller
{
    public function login(Request $request){
        $ApiDefaulURl = getGlobalConfig('api_url');
        $inputData = $request->only('email','password');
        $url       = $ApiDefaulURl.'/api/login';
        $response  = Http::post($url,$inputData);
            if($response->successful()){
                $data = $response->json();
                if($data['success'] == true && $data['status'] == 200 ){
                    session()->put($data);
                    $token = $data['data']['token'];
                    Cookie::queue('auth_token', $token, 90);
                    return redirect()->route('dashboard-w');
                }else{
                    $res = ['msg' => "Please Enter Correct Email and Password" ,'type' => 'danger'];
                    session()->put($res);
                    return redirect()->route('login-route');
                }
            }

    }

    public function home(Request $request){
        $ApiDefaulURl = getGlobalConfig('api_url');
        $cookieToken  = $request->cookie('auth_token');
        $url       = $ApiDefaulURl.'/api/user';
        $authorizationArray = ['Authorization' =>'Bearer '.$cookieToken];
        $response  = Http::withHeaders($authorizationArray)->get($url);
        $data = $response->json();
        return view('dashboard.dashboard')->with('data', $data);
    }

    public function listingDetail(){
        return view('dashboard.listing-details');
    }

    public function featureListing(){
        return view('dashboard.feature-list');
    }

    public function logout(Request $request){
        $ApiDefaulURl = getGlobalConfig('api_url');
        $cookieToken  = $request->cookie('auth_token');
        $url       = $ApiDefaulURl.'/api/logout';
        $authorizationArray = ['Authorization' =>'Bearer '.$cookieToken];
        $response  = Http::withHeaders($authorizationArray)->get($url);
        if($response->successful()){
            $data = $response->json();
            if($data['success'] == true && $data['status'] == 200 ){
                Cookie::queue(Cookie::forget('auth_token'));
                return redirect()->route('login-route');
            }else{
                dd("something went wrong");
            }
        }

    }
}
