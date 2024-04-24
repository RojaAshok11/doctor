<div>


        <div >
            <h1 class="text-center pt-4">Patients  Opponents </h1>

        <div class="container table-responsive py-5">
        <h2>Not Sure Which Doctor to Consult?</h2>
           <h1> We are Here to Help!</h1>
           <h3> Safest Treatment by Expert Apollo Doctors in India.</h3>

           <div class="card p-5">
            <form  wire:submit.prevent="submitForm">
                <div class="mb-3">
                    <label for="fullName">FULL NAME*</label>
                    <input type="text" wire:model="fullName" class="form-control" id="fullName" placeholder="Full Name">
                    @error('fullName') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label for="phoneNumber">PHONE NUMBER*</label>
                    <input type="text" wire:model="phoneNumber" class="form-control" id="phoneNumber" placeholder="Phone Number">
                    @error('phoneNumber') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <button type="submit" class="btn btn-primary mt-3">BOOK OPPOINTMENT</button>

                {{-- <a href={{route('patientcontrol',id)}}>BOOK OPPOINTMENT</a> --}}
            </form>
        </div>

        </div>




        </div>





</div>
