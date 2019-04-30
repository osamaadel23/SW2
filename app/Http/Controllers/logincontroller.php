<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

class logincontroller extends Controller
{
    public function index()
    {
        if(session()->get('key') == 1)
        {
            return view('/notfound');
        }
        else{

            return view('login');

        }
        
    }


public function checklogin(Request $request)
    {

        $username_form = request('field1');
        $password_form = request('field2');

        $username_target = \App\login::first()->username;
        $password_target = \App\login::first()->password;
        
        $data = \App\login::find(1);
        $data->status='1';
        $data->save();

        if($username_form == $username_target && $password_form == $password_target){

            session(['key' => '1']);

            return view('admin/index');
        }else{
            $error = 'true';
            return view('login',compact('error')); 
        }
        
    }
    
    
    public function checklogout()
    {
        $data = \App\login::find(1);
        $data->status='0';
        $data->save();

        session(['key' => '0']);

        return view('login');
    }

}
