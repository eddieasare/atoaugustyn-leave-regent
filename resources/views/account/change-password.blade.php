<x-section title="Update Password">
    <div class="d-flex justify-content-center">
        <div class="col-md-6 my-5">
            <h2 class="mb-2">Update Password</h2>
            <p>Please use a long password with a letter, symbol, uppercase and number</p>
            <br>
            <form action="{{ route('leave.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="current_password">Current Password</label>
                    <input type="password" name="current_password"
                        class="form-control @error('current_password') is-invalid @enderror">
                    @error('current_password')
                    <div class="text-danger" role="alert">
                        {{ $message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">New Password</label>
                    <input type="password" class="form-control" name="password">
                    @error('password')
                    <div class="text-danger" role="alert">
                        {{ $message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="end date">Confirm Password</label>
                    <input type="password" class="form-control" name="password_confirmation">
                </div>
                <button type="submit" class="btn btn-primary">Update Password</button>
            </form>
        </div>
    </div>
</x-section>