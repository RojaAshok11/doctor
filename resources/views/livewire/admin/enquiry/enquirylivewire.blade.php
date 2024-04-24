<div>
    <x-admin.layouts.admintableindex>

        <x-slot name="title">
            PATIENTS DETAILS
        </x-slot>

        <x-slot name="action">
        </x-slot>

        <x-slot name="tableheader">
            @include('helper.tablehelper.tableheader', [
                'name' => 'NAME',
                'type' => 'sortby',
                'sortname' => 'fullname',
            ])
            @include('helper.tablehelper.tableheader', [
                'name' => 'EMAIL ID',
                'type' => 'normal',
                'sortname' => '',
            ])
            @include('helper.tablehelper.tableheader', [
                'name' => 'COMPANY NAME',
                'type' => 'sortby',
                'sortname' => 'companyname',
            ])
            @include('helper.tablehelper.tableheader', [
                'name' => 'PHONE NUMBER',
                'type' => 'sortby',
                'sortname' => 'phonenumber',
            ])
            @include('helper.tablehelper.tableheader', [
                'name' => 'VIEW',
                'type' => 'normal',
                'sortname' => '',
            ])
        </x-slot>

        <x-slot name="tablebody">
            @foreach ($this->contactus as $index => $eachcontactus)
                <tr>
                    <td>{{ $eachcontactus->fullname }}</td>
                    <td>{{ $eachcontactus->email }}</td>
                    <td>{{ $eachcontactus->companyname ? $eachcontactus->companyname : '-'  }}</td>
                    <td>{{ $eachcontactus->phonenumber ? $eachcontactus->phonenumber : '-'  }}</td>
                    <td>
                        <button wire:click="show({{ $eachcontactus->id }})" class="btn btn-sm btn-success"><i
                                class="bi bi-eye-fill"></i></button>
                    </td>
                </tr>
            @endforeach
        </x-slot>

        <x-slot name="tablerecordtotal">
            Showing {{ $this->contactus->firstItem() }} to {{ $this->contactus->lastItem() }} out of
            {{ $this->contactus->total() }}
            items
        </x-slot>

        <x-slot name="pagination">
            {{ $this->contactus->links() }}
        </x-slot>

    </x-admin.layouts.admintableindex>


    <!-- Show Modal -->
    @include('livewire.admin.enquiry.enquiryformshow')

    <!-- Modal Action Helper -->
    @include('livewire.helper.livewiremodalhelper')
</div>

