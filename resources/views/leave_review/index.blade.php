<x-section title="Applied leave">
    <div class="d-flex justify-content-center">
        <div class="col-md-12 my-5">
            <h2>List of Applied leaves</h2>
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
                    @foreach ($leaves as $leave )
                    <tr>
                        <th scope="row">{{ $leave->applied_by }}</th>
                        <td>{{ $leave->request_amount }}</td>
                        <td>{{ $leave->created_at }}</td>
                        <td>@if ($leave->request_status == 'Approved')
                            <span class="badge badge-success">Approved</span>
                            @elseif ($leave->request_status == 'Canceled') <span
                                class="badge badge-danger">Canceled</span>
                            @elseif ($leave->request_status == 'Rejected') <span
                                class="badge badge-danger">Rejected</span>
                            @else
                            <span class="badge badge-warning">Pending</span>
                            @endif</td>
                        <td>
                            <a href="{{ route('leave_review.edit',$leave->id) }}">Review</a>
                        <td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-section>