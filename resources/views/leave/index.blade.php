<x-section title="Applied Leave">
    <div class="d-flex justify-content-center">
        <div class="col-md-12 my-5">
            <h2>Applied Leave</h2>
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name of Applicant</th>
                        <th scope="col">Start date</th>
                        <th scope="col">End date</th>
                        <th scope="col">Request date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($leaves as $leave )
                    <tr>
                        <th scope="row">{{ $leave->applied_by }}</th>
                        <td>{{ $leave->start_date }}</td>
                        <td>{{ $leave->end_date }}</td>
                        <td>{{ $leave->created_at }}</td>
                        <td>@if ($leave->request_status == 'Approved')
                            <span class="badge badge-success">Approved</span>
                            @elseif ($leave->request_status == 'Canceled') <span
                                class="badge badge-warning">Canceled</span>
                            @elseif ($leave->request_status == 'Rejected') <span
                                class="badge badge-danger">Rejected</span>
                            @else
                            <span class="badge badge-warning">Pending</span>
                            @endif</td>
                        @if ($leave->request_status == null)
                        <td>
                            <a href="{{ route('leave.edit',$leave->id) }}"><i class="icon-copy fa fa-pencil-square-o"
                                    aria-hidden="true"></i>
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