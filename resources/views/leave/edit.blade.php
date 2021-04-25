<x-section title="Leave Application">
    <div class="d-flex justify-content-center">
        <div class="col-md-6 my-5">
            <h2>Edit Leave Application</h2>
            <br>
            <form action="{{ route('leave.update', $leave->id) }}" method="post">
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
                    <input type="date" name="start_date" class="form-control @error('start_date') is-invalid @enderror"
                        value="{{ $leave->start_date }}">
                    @error('start_date')
                    <div class="text-danger" role="alert">
                        {{ $message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="end date">End Date</label>
                    <input type="date" name="end_date" class="form-control @error('end_date') is-invalid @enderror"
                        value="{{ $leave->end_date }}">
                    @error('end_date')
                    <div class="text-danger" role="alert">
                        {{ $message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="applied by">Applied By</label>
                    <input type="text" class="form-control" name="applied_by" value="{{ Auth::user()->name }}">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea type="text" name="description"
                        class="form-control @error('description') is-invalid @enderror">{{ $leave->description }}</textarea>
                </div>
                @error('description')
                <div class="text-danger mb-4" role="alert">
                    {{ $message}}
                </div>
                @enderror
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" name="status" type="hidden" value="0">
                        <input class="form-check-input" name="status" type="checkbox" value="1">
                        <label class="form-check-label text-danger" for="checkbox">Cancel Leave Request</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Save Change</button>
            </form>
        </div>
    </div>
</x-section>