<div x-data="{ submitting: false } " id="popupform">

  <form wire:submit.prevent="submitForm">
    <div class="row gy-xl-3 px-4  bg-white rounded ">

      <h3 class="text-center fs-4 mt-2 mb-1">Contact Form</h3>
      @if (session()->has('message'))
      <div class="alert alert-success alert-dismissible fade show text-white" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <div>
          {{ session('message') }}
        </div>
      </div>
      @endif
      <div class="col-12 pb-3">
        <input type="text" class="form-control" id="fullname" placeholder="Full Name *" wire:model="fullname"
          name="fullname" value="">
        <div>
          @error('fullname')<label class="help-block text-danger ">{{$message}}</label>
          @enderror
        </div>
      </div>
      <div class="col-12 pb-3">
        <div class="input-group">
          <span class="input-group-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
              class="bi bi-envelope text-primary" viewBox="0 0 16 16">
              <path
                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
            </svg>
          </span>
          <input type="email" class="form-control" id="email" placeholder="Email *" wire:model="email" name="email"
            value="">
        </div>
        <div>
          @error('email')<label class="help-block text-danger ">{{$message}}</label>
          @enderror
        </div>
      </div>
      <div class="col-12 pb-3">
        <div class="input-group">
          <span class="input-group-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
              class="bi bi-telephone text-primary" viewBox="0 0 16 16">
              <path
                d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
            </svg>
          </span>
          <input type="number" class="form-control" id="phonenumber" placeholder="Phone Number" wire:model="phonenumber"
            name="phone" value="">
        </div>
        <div>
          @error('phonenumber')<label class="help-block text-danger ">{{$message}}</label>
          @enderror
        </div>
      </div>
      <div class="col-12 pb-3">
        <textarea class="form-control" id="message" placeholder="Message *" wire:model="message" name="message"
          rows="3"></textarea>
        <div>
          @error('message')<label class="help-block text-danger ">{{$message}}</label>
          @enderror
        </div>
      </div>
      <div class="col-12 pb-4">
        <div class="d-grid">
          <button class="btn  btn-lg text-black" style="background: #FFBF34" type="submit" wire:target="submitForm">Send
            Message</button>
        </div>
      </div>
    </div>

  </form>
</div>