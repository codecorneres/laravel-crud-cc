<link href="{{ URL::asset('custom.css') }} " rel="stylesheet">
<div class="container-fluid" id="main-body">
    <div class="back-btn">
        <a href="{{ url('/add') }}" class="btn-back">Go To Registration Form</a></tr>
    </div>
    <table class="table">
        <thead>

            <tr>
                <th scope="col">S.No.</th>
                <th scope="col">First Name</th>
                <th scope="col">Last name</th>
                <th scope="col">Email Address</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Address</th>
                <th scope="col">Country</th>
                <th scope="col">State</th>
                <th scope="col">Gender</th>
                <th scope="col">Qualification</th>
                <th scope="col">Course</th>
                <th scope="col">Adhar card</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($customers as $register)
                <tr>
                    <td>{{ $register->id }}</td>
                    <td>{{ $register->FirstName }}</td>
                    <td>{{ $register->LastName }}</td>
                    <td>{{ $register->Email }}</td>
                    <td>{{ $register->PhoneNumber }}</td>
                    <td>{{ $register->Address }}</td>
                    <td>{{ $register->Country }}</td>
                    <td>{{ $register->State }}</td>
                    <td>{{ $register->Gender }}</td>
                    <td>{{ $register->Qualification }}</td>
                    <td>{{ $register->Course }}</td>
                    <td>{{ $register->Adharcard }}</td>
                    <td> <a href="{{ url('/edit') }}/{{ $register->id }}" class="btn-update">Update</a>
                        <a href="{{ url('/delete') }}/{{ $register->id }}" class="btn-delete">Delete</a>

                    </td>
                </tr>
            @endforeach


        </tbody>
    </table>
</div>
