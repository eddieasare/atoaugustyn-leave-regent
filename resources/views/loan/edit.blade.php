<x-section title="Loan Application">
    <a href="{{ route('loan.index')}}" class="text-primary">Back</a>
    <div class="d-flex justify-content-center">
        <div class="col-md-6 my-5">
            <h2>Edit Loan Application</h2>
            <p>Please review and confirm your changes</p>
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
                    <label for="description">Description</label>
                    <textarea type="text" name="description" value="{{ $loan->description }}"
                        class="form-control @error('description') is-invalid @enderror">{{ $loan->description }}</textarea>
                </div>
                @error('description')
                <div class="text-danger mb-4" role="alert">
                    {{ $message}}
                </div>
                @enderror
                <button type="submit" class="btn btn-success mt-3">Save Change</button>
            </form>
        </div>
    </div>
</x-section>