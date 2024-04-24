<div>
    <x-admin.layouts.admintableindex>
        <x-slot name="title">
            {{ __('PATIENTS') }}
        </x-slot>
        <x-slot name="action">
            {{-- <button wire:click="create" type="button" class="btn btn-sm btn-primary shadow float-end mx-1"
                data-bs-toggle="modal" data-bs-target="#createoreditModal">
                {{ __('Create') }}
            </button> --}}
        </x-slot>
        <x-slot name="tableheader">
            @include('helper.tablehelper.tableheader', [
                'name' => 'NAME',
                'type' => 'normal',
                'sortname' => '',
            ])
             @include('helper.tablehelper.tableheader', [
                'name' => 'PHONE NUMBER',
                'type' => 'normal',
                'sortname' => 'phonenumber',
            ])

            @include('helper.tablehelper.tableheader', [
                'name' => 'SPECIALIST',
                'type' => 'normal',
                'sortname' => '',
            ])

            @include('helper.tablehelper.tableheader', [
                'name' => 'STATUS',
                'type' => 'normal',
                'sortname' => '',
            ])
        </x-slot>
        <x-slot name="tablebody">
            @foreach ($patients as $patient)
                <tr>
                    <td>{{ $patient->full_name }}</td>
                    <td>{{ $patient->phone_number }}</td>
                    <td>{{ $patient->doctor?->doctorName }}</td>
                    <td>
                        <button wire:click="visit({{$patient->id}})" class="btn @if($patient->status == 'Visited') btn-secondary @else btn-primary @endif">{{$patient->status}}</button>
                    </td>
                </tr>
            @endforeach
        </x-slot>
        <x-slot name="tablerecordtotal">

        </x-slot>

        <x-slot name="pagination">

        </x-slot>


    </x-admin.layouts.admintableindex>

    @include('livewire.admin.settings.user.user.createoredit')
</div>
