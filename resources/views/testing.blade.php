@extends('layouts.app')

@section('testing')

<body class="home-body">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card hover card-shadow">
                    <div class="card-header header">
                    <h6 class="card-title">Personal Information</h6>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label>ID No</label>
                            <input type="text" class="form-control" placeholder="ID No">
                        </div>
                        <div class="mb-3">
                            <label for="floatingInput">Order No</label>
                            <input type="text" class="form-control" id="floatingInput" placeholder="Order No">

                        </div>
                        <div class="mb-3">
                            <label for="floatingInput">Full Name</label>
                            <input type="name" class="form-control" id="floatingInput" placeholder="Full Name">

                        </div>
                        <div class="mb-3">
                            <label for="floatingInput">Mobile No</label>
                            <input type="number" class="form-control" id="floatingInput" placeholder="Mobile No">

                        </div>
                        <div class="mb-3">
                            <label for="floatingInput">Address</label>
                            <textarea type="time" class="form-control" id="floatingInput" row="4" placeholder="Address"></textarea>
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
                            <label for="floatingInput">Test Type</label>
                            <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type">
                            <datalist id="datalistOptions">
                                <option value="PCR">
                                <option value="antigen">
                            </datalist>
                        </div>
                        <div class="mb-3">
                            <label for="floatingInput">Date</label>
                            <input type="date" class="form-control" id="floatingInput" placeholder="Date">
                        </div>
                        <div class="mb-3">
                            <label for="floatingInput">Time</label>
                            <input type="time" class="form-control" id="floatingInput" placeholder="Time">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary mb-3">New Request fot Testing</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

@endsection