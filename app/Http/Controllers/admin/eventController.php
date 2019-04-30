<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\events;


class eventController extends Controller
{
    public function index()
    {
        return view('admin.event');

    }

    public function addevent(Request $request)
    {

        $eventt = new events();

        $eventt->kind = $request->title_1;
        $eventt->title = $request->title_2;
        $eventt->desc = $request->link;
        $eventt->image = $request->photo;

        $eventt -> save();

        return view('admin.event');
    }
    public function getevents()
    {
        $event=events::all();
        return view('site.services',compact('event'));
    }
}


