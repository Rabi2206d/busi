@extends("AdminDashboard.Layout");
@section('item')
<div class="container mt-5">
    <center>
        <h2>Request For New Students</h2>
    </center>
    <div class="card-body mt-5">
        <div class="chart-area bg1">
            <div class="table-responsive">
               <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                    <thead>
                        <tr>
                        
                            <th>Campus Name</th>
                            <th>Incharge Name</th>
                            <th>Address</th>
                            <th>Campus Email</th>
                            <th>Phone NO</th>
                            <th>Password</th>
                            <th>Action</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                  
                </table>
            </div>
        </div>
    </div>
</div>

@endsection