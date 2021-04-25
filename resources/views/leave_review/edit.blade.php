<x-section title="Loan Application">
    <div class="d-flex justify-content-center">
        <div class="col-md-6 my-5">
            @if ($leave->status == 1)
            <div class="alert alert-danger" role="alert">
                This leave request has been canceled by the user already. No action is required
            </div> @endif
            <h2>Loan Application Review</h2>
            <br>
            <form action="{{ route('leave_review.update', $leave->id) }}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="type">Type</label>
                    <select class="custom-select @error('type') is-invalid @enderror" name="type" required>
                        <option selected>Please select</option>
                        <option>Sick Leave</option>
                        <option>Vacation</option>
                        <option>Work from Home</option>
                    </select>
                    @error('type')
                    <div class="text-danger" role="alert">
                        {{ $message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="start date">Start Date</label>
                    <input type="number" name="start_date"
                        class="form-control @error('start_date') is-invalid @enderror" value="{{ $leave->start_date }}">
                    @error('start_date')
                    <div class="text-danger" role="alert">
                        {{ $message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="end date">End Date</label>
                    <input type="number" class="form-control @error('end_date') is-invalid @enderror" name="end_date"
                        value="{{ $leave->end_date }}">
                    @error('end_date')
                    <div class="text-danger" role="alert">
                        {{ $message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="applied by">Applied By</label>
                    <input type="text" class="form-control" value="{{ Auth::user()->name }}" name="applied_by">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea type="text" name="description" value="{{ $leave->description }}"
                        class="form-control @error('description') is-invalid @enderror">{{ $leave->description }}</textarea>
                </div>
                @error('description')
                <div class="text-danger mb-4" role="alert">
                    {{ $message}}
                </div>
                @enderror
                @if (Auth::user()->role == 'Staff')
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" name="status" type="hidden" value="0">
                        <input class="form-check-input" name="status" type="checkbox" value="1">
                        <label class="form-check-label text-danger" for="checkbox">Cancel Loan Request</label>
                    </div>
                </div>
                @endif
                <div class="form-group">
                    <label for="request status">Request Status</label>
                    <select class="custom-select @error('request_status') is-invalid @enderror" name="request_status"
                        required>
                        <option selected>Please select</option>
                        <option>Canceled</option>
                        <option>Accepted</option>
                        <option>Rejected</option>
                    </select>
                    @error('type')
                    <div class="text-danger" role="alert">
                        {{ $message}}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary mt-3">Confirm Review</button>
            </form>
        </div>
    </div>
</x-section>