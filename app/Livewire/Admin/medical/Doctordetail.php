<?php

namespace App\Livewire\Admin\Medical;

use Livewire\Component;


use App\Models\Doctordetails\Medicaldetails\Doccreateds;
use App\Models\Doctordetails\Medicaldetails\Patientsdetail;

class Doctordetail extends Component
{
    
    public $patients;
    public $doctors;

    public function mount()
    {
        $this->patients = Patientsdetail::all();
        $this->doctors = Doccreateds::all();
    }



    public function render()
    {
        return view('livewire.admin.medical.doctordetail');
    }

}
