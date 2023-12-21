<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile View</title>
</head>
@include('header');
    <body class="setting-formBody">
        <div class="container container-custom">
            @if(session()->has('msg'))
                <div class="alert alert-{{session()->pull('type')}}" role="alert">
                    {{session()->pull('msg')}}
                </div>
            @endif
            <div class="form-holder">
                <h2>Profile Settings</h2>
                    <form method="post" action="{{route('save-p-setting')}}" enctype="multipart/form-data" class="formSetting">
                        @csrf
                        <div class="form-group">
                            <img src="@if(@$data && $data['userInfo']['image']['http']=='yes') {{$data['userInfo']['image']['path']}} @elseif(@$data && $data['userInfo']['image']['http']=='no') {{asset('storage/'.$data['userInfo']['image']['path'])}} @endif" alt="Profile Photo" class="avatar">
                            <br>
                            <small>If You want to Update Your Profile Image Please Insert New Image Below</small>
                            <input type="file" name="updateAvatar" id="updateAvatar">
                        </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" class="form-control" id="sname" aria-describedby="emailHelp" name="name" value="{{@$data['userInfo']['name']}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{@$data['userInfo']['email']}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="changePass" name="ChangePass" placeholder="Please Enter New Password if you want to change!!">
                            </div>
                        <input type="hidden" name="user_id" value="{{@$data['userInfo']['id']}}">
                        <input type="hidden" name="image_id" value="{{@$data['userInfo']['image']['id']}}">
                            <button type="submit" class="btn btn-outline-success">Update</button>
                    </form>
            </div>
        </div>
    </body>
</html>
