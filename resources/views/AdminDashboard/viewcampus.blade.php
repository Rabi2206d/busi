@extends('AdminDashboard.Layout')
@section("item")

<div class="container mt-5">
    <center>
        <h2>Campus Details</h2>
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
                    <tbody>
                        @foreach($fetchcamp as $fc)
                        <tr>
                            
                            <td>{{$fc->Name}}</td>
                            <td>{{$fc->Incharge}}</td>
                            <td>{{$fc->Address}}</td>
                            <td>{{$fc->Email}}</td>
                            <td>{{$fc->number}}</td>
                            <td>{{$fc->Password}}</td>
                            <td>
                                <center><a href="/campupdate/{{$fc->Email}}" class="btn btn-primary"><i class="fa-solid  fa-trash-can"></i>&nbsp;Update</a></center>
                            </td>
                            <td>
                                <center><a href="/campdelete/{{$fc->Email}}" class="btn btn-danger"><i class="fa-solid  fa-trash-can"></i>&nbsp;Delete</a></center>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
