@extends('layouts.app')

@section('content')
<div class="container">
    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div> -->
    <div class="row">
        <div class="col-lg-4  md-4">
            <div class="card border-info" style="width: 18rem;">
                <img src="/images/Me.jpg" class="card-img-top rounded-circle" alt="profile">
                <div class="card-body">
                    <h5 class="card-title">Farook Fazni</h5>
                    <p class="card-text">G/2/3 Samapaura Flat Arnold Rathnayaka Mawatha Colombo-10.</p>
                </div>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                        Edit Profile
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">Testing</a>
                    <a href="#" class="list-group-item list-group-item-action">vaccine</a>
                    <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
                    <!-- <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">A disabled link item</a> -->
                </div>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>
        <div class="col-lg-8 md-8">
            <div class="card  border-info">
                <div class="row g-0">
                    <div>
                        <div class="card-body">
                            <h3 class="card-title">Profile</h3>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="fullName" placeholder="Full_Name">
                                <label for="fullName">Full Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="idNo" placeholder="id_no">
                                <label for="idNo">ID</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="mobileNum" placeholder="Mobile_Num">
                                <label for="mobileNum">Mobile Number</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="address" rows="3" placeholder="Address"></textarea>
                                <label for="address">Address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="city" placeholder="City">
                                <label for="city">City</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="dob" placeholder="Dob">
                                <label for="dob">Date of Birth</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="reg" placeholder="reg">
                                <label for="reg">Register Date</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Profile Picture</label>
                                <input class="form-control" type="file" id="profilePicture">
                            </div>
                            <div>
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection