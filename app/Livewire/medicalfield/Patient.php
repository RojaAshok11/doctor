<?php

namespace App\Livewire\Medicalfield;

use Livewire\Component;
use App\Models\Doctordetails\Medicaldetails\Doccreateds;
use App\Models\Doctordetails\Medicaldetails\Patientsdetail;

class Patient extends Component
{
    public $fullName;
    public $phoneNumber;
    public $specialist;
    public $doctor;
    public $selectDoctor;
    public $datachange,$patientdetails;

    public function mount($id) {
$this->patientdetails = Patientsdetail::find($id);


    }

    public function submitForm()
    {
    $this->validate([
        'fullName' => 'required|string',
        'phoneNumber' => 'required|string',
        // 'specialist' => 'required|string',
    ]);


    $this->patientdetails->update([
        'full_name' => $this->fullName,
        'phone_number' => $this->phoneNumber,
        'specialist'=> $this->specialist,

        'status' => "Waiting",
    ]);


    $this->reset(['fullName', 'phoneNumber', 'specialist']);
    }


    public function render()
    {
        $this->doctor = Doccreateds::pluck('doctorName');
        return view('livewire.medicalfield.patient');


    }

}
