<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class addspeakercontroller extends Controller
{
    
    public function submit()
    {
        $new_speaker = new \App\addspeaker();

        $new_speaker->name = request("field1");
        $new_speaker->address = request("field2");
        $new_speaker->email = request("field3");
        $new_speaker->description = request("field4");
        $new_speaker->image = request("field5");

        $new_speaker->save();


        $contact=\App\contact::all();
        return view('admin.table',compact('contact'));

    }

}
