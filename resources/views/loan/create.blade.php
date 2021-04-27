<x-section title="Loan Application">
    <div class="d-flex justify-content-center">
        <div class="col-md-6 my-5">
            <h2>Apply for Loan</h2>
            <br>
            <form action="{{ route('loan.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="start date">Request Amount</label>
                    <input type="number" name="request_amount"
                        class="form-control @error('request_amount') is-invalid @enderror"
                        value="{{ old('request_amount') }}">
                    @error('request_amount')
                    <div class="text-danger" role="alert">
                        {{ $message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="end date">Instalment Amount</label>
                    <input type="number" class="form-control @error('instal_amount') is-invalid @enderror"
                        name="instal_amount" value="{{ old('instal_amount') }}">
                    @error('instal_amount')
                    <div class="text-danger" role="alert">
                        {{ $message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control" value="{{ Auth::user()->id }}" name="user_id">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea type="text" name="description" value="{{ old('description') }}"
                        class="form-control @error('description') is-invalid @enderror"></textarea>
                </div>
                @error('description')
                <div class="text-danger mb-4" role="alert">
                    {{ $message}}
                </div>
                @enderror
                <button type="submit" class="btn btn-primary">Submit Request</button>
            </form>
        </div>
    </div>
</x-section>