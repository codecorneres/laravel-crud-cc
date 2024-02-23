<link href="{{ URL::asset('custom.css') }} " rel="stylesheet">
<div class="container-fluid" id="main-body">
    <div class="back-btn">
        <a href="{{ url('/add') }}" class="btn-back">Go To Registration Form</a></tr>
    </div>
    <table class="table">
        <thead>

            <tr>
                <th>S.No.</th>
                <th>First Name</th>
                <th>Last name</th>
                <th>Email Address</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>Country</th>
                <th>State</th>
                <th>Gender</th>
                <th>Qualification</th>
                <th>Course</th>
                <th>Adhar card</th>
                <th>Action</th>
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
