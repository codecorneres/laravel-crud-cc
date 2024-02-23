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
                    <label>First Name</label>
                    <input type="text" class="form-control" id="formFirstName" placeholder="First Name"
                        name="first_name" value="{{ old('first_name') }}">
                    <span class="text-danger">
                        @error('first_name')
                            {{ $message }}
                        @enderror
                    </span>

                </div>
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" class="form-control" id="formLastName" placeholder="Last Name"
                        name="last_name" value="{{ old('last_name') }}">
                    <span class="text-danger">
                        @error('last_name')
                            {{ $message }}
                        @enderror
                    </span>

                </div>
                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"
                        name="user_email" value="{{ old('user_email') }}">
                    <span class="text-danger">
                        @error('user_email')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="form-group">
                    <label>Phone Number</label>
                    <input type="tel" class="form-control" id="exampleInputPassword1" placeholder="Phone Number"
                        name="user_phn" value="{{ old('user_phn') }}">
                    <span class="text-danger">
                        @error('user_phn')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="form-group">
                    <label>Full Address</label>
                    <input type="text" class="form-control" id="formFullAddress" placeholder="Full Address"
                        name="user_address" value="{{ old('user_address') }}">
                    <span class="text-danger">
                        @error('user_address')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="form-group">
                    <label>Country</label>
                    <input type="text" class="form-control" id="formCountry" placeholder="Country"
                        name="user_country" value="{{ old('user_country') }}">
                    <span class="text-danger">
                        @error('user_country')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="form-group">
                    <label>State</label>
                    <input type="text" class="form-control" id="formState" placeholder="State" name="user_state"
                        value="{{ old('user_state') }}">
                    <span class="text-danger">
                        @error('user_state')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="form-group">
                    <h5>Gender</h5>
                    <label>Male</label>
                    <input type="radio" class="form-control" id="formGenderMale" name="user_gender" value="Male"
                        @if (old('user_gender') == 'Male') checked @endif>
                    <label>Female</label>
                    <input type="radio" class="form-control" id="formGenderFemale" name="user_gender" value="Female"
                        @if (old('user_gender') == 'Female') checked @endif>
                    <label>Other</label>
                    <input type="radio" class="form-control" id="formGenderOther" name="user_gender" value="Other"
                        @if (old('user_gender') == 'Other') checked @endif>
                    <span class="text-danger">
                        @error('user_gender')
                            {{ $message }}
                        @enderror
                    </span>
                </div>


                <div class="form-group">
                    <h5>Highest Qualification</h5>
                    <label>Senior Secondary </label>
                    <input type="checkbox" class="form-control" name="user_qalification" value="12th"
                        @if (old('user_qalification') == '12th') checked @endif>
                    <label>Bechelors</label>
                    <input type="checkbox" class="form-control" name="user_qalification" value="Bechelors"
                        @if (old('user_qalification') == 'Bechelors') checked @endif>
                    <label>Master's</label>
                    <input type="checkbox" class="form-control" name="user_qalification" value="Master"
                        @if (old('user_qalification') == 'Master') checked @endif>
                    <span class="text-danger">
                        @error('user_qalification')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="form-group">
                    <label>Choose a Course:</label>

                    <select name="addCourse">
                        <option value="Art" @if (old('addCourse') == 'Art') selected @endif>Art</option>
                        <option value="Non-medical" @if (old('addCourse') == 'Non-medical') selected @endif>
                            Non-medical
                        </option>
                        <option value="Medical" @if (old('addCourse') == 'Medical') selected @endif>
                            Medical
                        </option>
                        <option value="BA" @if (old('addCourse') == 'BA') selected @endif>
                            Bechelors of art
                        </option>
                        <option value="Bsc" @if (old('addCourse') == 'Bsc') selected @endif>
                            Bechelors of science
                        </option>
                        <option value="Bcom" @if (old('addCourse') == 'Bcom') selected @endif>
                            Bechelors of commerce</option>
                        <option value="BBA" @if (old('addCourse') == 'BBA') selected @endif>
                            Bachelor of Business Administration
                        </option>
                        <option value="MA" @if (old('addCourse') == 'MA') selected @endif>
                            Masters of art
                        </option>
                        <option value="Msc" @if (old('addCourse') == 'Msc') selected @endif>
                            Masters of science
                        </option>
                        <option value="Mcom" @if (old('addCourse') == 'Mcom') selected @endif>
                            Masters of commerce
                        </option>
                        <option value="MBA" @if (old('addCourse') == 'MBA') selected @endif>
                            Masters of Business Administration</option>
                    </select>
                    <span class="text-danger">
                        @error('addCourse')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                {{-- <div class="form-group">
                    <label for="country">Adhar card</label>
                    <input type="file" class="form-control" id="myfile" name="myfile">

                </div> --}}
                <div class="form-group">
                    <label>Adhar card</label>
                    <input type="file" class="form-control" id="myfile" name="myfile[]" multiple>
                    <span class="text-danger">
                        @error('myfile')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="btn-sub"> <button type="submit" class="btn btn-primary">Submit</button></div>
            </form>

        </div>


    </div>
</body>

</html>
