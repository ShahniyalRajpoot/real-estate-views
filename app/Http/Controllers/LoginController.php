<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function login(Request $request){
        $inputData = $request->only('email','password');
        $response  = getApiResponse($inputData,'post','login');
                $data = $response;
                if($data['success'] && $data['status'] == 200 ){
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

    public function home(Request $request){
        $cookieToken  = $request->cookie('auth_token');
        $response  = getApiResponse([],'get','user-data',true,$cookieToken);
            $data = $response;
//            dd($data);
        if(strpos($data['userInfo']['image']['path'], 'http') !==false){
            $data['userInfo']['image']['http'] ='yes';
        }else{
            $data['userInfo']['image']['http'] ='no';
        }
            return view('dashboard.dashboard')->with('data', $data);
    }

    public function listingDetail(Request $request,$id){
        $cookieToken  = $request->cookie('auth_token');
        $response  = getApiResponse(['id'=>$id],'post','view-listing-detail',true,$cookieToken);
        $data = $response;
//            dd($data);
        if(strpos($data['userInfo']['image']['path'], 'http') !==false){
            $data['userInfo']['image']['http'] ='yes';
        }else{
            $data['userInfo']['image']['http'] ='no';
        }
        return view('dashboard.listing-details')->with('data', $data);
    }

    public function featureListing(Request $request){
        $cookieToken  = $request->cookie('auth_token');
        $response  = getApiResponse([],'get','user-data',true,$cookieToken);
        $data = $response;
//            dd($data);
        if(strpos($data['userInfo']['image']['path'], 'http') !==false){
            $data['userInfo']['image']['http'] ='yes';
        }else{
            $data['userInfo']['image']['http'] ='no';
        }
        return view('dashboard.feature-list')->with('data', $data);
    }

    public function logout(Request $request){
        $cookieToken  = $request->cookie('auth_token');
        $response  = getApiResponse([],'get','logout',true,$cookieToken);
            $data = $response;
            if($data['success'] && $data['status'] == 200 ){
                Cookie::queue(Cookie::forget('auth_token'));
                return redirect()->route('login-route');
            }else{
                dd("something went wrong");
            }
    }

    public function profileSetting(Request $request){
        $cookieToken  = $request->cookie('auth_token');
        $response  = getApiResponse([],'get','profile-setting',true,$cookieToken);
        $data = $response;
        if (strpos($data['userInfo']['image']['path'], 'http') !==false){
            $data['userInfo']['image']['http'] ='yes';
        }else{
            $data['userInfo']['image']['http'] ='no';
        }
        return view('dashboard.profile-view')->with('data', $data);
    }

    public function SaveProfileSettings(Request $request){
        $allData = $request->all();
        if($request->hasFile('updateAvatar') && $request->file('updateAvatar')->isValid()){
            $image = $request->file('updateAvatar');
            $currentDate = now()->format('Y_m_d');
            $randomString = Str::random(20);
            $extension = $image->getClientOriginalExtension();
            $uniqueFilename = $currentDate . '_' . $randomString . '.' . $extension;

            $image->storeAs('assets/localimages', $uniqueFilename, 'public');
            $allData['updateAvatar'] = '/assets/localimages/'.$uniqueFilename;
        }

        $cookieToken  = $request->cookie('auth_token');
        $response  = getApiResponse($allData,'post','save-profile-setting',true,$cookieToken);
        $data = $response;
        if($data['success'] && $data['status'] == 200 ) {
            $res = ['msg' => "Your Information Updated", 'type' => 'danger'];
            session()->put($res);
            return redirect()->route('p-setting');
        }

    }



    public function doFeatured(Request $request,$id){
        $cookieToken  = $request->cookie('auth_token');
        $response  = getApiResponse(['id'=>$id],'post','do-feature',true,$cookieToken);
        return redirect()->back();
    }

    public function createListView(Request $request){
        $cookieToken  = $request->cookie('auth_token');
        $response  = getApiResponse([],'get','user-data',true,$cookieToken);
        $data = $response;
//            dd($data);
        if(strpos($data['userInfo']['image']['path'], 'http') !==false){
            $data['userInfo']['image']['http'] ='yes';
        }else{
            $data['userInfo']['image']['http'] ='no';
        }
        return view('dashboard.create-list-view')->with('data', $data);
    }
}
