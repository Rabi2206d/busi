@extends('AdminDashboard.Layout')
@section('item')
    <div class="container mt-5">
        <center>
            <h3 >Update Campus Details</h3>
        </center>
        <form action="/upcampus/{{ $up->Email }}" method="post" class="needs-validation" novalidate>
   @csrf
    <div class="row">
        <div class="col-lg-6 mt-5">
            <label for="CampusName" style=" font-size:13px">Campus Name</label>
            <input type="text" value="{{$up->Name}}" required id="CampusName" name="campusname"  placeholder="Enter Campus Name" class="form-control" >
            <div class="invalid-feedback" >
                Campus Name is Required
              </div>
        </div>
        <div class="col-lg-6 mt-5">
            <label for="incharge" style=" font-size:13px">Incharge Name</label>
            <input type="incharge"  value="{{$up->Incharge}}" required id=" incharge" name="incharge"  placeholder="Incharge Name" class="form-control" >
            <div class="invalid-feedback" >
                Incharge Name is Required
              </div>
        </div>
        
    </div>
    <div class="row">
        <div class="col-lg-6 mt-5">
            <label for="campusaddress" style=" font-size:13px">Campus Address</label>
            <input type="text"  value="{{$up->Address}}" required id="campusaddress" name="campusaddress"  placeholder="Campus Address" class="form-control" >
            <div class="invalid-feedback" >
                Campus Address is Required
              </div>
        </div>
        <div class="col-lg-6 mt-5">
            <label for="Email" style=" font-size:13px">Email</label>
            <input type="Email"  value="{{$up->Email}}" required id=" Email" name="Email"  placeholder="Enter Email" class="form-control" >
            <div class="invalid-feedback" >
                Email is Required
              </div>
        </div>
        
    </div>
    <div class="row">
        <div class="col-lg-6 mt-5">
            <label for="PhoneNo" style=" font-size:13px">Phone No</label>
            <input type="text"  value="{{$up->number}}" required id="PhoneNo" name="PhoneNo" style="" placeholder="Enter Phone No" class="form-control" >
            <div class="invalid-feedback" >
                Phone No is Required
              </div>
        </div>
        <div class="col-lg-6 mt-5">
            <label for="Password" style="font-size: 13px">Password</label>
            <input type="password" required id="Password" name="Password" placeholder="Enter Password" class="form-control" oninput="validatePassword(this)">
            <label for="" style="font-size: 15px; margin-top: 12px; padding-right: 5px">Show Password</label>
            <input type="checkbox" onclick="showpass()">
            <div id="passwordError" class="invalid-feedback text-danger"></div>
        </div>
        
        
    </div>
    <button type="submit" class="btn btn-primary mt-5">Submit</button>
</form>


</div>
<script>
    function validatePassword(passwordInput) {
        var password = passwordInput.value;
        var passwordError = document.getElementById('passwordError');
    
        // Check if the password length is between 8 and 13 characters
        if (password.length < 8 || password.length > 13) {
            passwordError.textContent = 'Password must be 8 to 13 characters long.';
            passwordInput.setCustomValidity('Password must be 8 to 13 characters long.');
        } else {
            passwordError.textContent = '';
            passwordInput.setCustomValidity('');
        }
    }
    </script>
@endsection