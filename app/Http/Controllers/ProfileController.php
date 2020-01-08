<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\UserWithProfile;
use Auth;
use Illuminate\Support\Facades\Validator;
class ProfileController extends Controller
{
    public function createPorfile(){
        return view('Admin.user-registration-form');
    }
    
    public function ProfiveView(){
        return view('Admin.Index');
    }
    
    public function profileStore(){
       UserWithProfile::create([
            'email' => request('email'),
            'name' => request('name'),
            'password' => Hash::make(request('password')),
       ]);
       return redirect()->back()->with('message','Profile Added Sucessfully');
    }
    
    public function profileUpdate(){
       return view('Admin.Profile');
    }
    
    public function checkLogin(Request $request){
        $user_Data  = array('email' => $request->get('email'),
                            'password' => $request->get('password'));     
        if(Auth::attempt($user_Data)){
            echo "hello world";
        }
    }
    
    public function login(){
        return view('Admin.admin-login');
    }
    
    public function sucessLogin(){
        echo "hello world";
    }
}
