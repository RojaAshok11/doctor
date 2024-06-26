<div>
    <x-admin.layouts.admintableindex>

        <x-slot name="title">
            FAQ
        </x-slot>

        <x-slot name="action">
            <a class="btn btn-sm btn-secondary shadow float-end mx-1" href="{{ route('adminsettings') }}"
                role="button">Back</a>
            <button wire:click="create" type="button" class="btn btn-sm btn-primary shadow float-end mx-1"
                data-bs-toggle="modal" data-bs-target="#createoreditModal">
                Create
            </button>
        </x-slot>

        <x-slot name="tableheader">
            @include('helper.tablehelper.tableheader', [
                'name' => 'S.NO',
                'type' => 'normal',
                'sortname' => '',
            ])
            @include('helper.tablehelper.tableheader', [
                'name' => 'UNIQID',
                'type' => 'sortby',
                'sortname' => 'uniqid',
            ])
            @include('helper.tablehelper.tableheader', [
                'name' => 'QUESTION',
                'type' => 'normal',
                'sortname' => '',
            ])
            @include('helper.tablehelper.tableheader', [
                'name' => 'ANSWER',
                'type' => 'normal',
                'sortname' => '',
            ])
            @include('helper.tablehelper.tableheader', [
                'name' => 'ACTIVE',
                'type' => 'normal',
                'sortname' => '',
            ])

            @include('helper.tablehelper.tableheader', [
                'name' => 'VIEW/EDIT',
                'type' => 'normal',
                'sortname' => '',
            ])



        </x-slot>

        <x-slot name="tablebody">
            @foreach ($this->faq as $index => $eachfaq)
                <tr>
                    <td>{{ $this->faq->firstItem() + $index }}</td>
                    <td>{{ $eachfaq->uniqid }}</td>
                    <td class="text-start">{!! substr($eachfaq->question, 0, 40) !!}</td>
                    <td class="text-start">{!! $eachfaq->answer !!}</td>
                    <td>{!! $eachfaq->active
                        ? '<span class="badge bg-success fs-6">Yes</span>'
                        : '<span class="badge bg-danger fs-6">No</span>' !!}
                    </td>
                    <td>
                        <button wire:click="show({{ $eachfaq->id }})" class="btn btn-sm btn-success"><i
                                class="bi bi-eye-fill"></i></button>

                        <button wire:click="edit({{ $eachfaq->id }})" class="btn btn-sm btn-primary"><i
                                class="bi bi-pencil-fill"></i></button>
                    </td>
                </tr>
            @endforeach
        </x-slot>

        <x-slot name="tablerecordtotal">
            Showing {{ $this->faq->firstItem() }} to {{ $this->faq->lastItem() }} out of
            {{ $this->faq->total() }}
            items
        </x-slot>

        <x-slot name="pagination">
            {{ $this->faq->links() }}
        </x-slot>

    </x-admin.layouts.admintableindex>

    <!-- Create or Edit Modal -->
    @include('livewire.admin.settings.supportsettings.faq.createoredit')

    <!-- Show Modal -->
    @include('livewire.admin.settings.supportsettings.faq.show')

    <!-- Modal Action Helper -->
    @include('livewire.helper.livewiremodalhelper')

</div>
