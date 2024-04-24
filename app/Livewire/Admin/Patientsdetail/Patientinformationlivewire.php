<?php

namespace App\Livewire\Admin\Patientsdetail;

use Livewire\Component;
use App\Models\Doctordetails\Medicaldetails\Patientsdetail;

class Patientinformationlivewire extends Component
{
    public $patients;
    
    public $status = false;

    public function mount()
    {
        $this->patients = Patientsdetail::all();
    }


    public function visit(Patientsdetail $patientId)
    {
        if ($patientId) {
            $patientId->update(['status' => 'Visited']);
            $this->status = true;

        }

        }


    public function render()
    {
        return view('livewire.admin.patientsdetail.patientinformationlivewire');
    }
}

