<?php

namespace App\Http\Controllers\Website\Patientweb;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function patientinformation($id)
    {
     
        return view('patientview.patientviewfile',compact('id'));

    }

    public function patientinformationslot()
    {
        return view('patientview.patientviewfileslot');
    }


    public function doccreatednew()
    {
        return view('patientview.doctorscreats');
    }

}
