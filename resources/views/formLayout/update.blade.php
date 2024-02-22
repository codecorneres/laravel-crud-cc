<div class="form-container">

    <div class="form-child">

        <form method="POST" action="{{ url('/update') }}/{{ $customers->id }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="firstName">First Name</label>
                <input type="text" class="form-control" id="formFirstName" placeholder="First Name" name="first_name"
                    value="{{ $customers->FirstName }}">

            </div>
            <div class="form-group">
                <label for="lastName">Last Name</label>
                <input type="text" class="form-control" id="formLastName" placeholder="Last Name" name="last_name"
                    value="{{ $customers->LastName }}">

            </div>

            <div class="form-group">
                <label for="fullAddress">Full Address</label>
                <input type="text" class="form-control" id="formFullAddress" placeholder="Full Address"
                    name="user_address" value="{{ $customers->Address }}">

            </div>
            <div class="form-group">
                <label for="country">Country</label>
                <input type="text" class="form-control" id="formCountry" placeholder="Country" name="user_country"
                    value="{{ $customers->Country }}">

            </div>

            <div class="form-group">
                <label for="country">State</label>
                <input type="text" class="form-control" id="formState" placeholder="Country" name="user_state"
                    value="{{ $customers->State }}">

            </div>
            <div class="form-group">
                <h5>Gender</h5>
                <label for="country">Male</label>
                <input type="radio" @if ($customers->Gender == 'Male') checked @endif class="form-control"
                    id="formGenderMale" name="user_gender" value="Male">
                <label for="country">Female</label>
                <input type="radio" class="form-control" @if ($customers->Gender == 'Female') checked @endif
                    id="formGenderFemale" name="user_gender" value="Female">
                <label for="country">Other</label>
                <input type="radio" class="form-control" @if ($customers->Gender == 'Other') checked @endif
                    id="formGenderOther" name="user_gender" value="Other">
            </div>


            <div class="form-group">
                <h5>Highest Qualification</h5>
                <label>Senior Secondary </label>
                <input type="checkbox" @if ($customers->Qualification == '12th') checked @endif class="form-control"
                    name="user_qalification" value="12th">
                <label>Bechelors</label>
                <input type="checkbox" @if ($customers->Qualification == 'Bechelors') checked @endif class="form-control"
                    name="user_qalification" value="Bechelors">
                <label>Master's</label>
                <input type="checkbox" @if ($customers->Qualification == 'Master') checked @endif class="form-control"
                    name="user_qalification" value="Master">
            </div>
            <div class="form-group">
                <label>Choose a Course:</label>

                <select name="addCourse">
                    <option @if ($customers->Course == 'Art') selected @endif value="Art">Art</option>
                    <option @if ($customers->Course == 'Non-medical') selected @endif value="Non-medical">Non-medical</option>
                    <option @if ($customers->Course == 'Medical') selected @endif value="Medical">Medical</option>
                    <option @if ($customers->Course == 'BA') selected @endif value="BA">Bechelors of art</option>
                    <option @if ($customers->Course == 'Bsc') selected @endif value="Bsc">Bechelors of science
                    </option>
                    <option @if ($customers->Course == 'Bcom') selected @endif value="Bcom">Bechelors of commerce
                    </option>
                    <option @if ($customers->Course == 'BBA') selected @endif value="BBA">Bachelor of Business
                        Administration</option>
                    <option @if ($customers->Course == 'MA') selected @endif value="MA">Masters of art</option>
                    <option @if ($customers->Course == 'Msc') selected @endif value="Msc">Masters of science
                    </option>
                    <option @if ($customers->Course == 'Mcom') selected @endif value="Mcom">Masters of commerce
                    </option>
                    <option @if ($customers->Course == 'MBA') selected @endif value="MBA">Masters of Business
                        Administration</option>
                </select>
            </div>
            <div class="form-group">
                <img src="{{ URL::asset('uploads/students') }}/{{ $customers->Adharcard }}" alt=""
                    height="70px" width="70px"><br><br>
                <label for="country">Adhar card</label>
                <input type="file" class="form-control" id="myfile" name="myfile">

            </div>



            <button type="submit" class="btn btn-primary">Update</button>
        </form>

    </div>


</div>
