<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutController extends Controller
{
    public function index()
    {
        //$speaker = \App\shownspeaker::all();

        $speaker = \App\shownspeaker::orderBy('id', 'desc')->take(5)->get();
        return view('site.about',compact('speaker'));
    }
}
