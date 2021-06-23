@extends('layouts.app')

@section('content')

<body class="home-body">
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
            <div class="col-md-4">
                <div class="card card-profile">
                    <div class="card-avatar">
                        <a href="javascript:;">
                            <img class="img" src="/images/Me.jpg" />
                        </a>
                    </div>
                    <div class="card-body">
                        <h6 class="card-category text-gray">963250118 v</h6>
                        <h4 class="card-title">Farook Fazni</h4>
                        <p class="card-description">
                            G/2/3 Samapura Flats Arnold Rathnayaka Mawatha Colombo-10
                        </p>
                    </div>
                </div>
                <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <ul class="nav flex-column">
                            <a class="navbar-brand" href="#">
                                <img src="/images/Me.jpg" class="rounded-circle" alt="profile" width="200" height="200">
                            </a>
                            <li class="nav-item">
                                <a href="/profile" class="nav-link">
                                    My Profile
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/editProfile" class="nav-link active">Edit Profile</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Testing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Vaccaine</a>
                            </li>
                        </ul>
                    </div>
                </nav> -->
            </div>
            <div class="col-md-8">
                @yield('editProfile')
                @yield('Profile')
            </div>
        </div>
    </div>
</body>
@endsection