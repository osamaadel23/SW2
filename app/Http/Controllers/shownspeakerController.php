<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class shownspeakerController extends Controller
{
    public function index()
    {
        $speaker1 = DB::table('addspeakers')->where('name', request("speaker1"))->first();
        $speaker2 = DB::table('addspeakers')->where('name', request("speaker2"))->first();
        $speaker3 = DB::table('addspeakers')->where('name', request("speaker3"))->first();
        $speaker4 = DB::table('addspeakers')->where('name', request("speaker4"))->first();

        

        $new_speaker = new \App\shownspeaker();
        $new_speaker->name = \App\addspeaker::find($speaker1->id)->name;
        $new_speaker->description = \App\addspeaker::find($speaker1->id)->description;
        $new_speaker->image = \App\addspeaker::find($speaker1->id)->image;
        $new_speaker->save();

        $new_speaker = new \App\shownspeaker();
        $new_speaker->name = \App\addspeaker::find($speaker2->id)->name;
        $new_speaker->description = \App\addspeaker::find($speaker2->id)->description;
        $new_speaker->image = \App\addspeaker::find($speaker2->id)->image;
        $new_speaker->save();

        $new_speaker = new \App\shownspeaker();
        $new_speaker->name = \App\addspeaker::find($speaker3->id)->name;
        $new_speaker->description = \App\addspeaker::find($speaker3->id)->description;
        $new_speaker->image = \App\addspeaker::find($speaker3->id)->image;
        $new_speaker->save();

        $new_speaker = new \App\shownspeaker();
        $new_speaker->name = \App\addspeaker::find($speaker4->id)->name;
        $new_speaker->description = \App\addspeaker::find($speaker4->id)->description;
        $new_speaker->image = \App\addspeaker::find($speaker4->id)->image;
        $new_speaker->save();

        $speakers = \App\addspeaker::all('id','name','address','email','description','image');
        return view('admin/choosespeaker',compact('speakers'));
    }
}
