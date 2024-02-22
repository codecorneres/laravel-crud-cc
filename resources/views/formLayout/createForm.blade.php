<html>

<head>
    <link href="{{ URL::asset('custom.css') }} " rel="stylesheet">
</head>

<body>
    <div class="form-container">

        <div class="form-child">

            <form method="POST" action="{{ url('/insert') }}" enctype="multipart/form-data">
                @csrf
                <h2>Student Registration Form</h2>
                <div class="form-group">
                    <label for="firstName">First Name</label>
                    <input type="text" class="form-control" id="formFirstName" placeholder="First Name"
                        name="first_name">

                </div>
                <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" class="form-control" id="formLastName" placeholder="Last Name"
                        name="last_name">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"
                        name="user_email">

                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Phone Number</label>
                    <input type="tel" class="form-control" id="exampleInputPassword1" placeholder="Phone Number"
                        name="user_phn">
                </div>
                <div class="form-group">
                    <label for="fullAddress">Full Address</label>
                    <input type="text" class="form-control" id="formFullAddress" placeholder="Full Address"
                        name="user_address">

                </div>
                <div class="form-group">
                    <label for="country">Country</label>
                    <input type="text" class="form-control" id="formCountry" placeholder="Country"
                        name="user_country">

                </div>

                <div class="form-group">
                    <label for="country">State</label>
                    <input type="text" class="form-control" id="formState" placeholder="Country" name="user_state">

                </div>

                <div class="form-group">
                    <h5>Gender</h5>
                    <label for="country">Male</label>
                    <input type="radio" class="form-control" id="formGenderMale" name="user_gender" value="Male">
                    <label for="country">Female</label>
                    <input type="radio" class="form-control" id="formGenderFemale" name="user_gender" value="Female">
                    <label for="country">Other</label>
                    <input type="radio" class="form-control" id="formGenderOther" name="user_gender" value="Other">
                </div>


                <div class="form-group">
                    <h5>Highest Qualification</h5>
                    <label>Senior Secondary </label>
                    <input type="checkbox" class="form-control" name="user_qalification" value="12th">
                    <label>Bechelors</label>
                    <input type="checkbox" class="form-control" name="user_qalification" value="Bechelors">
                    <label>Master's</label>
                    <input type="checkbox" class="form-control" name="user_qalification" value="Master">
                </div>
                <div class="form-group">
                    <label>Choose a Course:</label>

                    <select name="addCourse">
                        <option value="Art">Art</option>
                        <option value="Non-medical">Non-medical</option>
                        <option value="Medical">Medical</option>
                        <option value="BA">Bechelors of art</option>
                        <option value="Bsc">Bechelors of science</option>
                        <option value="Bcom">Bechelors of commerce</option>
                        <option value="BBA">Bachelor of Business Administration</option>
                        <option value="MA">Masters of art</option>
                        <option value="Msc">Masters of science</option>
                        <option value="Mcom">Masters of commerce</option>
                        <option value="MBA">Masters of Business Administration</option>
                    </select>
                </div>
                {{-- <div class="form-group">
                    <label for="country">Adhar card</label>
                    <input type="file" class="form-control" id="myfile" name="myfile">

                </div> --}}
                <div class="form-group">
                    <label for="country">Adhar card</label>
                    <input type="file" class="form-control" id="myfile" name="myfile[]" multiple>

                </div>
                <div class="btn-sub"> <button type="submit" class="btn btn-primary">Submit</button></div>
            </form>

        </div>


    </div>
</body>

</html>
