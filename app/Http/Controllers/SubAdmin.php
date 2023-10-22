<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\studentrequestadmin;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class SubAdmin extends Controller
{public function studentreqinsert(Request $req){
    $studentinsert = new studentrequestadmin;
    $studentinsert->StudentName = $req->studentname;
    $studentinsert->FatherName = $req->Father;
    $studentinsert->Class = $req->class;
    $studentinsert->grno = $req->grno;
    $studentinsert->whatapp = $req->whatapp;
    $studentinsert->FatherNo = $req->FatherNO;
    $studentinsert->MotherNO = $req->Mother;
    $studentinsert->EmergencyNo = $req->emer;
    $studentinsert->DateOfBirth = $req->Date;
    $studentinsert->DateOfAddmission = $req->addmission;
    $studentinsert->AddmissionFee = $req->Addmissionfee;
    $studentinsert->MonthlyFee = $req->monthly;
    $studentinsert->reqistration = $req->reg;
    $studentinsert->annual = $req->annual;
    $studentinsert->Discount = $req->discount;

    // Calculate the FinalPrice
    $addmissionFee = (float)$req->Addmissionfee;
    $monthlyFee = (float)$req->monthly;
    $discount = (float)$req->discount;
    $annual = (float)$req->annual;
    $registration = (float)$req->reg;
    $finalPrice = $addmissionFee + $monthlyFee + $annual + $registration - $discount;

    $studentinsert->FinalPrice = $finalPrice;
    $studentinsert->user_id = Auth::user()->id;
    $studentinsert->save();
    Alert::success('Request Sent');

    return redirect()->back();
}



   }

