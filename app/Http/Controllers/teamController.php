<?php

//use App\Slider;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\teammembers;
class teamController extends Controller
{
    public function index()
    {
        $teammembers=teammembers::all();
        return view ('site.team',compact('teammembers'));
    }
}
