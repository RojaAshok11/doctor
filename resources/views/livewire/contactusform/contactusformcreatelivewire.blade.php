<div>
<form wire:submit.prevent="submitForm" class="row g-3 border mt-0 border-2 rounded bg-white">
    <h3 class="text-center custom-gradient m-0 fs-3 py-2 rounded-top text-white text-justify fw-bold lh-base">
      Order Form</h3>
      <div class="row gy-xl-3 mx-0 my-2 bg-white rounded">
          <div>
              <input type="text" class="form-control" id="inputname4" wire:model="fullname" placeholder="Name *">
              @error('fullname')<label class="help-block text-danger ">{{$message}}</label> 
       @enderror
          </div>
          <div>
              
            <input type="text" class="form-control" id="inputname4" wire:model="companyname" placeholder="Company Name">
            @error('companyname')<label class="help-block text-danger ">{{$message}}</label> 
      @enderror
        </div>
          <div>
              <input type="email" class="form-control" id="inputEmail4"  wire:model="email" placeholder="Email *">
              @error('email')<label class="help-block text-danger ">{{$message}}</label> 
       @enderror
          </div>
         
          <div>
              <input type="number" class="form-control" id="inputphone" wire:model="phonenumber" placeholder="Phone Number">
              @error('phonenumber')<label class="help-block text-danger ">{{$message}}</label> 
        @enderror
          </div>
          <div>
              <input type="text" class="form-control" id="inputAddress2" wire:model="address"
                  placeholder="Address ">
                  @error('address')<label class="help-block text-danger ">{{$message}}</label> 
        @enderror
          </div>

          <div class="col-md-6">
              <input type="number" class="form-control" id="inputnumber" wire:model="volume_in_cbm" placeholder="Volume in cbm *">
              @error('volume_in_cbm')<label class="help-block text-danger ">{{$message}}</label> 
       @enderror
          </div>
          <div class="col-md-6 ">
              
              <input type="number" class="form-control" id="inputnumber" wire:model="length_in_cm" placeholder=" Length in cm *">
              @error('length_in_cm')<label class="help-block text-danger ">{{$message}}</label> 
       @enderror
          </div>
          <div class="col-md-6">
              
            <input type="number" class="form-control" id="inputnumber" wire:model="width_in_cm" placeholder="Width in cm *">
            @error('width_in_cm')<label class="help-block text-danger ">{{$message}}</label> 
       @enderror
        </div>
          <div class="col-md-6">
              <input type="number" class="form-control" id="inputnumber" wire:model="height_in_cm" placeholder="Heigth in cm *">
              @error('height_in_cm')<label class="help-block text-danger ">{{$message}}</label> 
        @enderror
          </div>
          <div>
              <select id="inputState" class="form-select mb-3">
                  <option selected>Product Name - Traphical White Granite Rough blocks</option>
              </select>
          </div>
          <div class="mb-1">
              <textarea class="form-control" id="message" wire:model="message" name="message" rows="3"
                  placeholder="Any other qurries ask here....."></textarea>
                  @error('message')<label class="help-block text-danger ">{{$message}}</label> 
        @enderror
          </div>
          <div class=" mb-1 mx-4 ">
              <button type="submit" class="btn custom-gradient text-white  fw-semibold fs-6 px-3">Sumbit</button>
              <button type="submit" class="btn custom-gradient "><a
                      class="nav-link active fs-6 fw-semibold text-white px-3" aria-current="page"
                      href="{{ route('services') }}">Clear</a></button>
          </div>
          
      </div>

  </form>
</div>