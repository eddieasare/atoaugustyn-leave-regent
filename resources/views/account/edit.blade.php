<x-section title="Add Staff">
    <div class="d-flex justify-content-center">
        <div class="col-md-6 my-5">
            <h2>Update Account</h2>
            <br>
            <form action="{{ route('account.update', $user->id) }}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                        value="{{ $user->name }}">
                    @error('name')
                    <div class="text-danger" role="alert">
                        {{ $message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                        value="{{ $user->email }}">
                    @error('email')
                    <div class="text-danger" role="alert">
                        {{ $message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" class="form-control @error('dob') is-invalid @enderror" name="dob"
                        value="{{ $user->dob }}">
                    @error('dob')
                    <div class="text-danger" role="alert">
                        {{ $message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="department">Department</label>
                    <select class="custom-select @error('type') is-invalid @enderror" value="{{ $user->department }}"
                        name="department">
                        <option selected>{{ $user->department }}</option>
                        <option value="Sick Leave">Sick Leave</option>
                        <option value="Vacation">Vacation</option>
                        <option value="Work from Home">Work from Home</option>
                    </select>
                    @error('department')
                    <div class="text-danger" role="alert">
                        {{ $message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select class="custom-select @error('gender') is-invalid @enderror" value="{{ $user->gender }}"
                        name="gender">
                        <option selected>{{ $user->gender }}</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    @error('gender')
                    <div class="text-danger" role="alert">
                        {{ $message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="mobile">Mobile Number</label>
                    <input type="number" class="form-control @error('mobile') is-invalid @enderror" name="mobile"
                        value="{{ $user->mobile }}">
                    @error('mobile')
                    <div class="text-danger" role="alert">
                        {{ $message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control @error('address') is-invalid @enderror" name="address"
                        value="{{ $user->address }}">
                    @error('address')
                    <div class="text-danger" role="alert">
                        {{ $message}}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Update Account</button>
            </form>
        </div>
    </div>
</x-section>