<?php

namespace App\Livewire\Admin\Appointment;

use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\Attributes\Computed;
use App\Models\Doctordetails\Medicaldetails\Doccreateds;
use App\Models\Doctordetails\Medicaldetails\Appointmentmodel;

class Appointmentlivewire extends Component
{
    public $selectedDate;

    public $am_time;
    public $pm_time;
    // public $minutes;
    // public $hours;
    public $doccreateds_id;
    public $appointmentmodel_id;
    public $existingSlot;
    // public $existingid;



    public function mount($id)
    {
        $this->doccreateds_id =  $id;
    }

    #[Computed]
    public function appointments(){
        return Appointmentmodel::where('doccreateds_id',$this->doccreateds_id)->get();
    }


    public function deletemodal($doccreateds_id): void
    {

        $this->appointmentmodel_id = $doccreateds_id;
        $this->dispatch('deletemodal');
    }

    protected function databindes($doccreateds_id, $type): void
    {
        $doctor = Doccreateds::find($doccreateds_id);

        if ($type == 'editelse') {
            $this->am_time= $doctor->am_time;
            $this->pm_time= $doctor->pm_time;
            // $this->hours= $doctor->hours;
            // $this->minutes= $doctor->minutes;

        } else {
            $this->appointmentmodel_id = $doctor;
        }
    }

    public function deletehold()
    {
        // dd($this->appointmentmodel_id);

        $doctor = Appointmentmodel::find($this->appointmentmodel_id);
// dd($doctor);
        $doctor->delete();
        $this->dispatch('alert',
            ['type' => 'success', 'message' => 'Deleted Successfully!!']);
        $this->dispatch('closedeletemodal');
    }
    public function store(Request $request)
    {

        $this->validate([
            'am_time' => 'required',

            'pm_time' => 'required',

            // 'hours' => 'required|integer',
            // 'minutes' => 'required|integer',
        ]);
if ( $this->existingSlot) {
    $this->existingSlot->update([
        'am_time' => $this->am_time,
        'pm_time' => $this->pm_time,
        // 'hours' => $this->hours,
        // 'minutes' => $this->minutes,
    ]);
}else {
    # code...
    Appointmentmodel::create([
    'doccreateds_id' => $this->doccreateds_id,
    'am_time' => $this->am_time,
    'pm_time' => $this->pm_time,
    // 'hours' => $this->hours,
    // 'minutes' => $this->minutes,
    ]);
}

// $this->reset(['am_time', 'pm_time', 'hours', 'minutes']);
$this->reset(['am_time', 'pm_time']);
return redirect()->back()->with('success', 'Doctor created successfully.');

}

public function timeedit($doccreateds_id){

    // dd($doccreateds_id);
            // $totalMinutes = $this->hours * 60 + $this->minutes;


                $existingSlot = Appointmentmodel::find($doccreateds_id);
                if ($existingSlot) {

                    $this->existingSlot=  $existingSlot;

            $this->am_time = $existingSlot->am_time;
            $this->pm_time = $existingSlot->pm_time;
            // $this->hours = $existingSlot->hours;
            // $this->minutes = $existingSlot->minutes;

            // dd($existingSlot);

                }



        return redirect()->back()->with('success', 'Doctor created successfully.');
    }



    public function render()
    {
        return view('livewire.admin.appointment.appointmentlivewire');
    }
}

