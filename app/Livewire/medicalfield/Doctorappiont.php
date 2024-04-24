<?php

namespace App\Livewire\Medicalfield;

use Livewire\Component;
use App\Models\Doctordetails\Medicaldetails\Doccreateds;


class Doctorappiont extends Component
{

   


    public function bookAppointment($doctorId)
{

    return redirect()->route('patientcontrolslot', ['doctorId' => $doctorId]);
}

    public function render()
    {
        $doctors = Doccreateds::select('id', 'doctorName', 'email', 'phone', 'gender', 'specialist')->get();
        return view('livewire.medicalfield.doctorappiont',compact('doctors'));
    }
}
