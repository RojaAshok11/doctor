<?php

namespace App\Livewire\Admin\Enquiry;

use Livewire\Component;
use Livewire\Attributes\Computed;
use App\Livewire\Livewirehelper\Datatable\datatableLivewireTrait;
use App\Models\Website\Contactus;

class Enquirylivewire extends Component
{
    use datatableLivewireTrait;

    public $showdata;

    protected function databind($contactusid, $type): void
    {
        $this->showdata = Contactus::find($contactusid);
    }

    #[Computed]
    public function contactus()
    {
        return Contactus::query()
            ->where(fn($query) =>
                $query->where('fullname', 'like', '%' . $this->searchTerm . '%')
                    ->orWhere('companyname', 'like', '%' . $this->searchTerm . '%')
                    ->orWhere('phonenumber', 'like', '%' . $this->searchTerm . '%')
                    ->orWhere('email', 'like', '%' . $this->searchTerm . '%')
            )
            ->orderBy($this->sortColumnName, $this->sortDirection)
            ->paginate($this->paginationlength)
            ->onEachSide(1);
    }

    public function render()
    {
        return view('livewire.admin.enquiry.enquirylivewire');
    }
}
