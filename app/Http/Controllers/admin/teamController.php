<?php

namespace App\Http\Controllers\admin;
use App\Http\Requests;
//use  Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\teammembers;
class teammemberController extends Controller
{
    public function index()
    {
        $teammembers=teammembers::all();
        return view('admin.teamMember',compact('teammembers'));
    }


    public function addMember(Request $request)
    {

        $teammembers= new teammembers();

        $teammembers->name = $request->name;
        $teammembers->job = $request->job;
        $teammembers->description  = $request->description;

        if ($request->image)
        {
            $file = $request->file('image');
            //Move Uploaded File
            $destinationPath = 'uploads';
            $file->move($destinationPath, time() . "-" . $file->getClientOriginalName());
            $teammembers->image = time() . "-" . $file->getClientOriginalName();
        }

        $teammembers->save();

        return "done";

    }

    public function getMemberById($id)
    {
        $teammembers=teammembers::find($id);

        return $teammembers;
    }

    public function updateMember(Request $request)
    {
        $teammembers=teammembers::find($request->Member_id_edit);

        $teammembers->name=$request->name_edit;
        $teammembers->job=$request->job_edit;
        $teammembers->description=$request->description_edit;
        $teammembers->save();

        return "done";
    }

    public function deleteMemberById($id)
    {
        $teammembers=teammembers::find($id);
        $teammembers->delete();
        return "done";
    }

    /* public function editMember($id)
     {
         $teammembers=teammembers::find($id);
         print_r($teammembers);
     }*/
    /*  public function del($id)
      {
          $teammembers=teammembers::find($id);
          $teammembers->delete();
          return view('admin.teamMember');
      }*/
    /*public  function  deleteMemberById($id)
    {

      $teammembers=teammembers::find($id);
      $teammembers->delete();

      redirect("admin/teamMember" );
      }*/

    /* public function deleteMemberById($id)
     {
         $teammembers=teammembers::find($id);
         $teammembers->delete();
         return "done";
     }*/
}

