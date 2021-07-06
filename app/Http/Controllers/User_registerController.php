<?php

namespace App\Http\Controllers;
use Illuminate\support\Facades\Hash;
use Illuminate\Http\Request;
use Session;
use App\Models\User;
class User_registerController extends Controller
{

    function login(Request $req){
        $this->validate($req,[
            'email' => 'required',
            'password' => 'required'
            ]);
    
        $user= User::where(['email'=>$req->email])->first();
        //return $user->password;
        if(!$user || !Hash::check($req->password,$user->password))
        {
           
            return redirect('/login')->with('error','Email or password Incorrect! Try again.');;
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
