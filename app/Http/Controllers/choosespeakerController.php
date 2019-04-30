<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class choosespeakerController extends Controller
{
    public function index()
    {
        $speakers = \App\addspeaker::all('id','name','address','email','description','image');
        return view('admin/choosespeaker',compact('speakers'));
    }
}
