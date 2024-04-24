<form wire:submit.prevent="submitForm" class="row g-3 border mt-0 border-2 rounded bg-white">
    <h3 class="text-center custom-gradient m-0 fs-3 py-2 rounded-top text-white text-justify fw-bold lh-base">
        Patients Details</h3>
      <div class="row gy-xl-3 mx-0 my-2 bg-white rounded">
          <div>


          </div>
          <div class="fs-4 ">
              <input type="name" class="form-control" id="inputname4" required placeholder="Name *">
              @error('name')<label class="help-block text-red-500 ">{{$name}}</label>
  @enderror
          </div>
          <div class="fs-4">

            <input type="text" class="form-control" id="inputname4" placeholder="Company Name">
            @error('companyname')<label class="help-block text-red-500 ">{{$password}}</label>
  @enderror
        </div>
          <div class="fs-4">
              <input type="email" class="form-control" id="inputEmail4" required placeholder="Email@gmail.com *">
              @error('email')<label class="help-block text-red-500 ">{{$fullname}}</label>
  @enderror
          </div>

          <div class=" fs-4">
              <input type="number" class="form-control" id="inputphone" placeholder="Phone Number">
              @error('number')<label class="help-block text-red-500 ">{{$number}}</label>
  @enderror
          </div>
          <div class=" fs-4">
              <input type="text" class="form-control" id="inputAddress2"
                  placeholder="Address ,Apartment, studio, or floor">
                  @error('address')<label class="help-block text-red-500 ">{{$address}}</label>
  @enderror
          </div>

          <div class="col-md-6 fs-4">
              <input type="number" class="form-control" id="inputnumber"  required placeholder="Volume in cbm *">
              @error('number')<label class="help-block text-red-500 ">{{$number}}</label>
  @enderror
          </div>
          <div class="col-md-6 fs-4">

              <input type="number" class="form-control" id="inputnumber" required placeholder=" Length in cm *">
              @error('number')<label class="help-block text-red-500 ">{{$number}}</label>
  @enderror
          </div>
          <div class="col-md-6 fs-4">

            <input type="number" class="form-control" id="inputnumber" required placeholder="Width in cm *">
            @error('number')<label class="help-block text-red-500 ">{{$number}}</label>
  @enderror
        </div>
          <div class="col-md-6 fs-4">
              <input type="number" class="form-control" id="inputnumber" required placeholder="Heigth in cm *">
              @error('number')<label class="help-block text-red-500 ">{{$number}}</label>
  @enderror
          </div>
          <div class=" fs-4">
              <select id="inputState" class="form-select mb-3">
                  <option selected>Product Name - Traphical White Granite Rough blocks</option>

              </select>
          </div>
          <div class=" mb-1 fs-4">
              <textarea class="form-control" id="message" wire:model="message" name="message" rows="3"
                  placeholder="Any other qurries ask here....."></textarea>
                  @error('message')<label class="help-block text-red-500 ">{{$message}}</label>
  @enderror
          </div>
          <div class=" mb-1 fs-4 mx-4 ">
              <button type="submit" class="btn custom-gradient text-white  fw-semibold fs-6 px-3">Sumbit</button>
              <button type="submit" class="btn custom-gradient "><a
                      class="nav-link active fs-6 fw-semibold text-white px-3" aria-current="page"
                      href="{{ route('services') }}">Clear</a></button>
          </div>

      </div>

  </form>
