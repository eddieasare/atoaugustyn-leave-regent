<x-section title="Loan Application">
    <div class="d-flex justify-content-center">
        <div class="col-md-6 my-5">
            <h2>Edit Loan Application</h2>
            <p>Please review and confirm changes</p>
            <br>
            <form action="{{ route('loan.update', $loan->id) }}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="start date">Request Amount</label>
                    <input type="number" name="request_amount"
                        class="form-control @error('request_amount') is-invalid @enderror"
                        value="{{ $loan->request_amount }}">
                    @error('request_amount')
                    <div class="text-danger" role="alert">
                        {{ $message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="end date">Instalment Amount</label>
                    <input type="number" class="form-control @error('instal_amount') is-invalid @enderror"
                        name="instal_amount" value="{{ $loan->instal_amount }}">
                    @error('instal_amount')
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
                    <textarea type="text" name="description" value="{{ $loan->description }}"
                        class="form-control @error('description') is-invalid @enderror">{{ $loan->description }}</textarea>
                </div>
                @error('description')
                <div class="text-danger mb-4" role="alert">
                    {{ $message}}
                </div>
                @enderror
                @if ($loan->status == 1)
                <div class="alert alert-danger" role="alert">
                    Loan request has been cancelled, please apply for a new Loan. 
                </div>
                @else
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" name="status" type="hidden" value="0">
                        <input class="form-check-input" name="status" type="checkbox" value="1">
                        <label class="form-check-label text-danger" for="checkbox">Cancel Loan Request</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Save Change</button>
                @endif
            </form>
        </div>
    </div>
</x-section>