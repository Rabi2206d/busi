<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Campus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;  

class AdminController extends Controller
{
    public function campusinsert(Request $req){
        $campusname=$req->campusname;
        $campusincharge=$req->incharge;
        $campusemail=$req->Email;
        $campusaddress=$req->campusaddress;
        $campusnumber=$req->PhoneNo;
        $campuspassword=$req->Password;

        $campus = new Campus();
        $campus->Name=$campusname;
        $campus->Incharge=$campusincharge;
        $campus->Address=$campusaddress;
        $campus->Email=$campusemail;
        $campus->number=$campusnumber;
        $campus->Password=$campuspassword;
    
        $addcam = new User();
        $addcam->name=$campusname;
        $addcam->email=$campusemail;
        $addcam->password=Hash::make($campuspassword);
        $addcam->role=0;
    
        $input = $req->all();
    
        $addcam->save();
        $campus->save();
    
        Alert::success('Campus Added');
        
        return redirect()->back();
        }

        


        
public function fetchcamp()
 {
    $fetchcamp=Campus::get();
    return view('AdminDashboard.viewcampus',compact('fetchcamp'));
 }
 public function campdelete($id){
   $campdelete=Campus::where('Email',$id)->delete();
   Alert::success('Campus Deleted');
   $campdelete=User::where('email',$id)->delete();
return redirect()->back();
 }

 public function campupdate($id) {
   $up = Campus::where('Email', $id)->first();
   return view('AdminDashboard.update', compact('up'));
}


public function update(Request $request, $email)
{
   

    // Update the User table
    $user = User::where('Email', $email)->first();
    $user->Name = $request->campusname;
    $user->Email = $request->Email;
    $user->Password =  Hash::make($request->Password);
    $user->save();

    // Update the Campus table
    $campus = Campus::where('Email', $email)->first();
    $campus->Name = $request->campusname;
    $campus->Incharge = $request->incharge;
    $campus->Address = $request->campusaddress;
    $campus->Password = $request->Password;
    $campus->Email = $request->Email;
    $campus->number = $request->PhoneNo;
    $campus->save();
    Alert::success('Campus Updated');
    return redirect('campdetails');
}
}


