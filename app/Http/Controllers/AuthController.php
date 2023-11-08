<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\student;

use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    //

    public function login(){
        return view('Registration.login');
    }
    
    public function save(Request $request){
     $name=$request->name;
     $email=$request->email;
     $data=DB::table('students')
     ->where(['name'=>$name,
       'email'=>$email
     ])
     ->get();
     if(sizeof($data)>0){
         $request->session()->put('email',$email);
         return redirect('auth');
    }
    return redirect('auth/login')->with('data','No account with that credential exists');
    }

    public function aboutus(){
        return view('Registration.aboutus');
    }

    public function logout(Request $request){
        
        $request->session()->forget('email');

        return redirect('auth');
    }

    public function contact(Request $request){
        
        return view('Registration.contact');
    }

    public function saveData(Request $request){
        $name=$request->name;
        $email=$request->email;
        $data=DB::table('students')->insert([
            'name'=>$name,
            'email'=>$email
        ]);
     return redirect('auth/signup')->with('data','Account Created');
    }
}
