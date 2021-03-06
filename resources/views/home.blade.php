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
                @foreach($data As $key => $value)
                <div class="card hover card-shadow card-profile">
                    <div class="card-avatar">
                        <a href="javascript:;">
                            <img class="img" src="/images/profile/{{ $value->propic}}" />
                        </a>
                    </div>
                    <div class="card-body">
                        <h6 class="card-category text-gray">{{ $value->ino}}</h6>
                        <h4 class="card-title">{{ $value->name}}</h4>
                        <p class="card-description">
                            {{ $value->address}} {{ $value->city}}
                        </p>
                        <p class="card-description">
                            <b>Contacts:</b> {{ $value->mobile}} | {{ $value->email}}
                        </p>
                    </div>
                </div>
                @endforeach
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
                <div class="card hover card-shadow">
                    <div class="card-header card-header-warning">
                        <h4 class="card-title">Testing Requests</h4>
                        <p class="card-category">Recent Tests</p>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-hover">
                            <thead class="text-warning">
                                <th>ID_no</th>
                                <th>Name</th>
                                <th>Testing Type</th>
                                <th>Date</th>
                                <th>Cancel Request</th>
                            </thead>
                            <tbody>
                                <form method="POST" action="{{ route('test')}}">
                                    @foreach($test As $key => $item)
                                    <tr>
                                        <td>{{$item['id']}}</td>
                                        <td>{{$item['name']}}</td>
                                        <td>{{$item['testtype']}}</td>
                                        <td>{{$item['testdate']}}</td>
                                        <td style="text-align: center;"><a href={{"delete/".$item['id']}}><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                    </tr>
                                    @endforeach
                                </form>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row;" style="margin-top: 2rem;">
            <div class="col-md-12">
                <div class="card hover card-shadow">
                    <div class="card-header card-header-warning">
                        <h4 class="card-title">Vaccine Request</h4>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-hover">
                            <thead class="text-warning">
                                <th>ID_no</th>
                                <th>Name</th>
                                <th>Vaccaine Type</th>
                                <th>Dose</th>
                                <th>Date</th>
                                <th>Cancel Request</th>
                            </thead>
                            <tbody>
                                <form method="POST" action="{{ route('vac')}}">
                                    @foreach($vac As $key => $item)
                                    <tr>
                                        <td>{{$item['id']}}</td>
                                        <td>{{$item['name']}}</td>
                                        <td>{{$item['vactype']}}</td>
                                        <td>{{$item['dose']}}</td>
                                        <td>{{$item['vacdate']}}</td>
                                        <td style="text-align: center;"><a href={{"deletevac/".$item['id']}}><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                    </tr>
                                    @endforeach
                                </form>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection