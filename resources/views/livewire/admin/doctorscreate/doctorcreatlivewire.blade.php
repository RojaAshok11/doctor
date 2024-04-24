<div>
    {{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @if (session()->has('message'))
                <div>{{ session('message') }}</div>
            @endif

        </ul>
    </div>
@endif --}}
    <x-admin.layouts.admintableindex>
        <x-slot name="title">
            {{ __('DOCTORS') }}
        </x-slot>
        <x-slot name="action">
            <button type="button" wire:click='store' class="btn btn-sm btn-primary shadow float-end mx-1"
                data-bs-toggle="modal" data-bs-target="#createoreditModal">
                {{ __('Create') }}
            </button>
        </x-slot>
        <x-slot name="tableheader">
            @include('helper.tablehelper.tableheader', [
                'name' => 'NAME',
                'type' => 'normal',
                'sortname' => '',
            ])
            @include('helper.tablehelper.tableheader', [
                'name' => 'SPECIALIST',
                'type' => 'normal',
                'sortname' => '',
            ])
            @include('helper.tablehelper.tableheader', [
                'name' => 'EMAIL ID',
                'type' => 'normal',
                'sortname' => '',
            ])
            @include('helper.tablehelper.tableheader', [
                'name' => 'PHONE NUMBER',
                'type' => 'normal',
                'sortname' => '',
            ])
            @include('helper.tablehelper.tableheader', [
                'name' => 'GENDER',
                'type' => 'normal',
                'sortname' => '',
            ])
             @include('helper.tablehelper.tableheader', [
                'name' => 'ADDRESS',
                'type' => 'normal',
                'sortname' => '',
            ])
             @include('helper.tablehelper.tableheader', [
                'name' => 'TIMING',
                'type' => 'normal',
                'sortname' => '',
            ])
            @include('helper.tablehelper.tableheader', [
                'name' => 'VIEW/EDIT',
                'type' => 'normal',
                'sortname' => '',
            ])
             @include('helper.tablehelper.tableheader', [
                'name' => __('DELETE'),
                'type' => 'normal',
                'sortname' => '',
            ])
        </x-slot>
        <x-slot name="tablebody">
            @foreach($doctors as $doctor)
            <tr>

                <td>{{ $doctor->doctorName }}</td>
                <td>{{ $doctor->specialist }}</td>
                <td>{{ $doctor->email }}</td>
                <td>{{ $doctor->phone }}</td>
                <td>{{ $doctor->gender }}</td>
                <td>{{ $doctor->address }}</td>
                <td>
                    <a href="{{route('timeappiont',$doctor->id)}}" class="btn btn-primary">
                        <i class="bi bi-alarm"></i>
                    </a>
                </td>
                <td>


                        <button wire:click="show({{$doctor->id }})" class="btn btn-sm btn-success"><i
                                class="bi bi-eye-fill"></i></button>

                        <button wire:click="edit({{ $doctor->id }})" class="btn btn-sm btn-primary"><i
                                class="bi bi-pencil-fill"></i></button>


                </td>
                <td>
                    <button wire:click="deletemodal({{ $doctor->id }})" class="btn btn-sm btn-danger"><i
                            class="bi bi-trash"></i></button>
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
    @include('livewire.admin.settings.user.user.show')
    @include('livewire.admin.settings.user.user.doctordelete')
    @include('livewire.helper.livewiremodalhelper')


    <script>
        document.addEventListener('livewire:initialized', () => {

            Livewire.on('deletemodal', () => {
                var myModal = new bootstrap.Modal(document.getElementById('deleteModal'))
                myModal.show();
            });

            Livewire.on('closedeletemodal', () => {
                alert
                var myModal = bootstrap.Modal.getInstance(document.getElementById('deleteModal'))
                myModal.hide();
            });
        });
    </script>

</div>
