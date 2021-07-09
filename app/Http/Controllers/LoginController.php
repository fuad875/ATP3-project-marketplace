<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests\UserRequest;
use App\Models\user;


class LoginController extends Controller
{
    public function index(){
        return view('login.index');

    }

      public function regverify(){
        return redirect('/login');
    
    }
public function register(){
        return view('registration.signup');
    }
    public function verify(userRequest $req){
       
    	$validation = Validator::make($req->all(), [
    		'username' => 'required',
    		'password'=> 'required|min:5'
    	]);
 $user = User::where('username', $req->username)
            ->where('password', $req->password)
            ->first();

        if($user){
            $req->session()->put('id', $user->id);
            return redirect('/sellerHome');
        }else{
            $req->session()->flash('msg', 'invaild username or password');
            return redirect('/login');
        }
    }
}