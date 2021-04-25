<x-section title="Applied Loan">
    <div class="d-flex justify-content-center">
        <div class="col-md-12 my-5">
            <h2>Applied Loan</h2>
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name of Applicant</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Request date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($loans as $loan )
                    <tr>
                        <th scope="row">{{ $loan->applied_by }}</th>
                        <td>{{ $loan->request_amount }}</td>
                        <td>{{ $loan->created_at }}</td>
                        <td>@if ($loan->request_status == 'Approved')
                            <span class="badge badge-success">Approved</span>
                            @elseif ($loan->request_status == 'Canceled') <span
                                class="badge badge-warning">Canceled</span>
                            @elseif ($loan->request_status == 'Rejected') <span
                                class="badge badge-danger">Rejected</span>
                            @else
                            <span class="badge badge-warning">Pending</span>
                            @endif</td>

                        @if ($loan->request_status == null)
                        <td>
                            <a href="{{ route('loan.edit',$loan->id) }}" class="text-primary"><i
                                    class="icon-copy fa fa-pencil-square-o" aria-hidden="true"></i>
                                Edit</a>
                            @else
                        <td>
                            No action required
                        </td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-section>