<div class="form-container">

    <div class="form-child">

        <form method="POST" action="{{ url('/insert') }}">
            @csrf
            <div class="form-group">
                <label for="firstName">First Name</label>
                <input type="text" class="form-control" id="formFirstName" placeholder="First Name" name="first_name">

            </div>
            <div class="form-group">
                <label for="lastName">Last Name</label>
                <input type="text" class="form-control" id="formLastName" placeholder="Last Name" name="last_name">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"
                    name="user_email">

            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"
                    name="user_password">
            </div>
            <div class="form-group">
                <label for="fullAddress">Full Address</label>
                <input type="text" class="form-control" id="formFullAddress" placeholder="Full Address"
                    name="user_address">

            </div>
            <div class="form-group">
                <label for="country">Country</label>
                <input type="text" class="form-control" id="formCountry" placeholder="Country" name="user_country">

            </div>

            <div class="form-group">
                <label for="country">State</label>
                <input type="text" class="form-control" id="formState" placeholder="Country" name="user_state">

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>


</div>
