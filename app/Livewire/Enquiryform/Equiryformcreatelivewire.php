<?php

namespace App\Livewire\Enquiryform;

use App\Mail\Contactus\Admincontactus;
use App\Mail\Contactus\Customercontactus;
use App\Models\Website\Enquiryform;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Equiryformcreatelivewire extends Component
{

    public $fullname, $phonenumber, $message, $email;
    public $successMessage;

    protected function rules(): array
    {
        return [
            'fullname' => 'bail|required|max:70|min:2',
            'phonenumber' => 'bail|nullable|integer|digits_between:6,15',
            'email' => 'bail|required|email',
            'message' => 'bail|nullable|max:70|min:4',

        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);

    }

    public function submitForm()
    {

        $data = $this->validate();

        // Check if the form is empty
        if (empty($this->fullname) && empty($this->email) && empty($this->message) && empty($this->phonenumber)) {
            $this->resetForm();
            return;
        }

        Enquiryform::create($data);
        Mail::to('kaviya.8queens@gmail.com')->send(new Admincontactus($data));
        Mail::to($this->email)->send(new Customercontactus($data));

        return redirect()->to('/')->with('message', 'SUCCESSFULLY SUBMITTED!');
        //
    }
    public function render()
    {
        return view('livewire.enquiryform.equiryformcreatelivewire');
    }
}
