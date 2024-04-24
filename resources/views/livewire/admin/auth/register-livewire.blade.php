<div class="p-3">
    <div class="col-md-12">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
    <form wire:submit.prevent="register">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input wire:model="name" type="name" class="form-control" id="name" placeholder="name">
            @error('name')
                <span class="text-danger error">{{ $message }}</span>
            @enderror
        </div>


        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input wire:model="email" type="email" class="form-control" id="email" placeholder="name@example.com">
            @error('email')
                <span class="text-danger error">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone:</label>
            <input wire:model.defer="phone" type="text" class="form-control" id="phone" placeholder="Phone">
            @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
        </div>


        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input wire:model="password" type="password" class="form-control" id="password" placeholder="Password">
            @error('password') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="confirmPassword" class="form-label">Confirm Password:</label>
            <input wire:model="password_confirmation" type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password">
            @error('confirmPassword') <span class="text-danger">{{ $message }}</span> @enderror
        </div>


        <button type="submit" class="btn btn-primary d-flex mx-auto">Register</button>
    </form>
</div>
