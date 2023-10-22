@extends('SubAdmin.layout')
@section('item')
    <div class="container">
        <center>
            <h3 >Add Students</h3>
        </center>
<form action="/stdrequest" method="post" class="needs-validation" novalidate>
   @csrf
    <div class="row">
        <div class="col-lg-6 mt-2">
            <label for="studentName" style=" font-size:13px">Student Name</label>
            <input type="text" required id="studentName" name="studentname"  placeholder="Enter Student Name" class="form-control" >
            <div class="invalid-feedback" >
                Student Name is Required
              </div>
        </div>
        <div class="col-lg-6 mt-2">
            <label for="Father" style=" font-size:13px">Father</label>
            <input type="Father" required id=" Father" name="Father"  placeholder="Enter Father Name" class="form-control" >
            <div class="invalid-feedback" >
                Father Name is Required
              </div>
        </div>
        
    </div>
    <div class="row">
        <div class="col-lg-4 mt-3">
            <label for="grno" style=" font-size:13px">Gr No</label>
            <input type="number" required id="grno" name="grno"  placeholder="Enter Gr No " class="form-control" >
            <div class="invalid-feedback" >
                Gr No is Required
              </div>
        </div>
        <div class="col-lg-4 mt-3">
            <label for="class" style=" font-size:13px">Class</label>
            <input type="text" required id="class" name="class"  placeholder="Enter Class " class="form-control" >
            <div class="invalid-feedback" >
                Class is Required
              </div>
        </div>
        <div class="col-lg-4 mt-3">
            <label for="whatsapp" style=" font-size:13px">Whatsapp No</label>
            <input type="number" required id="whatsapp" name="whatapp"  placeholder="Whatsapp No" class="form-control" >
            
            <div class="invalid-feedback" >
                Whatsapp No is Required

              </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4 mt-3">
            <label for="Father" style=" font-size:13px">Father No</label>
            <input type="number" required id="Father" name="FatherNO"  placeholder="Father No " class="form-control" >
            <div class="invalid-feedback" >
              Father Phone No is Required
              </div>
        </div>

        <div class="col-lg-4 mt-3">
            <label for="Mother" style=" font-size:13px">Mother No</label>
            <input type="number" required id="Mother" name="Mother"  placeholder="Mother No" class="form-control" >
            
            <div class="invalid-feedback" >
               Mother Phone No is Required
              </div>
        </div>

        <div class="col-lg-4 mt-3">
            <label for="emer" style=" font-size:13px">Emergency No</label>
            <input type="number" required id="emer" name="emer"  placeholder="Emergency No" class="form-control" >
            
            <div class="invalid-feedback" >
                Emergency No is Required
              </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 mt-3">
            <label for="Date" style=" font-size:13px">Date of Birth</label>
            <input type="date" required id="Date" name="Date"  placeholder="Date of Birth " class="form-control" >
            <div class="invalid-feedback" >
              Date of Birth is Required
              </div>
        </div>

        <div class="col-lg-4 mt-3">
            <label for="addmission" style=" font-size:13px"> Date of Addmission</label>
            <input type="date" required id="addmission" name="addmission"  placeholder="Addmission Date" class="form-control" >
            
            <div class="invalid-feedback" >
                Date of Addmission is Required
              </div>
        </div>

        <div class="col-lg-4 mt-3">
            <label for="Addmission " style=" font-size:13px">Addmission Fee </label>
            <input type="number" required id="Addmission" name="Addmissionfee"  placeholder="Addmission Fee" class="form-control" >
            
            <div class="invalid-feedback" >
                Addmission Fee is Required
              </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 mt-2">
            <label for="reg" style=" font-size:13px">Registration Fee </label>
            <input type="number" required id="reg" name="reg"  placeholder="Enter Registration Fee" class="form-control" >
            <div class="invalid-feedback" >
                Registration Fee is Required
              </div>
        </div>
        <div class="col-lg-3 mt-2">
            <label for="Annual" style=" font-size:13px">Annual Fee</label>
            <input type="number"  id="Annual" name="annual"  placeholder="Enter Annual Fee" class="form-control" required>
            <div class="invalid-feedback" >
                Registration Fee is Required
              </div>
        </div>
        <div class="col-lg-3 mt-2">
            <label for="monthly" style=" font-size:13px">Monthly Fee </label>
            <input type="number" required id="monthly" name="monthly"  placeholder="Enter Monthly Fee" class="form-control" >
            <div class="invalid-feedback" >
                Monthly Fee is Required
              </div>
        </div>
        <div class="col-lg-3 mt-2">
            <label for="discount" style=" font-size:13px">Discount</label>
            <input type="number"  id="discount" name="discount"  placeholder="Enter Discount" class="form-control" >
            
        </div>
       
        
    </div>
    <div class="row mt-5">
        <div class="col-lg-8">
            <h3>Total Amount</h3>
        </div>
        <div class="col-lg-4">
            <center>

                <p id="bill-form" name="total" style="font-size: 20px; border:2px solid black; padding:10px;" value="#FinalPrice">--/-</p>
            </center>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mt-5 mb-5">Submit</button>
</form>


</div>


<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#Addmission, #monthly, #discount,#reg,#Annual').on('input', function() {
        calculateTotalAmount();
    });

    function calculateTotalAmount() {
        var addmissionFee = parseFloat($('#Addmission').val()) || 0;
        var regfee = parseFloat($('#reg').val()) || 0;
        var annual = parseFloat($('#Annual').val()) || 0;
        var monthlyFee = parseFloat($('#monthly').val()) || 0;
        var discount = parseFloat($('#discount').val()) || 0;


        // Calculate the total amount
        var totalAmount = (addmissionFee + monthlyFee + regfee + annual) - discount;

        // Display the result
        $('#bill-form').text(totalAmount + ' /-');
        $('#FinalPrice').val(finalPrice);
    }
});
</script>


@endsection