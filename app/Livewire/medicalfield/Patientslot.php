<?php

namespace App\Livewire\Medicalfield;

use Carbon\Carbon;

use Livewire\Component;
use Carbon\CarbonPeriod;
use Carbon\CarbonInterval;
use Illuminate\Support\Facades\Redirect;
use App\Models\Doctordetails\Medicaldetails\Doccreateds;
use App\Models\Doctordetails\Medicaldetails\Patientsdetail;
use App\Models\Doctordetails\Medicaldetails\Appointmentmodel;

class Patientslot extends Component
{
    public $selectedTime = null, $selectedDoctor;
    public $errorMessage = '';
    public $availableTimes = [];
    public $doctor;
    public $hours;
    public $minutes;

    public $appointments;


    public $selectedDate;
    public $availableTimeSlots = [];


    protected $guarded = [];



    public function mount()
    {
        $this->selectedDate = Carbon::now()->toDateString();

        // dd( Appointmentmodel::select('id','date','appointment_time')->get());
    }

    public function datachanged()
    {
        if ($this->selectedDoctor) {
            $doctor = Doccreateds::find($this->selectedDoctor);
            $appointment = Appointmentmodel::where('doccreateds_id',$this->selectedDoctor)->first();
            $startPeriod = Carbon::parse(  $appointment->am_time);
            $endPeriod   = Carbon::parse(  $appointment->pm_time);
            // $this->hours =  $appointment->hours;
            // $this->minutes = $appointment->minutes;

            // $totalMinutes = $this->hours * 60 + $this->minutes;
            // $interval = CarbonInterval::minutes($totalMinutes);
            // $period = CarbonPeriod::create($startPeriod, $interval, $endPeriod);
            $period = CarbonPeriod::create($startPeriod,  $endPeriod);
            $timeSlots = [];
            foreach ($period as $date) {
                $timeSlots[] = $date->format('H:i');
            }
            $this->appointments = $timeSlots;


        }
    }
    public function store($time)
    // public function store()
    {
        $appointment = Appointmentmodel::where('doccreateds_id',$this->selectedDoctor)->first();
        $patientdetail =  Patientsdetail::create([
            'doccreateds_id' => $this->selectedDoctor,
            'date' => $this->selectedDate,
            'appointmentmodel_id' => $appointment->id,
            'appointmenttime'=> $time,

        ]);

        return redirect()->route('patientcontrol', $patientdetail->id);
    }


    public function render()
    {
        $this->doctor = Doccreateds::pluck('doctorName', 'id');

        return view('livewire.medicalfield.patientslot');
    }

    public function selectTime($time) //when time slot is triggered
    {
        $this->selectedDate = Carbon::now()->toDateString();

        $this->selectedTime = Carbon::now()->addMinutes($this->mintues)->format('H:i');

        $selectedTime = Carbon::createFromFormat('H:i', $time);

        $currentTime = Carbon::now();

        if ($selectedTime->greaterThanOrEqualTo($currentTime)) {
            $this->selectedTime = $time;
            $this->errorMessage = '';

            return Redirect::to('/patient/{id}');
        } else {
            $this->errorMessage = 'Please select a future time slot.';
            return Redirect::to('/patientslot');
        }
    }

    public function clearErrorMessage()
    {
        $this->errorMessage = '';
    }


    public function updatedSelectedDate()
    {
        $selectedDate = Carbon::parse($this->selectedDate); // Adding one day to selected date
        $this->availableTimeSlots = $this->availableTimes;

    }
}

