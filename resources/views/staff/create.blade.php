<x-section title="Add Staff">
    <div class="d-flex justify-content-center">
        <div class="col-md-6 my-5">
            <h2>Create Staff</h2>
            <br>
            <form action="{{ route('staff.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                        value="{{ old('name') }}">
                    @error('name')
                    <div class="text-danger" role="alert">
                        {{ $message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                        value="{{ old('email') }}">
                    @error('email')
                    <div class="text-danger" role="alert">
                        {{ $message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                    @error('password')
                    <div class="text-danger" role="alert">
                        {{ $message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" class="form-control @error('dob') is-invalid @enderror" name="dob"
                        value="{{ old('dob') }}">
                    @error('dob')
                    <div class="text-danger" role="alert">
                        {{ $message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="department">Department</label>
                    <select class="custom-select @error('type') is-invalid @enderror" value="{{ old('department') }}"
                        name="department">
                        <option selected>Please select</option>
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
                    <select class="custom-select @error('gender') is-invalid @enderror" value="{{ old('gender') }}"
                        name="gender">
                        <option selected>Please select</option>
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
                        value="{{ old('mobile') }}">
                    @error('mobile')
                    <div class="text-danger" role="alert">
                        {{ $message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control @error('address') is-invalid @enderror" name="address"
                        value="{{ old('address') }}">
                    @error('address')
                    <div class="text-danger" role="alert">
                        {{ $message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="role">Role</label>
                    <select class="custom-select @error('role') is-invalid @enderror" name="role" required>
                        <option selected>Please select</option>
                        <option>Admin</option>
                        <option>Manager</option>
                        <option>Staff</option>
                    </select>
                    @error('role')
                    <div class="text-danger" role="alert">
                        {{ $message}}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
</x-section>