<x-section title="Staff">
    <div class="d-flex justify-content-center">
        <div class="col-md-12 my-5">
            <h2>Staff</h2>
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Gender</th>
                        <th scope="col">DOB</th>
                        <th scope="col">Department</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Address</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $staff )
                    <tr>
                        <th scope="row">{{ $staff->name }}</th>
                        <td>{{ $staff->email }}</td>
                        <td>{{ $staff->gender }}</td>
                        <td>{{ $staff->dob }}</td>
                        <td>{{ $staff->department }}</td>
                        <td>{{ $staff->mobile }}</td>
                        <td>{{ $staff->address }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-section>