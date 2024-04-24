{{-- <div wire:ignore.self class="modal fade" id="createoreditModal" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="createoreditModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form wire:submit.prevent="store" enctype="multipart/form-data">
                <div class="modal-header text-white theme_bg_color px-3 py-2">
                    <h5 class="modal-title" id="createoreditModalLabel">
                        {{-- @dd($this->model_id) -
                        {{ isset($this->model_id) ? __('UPDATE') : __('CREATE') }}
                        {{ __('DOCTOR') }}</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body bg-white">
                    <div class="row g-3">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @if (session()->has('message'))
                                        <div>{{ session('message') }}</div>
                                    @endif

                                </ul>
                            </div>
                        @endif


                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h3>Choose A Date</h3>
                        </div>
                        <div class="card-body">
                            <!-- Date input field (example) -->
                            @include('helper.formhelper.form', [
                                'type' => 'date',
                                'fieldname' => 'selectedDate',
                                'labelname' => 'APPOINTMENT DATE',
                                'labelidname' => 'selectedDate_id',
                                'required' => true,
                                'readonly' => false,
                                'col' => 'col-md-4',
                            ])


                        </div>
                    </div>

                    <!-- resources/views/livewire/appointment-form.blade.php -->




                    <div class="card">
                        <div class="card-header">
                            Choose AM Time
                            <span class="ml-auto">Check/Uncheck
                                <input type="checkbox" wire:model="amChecked" wire:click="toggleAllAM">
                            </span>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td><input type="checkbox" name="amTimes" value="6:00am" wire:model="amTimes">
                                            6:00am</td>
                                        <td><input type="checkbox" name="amTimes" value="6:20am" wire:model="amTimes">
                                            6:20am</td>
                                        <td><input type="checkbox" name="amTimes" value="6:40am" wire:model="amTimes">
                                            6:40am</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td><input type="checkbox" name="amTimes" value="7:00am" wire:model="amTimes">
                                            7:00am</td>
                                        <td><input type="checkbox" name="amTimes" value="7:20am" wire:model="amTimes">
                                            7:20am</td>
                                        <td><input type="checkbox" name="amTimes" value="7:40am" wire:model="amTimes">
                                            7:40am</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td><input type="checkbox" name="amTimes" value="8:00am" wire:model="amTimes">
                                            8:00am</td>
                                        <td><input type="checkbox" name="amTimes" value="8:20am" wire:model="amTimes">
                                            8:20am</td>
                                        <td><input type="checkbox" name="amTimes" value="8:40am" wire:model="amTimes">
                                            8:40am</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td><input type="checkbox" name="amTimes" value="9:00am" wire:model="amTimes">
                                            9:00am</td>
                                        <td><input type="checkbox" name="amTimes" value="9:20am" wire:model="amTimes">
                                            9:20am</td>
                                        <td><input type="checkbox" name="amTimes" value="9:40am" wire:model="amTimes">
                                            9:40am</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td><input type="checkbox" name="amTimes" value="10:00am" wire:model="amTimes">
                                            10:00am</td>
                                        <td><input type="checkbox" name="amTimes" value="10:20am" wire:model="amTimes">
                                            10:20am</td>
                                        <td><input type="checkbox" name="amTimes" value="10:40am" wire:model="amTimes">
                                            10:40am</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td><input type="checkbox" name="amTimes" value="11:00am"
                                                wire:model="amTimes"> 11:00am</td>
                                        <td><input type="checkbox" name="amTimes" value="11:20am"
                                                wire:model="amTimes"> 11:20am</td>
                                        <td><input type="checkbox" name="amTimes" value="11:40am"
                                                wire:model="amTimes"> 11:40am</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            Choose PM Time
                            <span class="ml-auto">Check/Uncheck
                                <input type="checkbox" wire:model="pmChecked" wire:click="toggleAllPM">
                            </span>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td><input type="checkbox" name="pmTimes" value="12:00pm"
                                                wire:model="pmTimes"> 12:00pm</td>
                                        <td><input type="checkbox" name="pmTimes" value="12:20pm"
                                                wire:model="pmTimes"> 12:20pm</td>
                                        <td><input type="checkbox" name="pmTimes" value="12:40pm"
                                                wire:model="pmTimes"> 12:40pm</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">8</th>
                                        <td><input type="checkbox" name="pmTimes" value="1:00pm"
                                                wire:model="pmTimes"> 1:00pm</td>
                                        <td><input type="checkbox" name="pmTimes" value="1:20pm"
                                                wire:model="pmTimes"> 1:20pm</td>
                                        <td><input type="checkbox" name="pmTimes" value="1:40pm"
                                                wire:model="pmTimes"> 1:40pm</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">9</th>
                                        <td><input type="checkbox" name="pmTimes" value="2:00pm"
                                                wire:model="pmTimes"> 2:00pm</td>
                                        <td><input type="checkbox" name="pmTimes" value="2:20pm"
                                                wire:model="pmTimes"> 2:20pm</td>
                                        <td><input type="checkbox" name="pmTimes" value="2:40pm"
                                                wire:model="pmTimes"> 2:40pm</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">10</th>
                                        <td><input type="checkbox" name="pmTimes" value="3:00pm"
                                                wire:model="pmTimes"> 3:00pm</td>
                                        <td><input type="checkbox" name="pmTimes" value="3:20pm"
                                                wire:model="pmTimes"> 3:20pm</td>
                                        <td><input type="checkbox" name="pmTimes" value="3:40pm"
                                                wire:model="pmTimes"> 3:40pm</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">11</th>
                                        <td><input type="checkbox" name="pmTimes" value="4:00pm"
                                                wire:model="pmTimes"> 4:00pm</td>
                                        <td><input type="checkbox" name="pmTimes" value="4:20pm"
                                                wire:model="pmTimes"> 4:20pm</td>
                                        <td><input type="checkbox" name="pmTimes" value="4:40pm"
                                                wire:model="pmTimes"> 4:40pm</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">12</th>
                                        <td><input type="checkbox" name="pmTimes" value="5:00pm"
                                                wire:model="pmTimes"> 5:00pm</td>
                                        <td><input type="checkbox" name="pmTimes" value="5:20pm"
                                                wire:model="pmTimes"> 5:20pm</td>
                                        <td><input type="checkbox" name="pmTimes" value="5:40pm"
                                                wire:model="pmTimes"> 5:40pm</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">13</th>
                                        <td><input type="checkbox" name="pmTimes" value="6:00pm"
                                                wire:model="pmTimes"> 6:00pm</td>
                                        <td><input type="checkbox" name="pmTimes" value="6:20pm"
                                                wire:model="pmTimes"> 6:20pm</td>
                                        <td><input type="checkbox" name="pmTimes" value="6:40pm"
                                                wire:model="pmTimes"> 6:40pm</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">14</th>
                                        <td><input type="checkbox" name="pmTimes" value="7:00pm"
                                                wire:model="pmTimes"> 7:00pm</td>
                                        <td><input type="checkbox" name="pmTimes" value="7:20pm"
                                                wire:model="pmTimes"> 7:20pm</td>
                                        <td><input type="checkbox" name="pmTimes" value="7:40pm"
                                                wire:model="pmTimes"> 7:40pm</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">15</th>
                                        <td><input type="checkbox" name="pmTimes" value="8:00pm"
                                                wire:model="pmTimes"> 8:00pm</td>
                                        <td><input type="checkbox" name="pmTimes" value="8:20pm"
                                                wire:model="pmTimes"> 8:20pm</td>
                                        <td><input type="checkbox" name="pmTimes" value="8:40pm"
                                                wire:model="pmTimes"> 8:40pm</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">16</th>
                                        <td><input type="checkbox" name="pmTimes" value="9:00pm"
                                                wire:model="pmTimes"> 9:00pm</td>
                                        <td><input type="checkbox" name="pmTimes" value="9:20pm"
                                                wire:model="pmTimes"> 9:20pm</td>
                                        <td><input type="checkbox" name="pmTimes" value="9:40pm"
                                                wire:model="pmTimes"> 9:40pm</td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

                <div class="modal-footer bg-light px-2 py-1">
                    <button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">{{ __('Close') }}</button>
                    <button type="submit"
                        class="btn btn-primary">{{ isset($this->model_id) ? __('Update') : __('Create') }}</button>
                </div>
            </form>
        </div>
    </div>
</div> --}}
