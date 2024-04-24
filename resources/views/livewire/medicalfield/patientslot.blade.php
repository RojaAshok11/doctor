       <div>
           <h1 class="text-center pt-4">Patients Appointment</h1>
           <div class="container table-responsive py-5">

               <h1>Time Slot</h1>

               <label for="selectedDate">Select Date:</label>

               <form class="row g-3">
                   <input class="col-3 " type="date" wire:model.live="selectedDate">



                   <div >
                        <label for="doctor_id" class="form-label">SELECT DOCTOR</label>

                        <span class="text-danger fw-bold">*</span>

                    <select class="form-select"
                        id="doctor_id"  wire:model="selectedDoctor" wire:change="datachanged">
                        <option value="">Select an Option</option>
                        @foreach ($doctor as $key => $doctors)
                            <option value="{{ $key }}">{{ $doctors }}</option>
                        @endforeach
                    </select>
                </div>

                @if ($appointments)


                <h3>Appointments:</h3>
                <div class="row">
                    @foreach ($appointments as $time)
                    <div class="col-1 ">
                        <div class="d-flex  align-items-center">
                            @php

                                $selectedTime = \Carbon\Carbon::createFromFormat('H:i', $time);
                                $currentTime = \Carbon\Carbon::now();
                                $buttonClass = $selectedTime->greaterThanOrEqualTo($currentTime)
                                    ? 'btn-primary'
                                    : 'btn-secondary';
                        @endphp

                            <button class="btn {{ $buttonClass }} m-2"  wire:click="store('{{ $time }}')" type="button">{{ $time }}</button>
                        </div>
                    </div>
                    @endforeach
                        </div>
            @endif

               </form>

           </div>
       </div>
