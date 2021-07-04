@extends('layouts.app')

@section('testing')

<body class="home-body">
    <div class="container">
        @if (session('status'))
        <div class="alert  alert-icon alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <i class="mdi mdi-check-all"></i>
            <strong>Good!</strong> {{ session('status') }}
        </div>
        @endif
        <form method="POST" action="{{ route('storetest') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="card hover card-shadow">
                        <div class="card-header header">
                            <h6 class="card-title">Personal Information</h6>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="ino">ID No</label>
                                <input type="text" class="form-control" id="ino" name="ino" placeholder="ID No">
                            </div>
                            <!-- <div class="mb-3">
                                <label for="floatingInput">Order No</label>
                                <input type="text" class="form-control" id="floatingInput" placeholder="Order No">

                            </div> -->
                            <div class="mb-3">
                                <label for="name">Full Name</label>
                                <input type="name" class="form-control" id="name" name="name" placeholder="Full Name">

                            </div>
                            <div class="mb-3">
                                <label for="mobile">Mobile No</label>
                                <input type="number" class="form-control" id="mobile" name="mobile" placeholder="Mobile No">

                            </div>
                            <div class="mb-3">
                                <label for="address">Address</label>
                                <textarea type="time" class="form-control" id="address" name="address" row="4" placeholder="Address"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card hover card-shadow">
                        <div class="card-header header">
                            <h6 class="card-title">Testing Information</h6>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="testtype">Test Type</label>
                                <input class="form-control" list="datalistOptions" id="testtype" name="testtype" placeholder="Type">
                                <datalist id="datalistOptions">
                                    <option value="PCR">
                                    <option value="antigen">
                                </datalist>
                            </div>
                            <div class="mb-3">
                                <label for="testdate">Date</label>
                                <input type="date" class="form-control" id="testdate" name="testdate" placeholder="Date">
                            </div>
                            <div class="mb-3">
                                <label for="testtime">Time</label>
                                <input type="time" class="form-control" id="testtime" name="testtime" placeholder="Time">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary mb-3">New Request fot Testing</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

@endsection