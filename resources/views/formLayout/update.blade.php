<div class="form-container">

    <div class="form-child">

        <form method="POST" action="{{ url('/update') }}/{{ $customers->id }}">
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
            <button type="submit" class="btn btn-primary">Update</button>
        </form>

    </div>


</div>
