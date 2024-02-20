<table class="table">
    <thead>

        <tr>
            <th scope="col">S.No.</th>
            <th scope="col">First Name</th>
            <th scope="col">Last name</th>
            <th scope="col">Email Address</th>

            <th scope="col">Address</th>
            <th scope="col">Country</th>
            <th scope="col">State</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr><a href="{{ url('/add') }}" class="btn-danger">Add</a></tr>
        @foreach ($customers as $register)
            <tr>
                <td>{{ $register->id }}</td>
                <td>{{ $register->FirstName }}</td>
                <td>{{ $register->LastName }}</td>
                <td>{{ $register->Email }}</td>
                <td>{{ $register->Address }}</td>
                <td>{{ $register->Country }}</td>
                <td>{{ $register->State }}</td>
                <td> <a href="{{ url('/edit') }}/{{ $register->id }}" class="btn-danger">Update</a>
                    <a href="{{ url('/delete') }}/{{ $register->id }}" class="btn-danger">Delete</a>

                </td>
            </tr>
        @endforeach


    </tbody>
</table>
