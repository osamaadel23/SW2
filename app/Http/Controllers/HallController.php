<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;
use App\Http\Requests\UploadRequest;
use App\HallPhotos;

use App\Hall;

class HallController extends Controller
{
    public function ViewHall($Id)
    {
     $Hall=Hall::find($Id);
     $arr=(Array)$Hall    ;
     $HallAttr=array_keys ($arr[ "\x00*\x00attributes" ]);
     
     $Hall=Array('HallData'=>$Hall);
     
     $Paths =Array('Paths'=>explode('@',$Hall['HallData']->Paths));
     $HallAttr=Array('Attr'=>$HallAttr);   
     $IgnoredAttribute=Array("IgnoredAttribute"=>["Paths","created_at","updated_at"]);

     $Content=Array('Content'=>Array($Paths,$Hall,$HallAttr,$IgnoredAttribute));

     return view('common.HallShow',$Content);
    }
    public function ListHall()
    {
        $Hall=Hall::all();

        
        $ListOfHalls=Array("ListHall"=>$Hall);
        //Get Attribute from DB
        $arr=(Array)$Hall[0]    ;
        $HallAttr=array_keys ($arr[ "\x00*\x00attributes" ]);
        $HallAttr=Array('Attr'=>$HallAttr);   

        $IgnoredAttribute=Array("IgnoredAttribute"=>["Paths","created_at","updated_at"]);

        $Content=Array('Content'=>Array($ListOfHalls,$HallAttr,$IgnoredAttribute));

        return view("admin.Hall.HallList",$Content);

    }
    public function AddHall(Request $Request)
    {
        if($Request->isMethod('post'))
        {
            $Hall=new Hall();
            $Hall->Id=$Request->input('Id');
            $Hall->HallName=$Request->input('HallName');
            $Hall->Admin=$Request->input('Admin');
            $Hall->Contact=$Request->input('Contact');
            $Hall->Space=$Request->input('Space');
            $Hall->Address=$Request->input('Address');
            $Hall->Description=$Request->input('Description');
            $Hall->Email=$Request->input('Email');
            $Hall->Branch=$Request->input('Branch');
            $Hall->Paths=$Request->input('Paths');
                 $product = Hall::create($Request->all());
          
                 $Index=0;
                 $Id=$Hall->Id;
              $NumberOfPhotos=count($Request->photos);
            for ($i=0;$i<$NumberOfPhotos;$i++,$Index++ ) {
            $filename = $Request->photos[$i]->store('photos');
            HallPhotos::create([
                  'Id'=>$Id.$Index,
                'Image_id' => $Id,
                'filename' => $filename
               
            ]);
            }
 #$Hall->save();
        }
        return view("admin.Hall.AddHall");

    }
    public function DeleteHall($Id)
    {

         $Hall=Hall::find($Id);

         $Hall = Hall::where('Id', $Id)->delete();  
           
         #  $Hall->delete();

         return redirect("/ListHall");

    }
    public function UpdateHall(Request $Request,$Id)
        {

                        if($Request->isMethod('post'))
                {
                    #$Hall=Hall::find($Id);

                   Hall::where('Id', $Id)->delete();


                    $Hall=new Hall();
                  $Hall->Id=$Request->input('Id');

                    $Hall->HallName=$Request->input('HallName');
                    $Hall->Admin=$Request->input('Admin');
                    $Hall->Contact=$Request->input('Contact');
                    $Hall->Space=$Request->input('Space');
                    $Hall->Address=$Request->input('Address');
                    $Hall->Description=$Request->input('Description');
                    $Hall->Email=$Request->input('Email');
                    $Hall->Branch=$Request->input('Branch');
                    $Hall->Paths=$Request->input('Paths');
            
                  $product = Hall::create($Request->all());
              $Index=0;
              $NumberOfPhotos=count($Request->photos);
              dd($Id);
            for ($i=0;$i<$NumberOfPhotos;$i++,$Index++ ) {
            $filename = $Request->photos[$i]->store('photos');
            HallPhotos::create([
                'Id'=>$Hall->Id.$Index,
                'Image_id' => $Id,
                'filename' => $filename

            ]);


        }


                                        return redirect("ListHall"); 

                }
                 #  $Hall->save();
                    #if($Output){
                        #   App::abort(500, 'Error');
                                #}
                
                else if($Request->isMethod('get'))
                {   
                    $Hall=Hall::find($Id);
                    $HallData=Array("Hall"=>$Hall);
                    return view("admin.Hall.UpdateHall",$HallData);


                }
            
 


            }#End Fn


        }
        



    
