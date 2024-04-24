<?php

namespace App\Livewire\Admin\Contactus;

use Livewire\Component;
use App\Models\Website\Contactus;
use Livewire\Attributes\Computed;
use App\Livewire\Livewirehelper\Datatable\datatableLivewireTrait;
use App\Models\Website\Enquiryform;

class Contactuslivewire extends Component
{
    use datatableLivewireTrait;

    public $showdata;

    protected function databind($contactusid, $type): void
    {
        $this->showdata = Enquiryform::find($contactusid);
    }

    #[Computed]
    public function contactus()
    {
        return Enquiryform::query()
            ->where(fn($query) =>
                $query->where('fullname', 'like', '%' . $this->searchTerm . '%')
                    ->orWhere('phonenumber', 'like', '%' . $this->searchTerm . '%')
                    ->orWhere('email', 'like', '%' . $this->searchTerm . '%')
            )
            ->orderBy($this->sortColumnName, $this->sortDirection)
            ->paginate($this->paginationlength)
            ->onEachSide(1);
    }
    
    public function render()
    {
        return view('livewire.admin.contactus.contactuslivewire');
    }
}
