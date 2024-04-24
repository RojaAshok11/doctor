<div>
    <div class="table-responsive p-5">
        <table class="table table-bordered">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Doctor Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Expertise</th>
                    <th scope="col">Booking</th>
                </tr>
            </thead>
            <tbody>
                @foreach($doctors as $index => $doctor)
                <tr>

                    <td>{{ $index + 1 }}</td>
                    <td>{{ $doctor->doctorName }}</td>
                    <td>{{ $doctor->gender }}</td>
                    <td>{{ $doctor->specialist }}</td>


                    <td><button wire:click="bookAppointment({{ $doctor->id }})"  class="btn btn-primary">Book Appiontment</button></td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</div>
