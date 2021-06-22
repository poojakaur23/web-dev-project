<?php

namespace App\Http\Controllers;
use Illuminate\support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
class User_registerController extends Controller
{
    function login(Request $req){
        $user= User::where(['email'=>$req->email])->first();
        //return $user->password;
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return "Username or password is not matched";
        }else
        {
            $req->session()->put('user',$user);
            return redirect('/');
        }
   }
   function register(Request $req){
       //return $req->input();
        $user= new User;
        $user->name=$req->registerName;
        $user->email=$req->registerEmail;
        $user->password=Hash::make($req->registerPassword);
        $user->save();
        return redirect('/login');

    }
}
