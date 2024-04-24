<div>
    <div class="card">
        <div class="card-content">
            <form wire:submit.prevent="store" enctype="multipart/form-data">
                <div class="card-header text-white theme_bg_color px-4 py-3">
                    <h5 class="card-title" id="createoreditModalLabel">
                        {{-- @dd($this->model_id) --}}
                        {{-- {{ $existingSlot ? __('UPDATE') : __('CREATE') }} --}}
                        {{ __('TIMESLOT') }}</h5>
                    <button type="button" class="btn btn-secondary" style="position: absolute; top: 10px; right: 10px;"
                        onclick="window.history.back();">Back</button>

                </div>
                <div class="modal-body bg-white">
                    {{-- @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @if (session()->has('message'))
                                        <div>{{ session('message') }}</div>
                                    @endif

                                </ul>
                            </div>
                        @endif --}}

                    <div class="card pb-3">

                        <div class="card">
                            <div class="card-header">
                                Select Time1

                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label for="am_time">AM:</label>
                                            <input wire:model="am_time" type="time" id="am_time"
                                                class="form-control">

                                        </div>

                                        <div class="col-md-2">
                                            <label for="pm_time">PM:</label>
                                            <input wire:model="pm_time" type="time" id="pm_time"
                                                class="form-control">

                                        </div>
                                        {{-- <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="hours">Hours</label>
                                                <input wire:model="hours" type="number" name="hours" id="hours"
                                                    class="form-control">
                                            </div>
                                        </div> --}}
                                        {{-- <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="minutes">Minutes:</label>
                                                <input wire:model="minutes" type="number" name="minutes" id="minutes"
                                                    class="form-control">
                                            </div>
                                        </div> --}}


                                        <div class="col-md-1 pt-4">
                                            <div class="form-group">

                                                <button type="submit" wire:click="store"
                                                    class="btn btn-sm btn-success">create</button>

                                            </div>
                                        </div>


                                    </div>


                            </div>



                            </table>


                        </div>
                    </div>


                </div>
            </form>
            <div class="card pb-3">

                <div class="card">
                    <div class="card-header">
                        Select Time1

                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <div class="row">
                                <div class="col-auto">
                                    <tr>
                                        <th>AM:</th>
                                        <th>PM:</th>
                                        {{-- <th>HOURS:</th>
                                        <th>MINUTES:</th> --}}
                                        <th>OPTION</th>
                                    </tr>
                                    @foreach ($this->appointments as $appointment)
                                        <tr>
                                            <td>{{ $appointment->am_time }}</td>
                                            <td>{{ $appointment->pm_time }}</td>
                                            {{-- <td>{{ $appointment->hours }}</td>
                                            <td>{{ $appointment->minutes }}</td> --}}
                                            <td>
                                                <button type="button" wire:click="timeedit({{ $appointment->id }})"
                                                    class="btn btn-sm btn-primary"><i
                                                        class="bi bi-pencil-fill"></i></button>

                                                <button wire:click="deletemodal({{ $appointment->id }})"
                                                    class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>

                                                {{-- <button wire:click="deletemodal({{ $doctor->id }})" class="btn btn-sm btn-danger"><i
                                                                class="bi bi-trash"></i></button> --}}

                                            </td>
                                        </tr>
                                    @endforeach
                                </div>


                                {{-- <input  wire:model="am_time" type="time" id="am_time" class="form-control"> --}}


                                {{-- <input  wire:model="pm_time" type="time" id="pm_time" class="form-control"> --}}

                                {{-- <input type="number" wire:model="hours" id="hours" name="hours" class="form-control" required> --}}

                                {{-- <input type="number" wire:model="minutes" id="minutes" name="minutes" class="form-control" required> --}}

                                {{-- <button type="submit"
                                                class="btn btn-primary">{{  $existingSlot ? __('Update') : __('Create') }}</button> --}}


                            </div>






                        </table>

                    </div>
                </div>
            </div>








        </div>
    </div>
    @include('livewire.admin.settings.user.user.createtimeslot')
    @include('livewire.admin.settings.user.user.doctordelete')

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
