<?php

namespace App\Livewire\Admin\Doctorscreate;

use Livewire\Component;

use Illuminate\Http\Request;
use App\Models\Doctordetails\Medicaldetails\Doccreateds;
use App\Livewire\Livewirehelper\Datatable\datatableLivewireTrait;
use App\Livewire\Livewirehelper\Miscellaneous\miscellaneousLivewireTrait;


class Doctorcreatlivewire extends Component
{
    use datatableLivewireTrait, miscellaneousLivewireTrait;

    public $doctorName;
    public $specialist;
    public $doctor_id;
    public $email ;
    public $phone ;
    public $gender;
    public $address;
    public $form;
    public $model_id;
    public $showdata;



    public function rules()
    {
        return [
            'doctorName' => 'required|string',
            'specialist' => 'required|string',
            'doctor_id' => 'required|integer',
            'email' => 'required|email|unique:doccreateds,email',
            'phone' => 'required|string',
            'gender' => 'required|string',
            'address' => 'required|string',

        ];
    }

    protected function databind($doctor_id, $type): void
    {
        $doctor = Doccreateds::find($doctor_id);

        if ($type == 'edit') {
            $this->doctorName= $doctor->doctorName;
            $this->specialist= $doctor->specialist;
            $this->doctor_id= $doctor->doctor_id;
            $this->email= $doctor->email;
            $this->phone= $doctor->phone;
            $this->gender= $doctor->gender;
            $this->address= $doctor->address;
            $this->model_id = $doctor_id;

        } else {
            $this->showdata = $doctor;
        }
    }

    public function store(Request $request){
        $validatedData = $this->validate();
        Doccreateds::create($validatedData);
        return redirect()->route('admincontactus');
    }

    public function deletemodal($doctor_id): void
    {

        $this->model_id = $doctor_id;
        $this->dispatch('deletemodal');
    }

    public function deletehold()
    {

        $doctor = Doccreateds::find($this->model_id);

        $doctor->delete();
        $this->dispatch('alert',
            ['type' => 'success', 'message' => 'Deleted Successfully!!']);
        $this->dispatch('closedeletemodal');
    }

    public function formreset(): void
    {
        $this->resetValidation();
        $this->doctorName= $this->specialist= $this->doctor_id=$this->email=$this->phone=$this->gender=$this->address=
        $this->model_id = null;

    }


    public function render()

    {
        $doctors = Doccreateds::all();
        return view('livewire.admin.doctorscreate.doctorcreatlivewire', compact('doctors'));
    }

}
