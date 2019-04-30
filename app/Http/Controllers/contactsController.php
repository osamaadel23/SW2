<?php

namespace App\Http\Controllers;
use App\conn;
use App\strategy\User\context;
use Illuminate\Http\Request;
use App\contact;
use App\strategy\User\UserStrategy ;
use App\Repositories\User\UserInterface as UserInterface;
use App\strategy\User\UserInterface as EncrypterContract;
class contactsController extends Controller
{




    public function index()
    {
    	return view('site.contacts');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getcontact(Request $request)
    {
        $md5 = new UserStrategy;
        $enc1 = $request->message;
        $msg1 = $md5->encrypt($enc1);

        $contact = new contact();
        $contact->name= $request->name ;
        $contact->email= $request->email;
        $contact->phone= $request->phone;
        $contact->message=$msg1;

        $contact->save();
        return view('site.contacts');
    }

    public function getMessages()
    {
        //$md5 = new UserStrategy;
        $md5 = context::getInstance(new UserStrategy());


        //$md5 = new context(new UserStrategy());

        //$wid = new contact;
        $contact = contact::getAll();

        //$contact=contact::all();

        for($i = 0 ; $i < count($contact) ; $i++)
        {
            $contact[$i]->message = $md5->decrypt($contact[$i]->message);
        }

        return view('admin.table',compact('contact'));
    }
}
