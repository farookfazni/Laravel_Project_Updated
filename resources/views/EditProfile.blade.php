@extends('layouts.app')

@section('editProfile')

<body class="home-body">
    <div class="container">
        <div class="row">
            @if (session('errorMsg'))
            <div class="alert  alert-icon alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <i class="mdi mdi-check-all"></i>
                <strong>Oh nap!</strong> {{ session('errorMsg') }}
            </div>
            @endif
            <div class="col-md-4">
                <div class="card hover card-shadow card-profile">
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
                        <p class="card-description">
                            <b>Contacts:</b> 075 7502298 | farookfazni@gmail.com
                        </p>
                    </div>
                </div>
                <div class="card hover card-shadow card-profile" style="text-align: left;">
                    <div class="card-header header">
                        <h6 class="card-title">Change Password</h6>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" method="POST" action="{{ route('update') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="currentpassword">{{ __('Current Password') }}</label>
                                <input name="currentpassword" type="password" class="form-control @error('currentpassword') is-invalid @enderror" id="currentpassword" placeholder="Current Password">
                                @error('currentpassword')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="newpassword">{{ __('New Password') }}</label>
                                <input name="newpassword" type="password" class="form-control @error('newpassword') is-invalid @enderror" id="newpassword" placeholder="New Password">
                                @error('newpassword')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="conformpassword">{{ __('Conform Password') }}</label>
                                <input name="conformpassword" type="password" class="form-control @error('conformpassword') is-invalid @enderror" id="conformpassword" placeholder="Conform Password">
                                @error('conformpassword')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary mb-3">{{ __('Change Password') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card card-shadow" id="edit-profile">
                    <div class="card-header hover header">
                        <h5 class="card-title">Edit Information</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row mb-3">
                                <label for="text" class="col-md-4 col-form-label text-md-right">{{ __('Full Name') }}</label>

                                <div class="col-md-6 mb-3">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name">

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="text" class="col-md-4 col-form-label text-md-right">{{ __('ID No') }}</label>

                                <div class="col-md-6 mb-3">
                                    <input id="ino" type="text" class="form-control @error('ino') is-invalid @enderror" name="ino">

                                    @error('ino')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="number" class="col-md-4 col-form-label text-md-right">{{ __('Mobile Number') }}</label>

                                <div class="col-md-6 mb-3">
                                    <input id="mobile" type="number" class="form-control @error('mobile') is-invalid @enderror" name="mobile">

                                    @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="text" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                                <div class="col-md-6 mb-3">
                                    <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>

                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="text" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                                <div class="col-md-6 mb-3">
                                    <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city">

                                    @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6 mb-3">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>

                                <div class="col-md-6 mb-3">
                                    <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" name="dob">

                                    @error('dob')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Registration Date') }}</label>

                                <div class="col-md-6 mb-3">
                                    <input id="regdate" type="date" class="form-control @error('regdate') is-invalid @enderror" name="regdate">

                                    @error('regdate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="formfile" class="col-md-4 col-form-label text-md-right">{{ __('Profile Picture') }}</label>

                                <div class="col-md-6 mb-3">
                                    <input id="propic" type="file" class="form-control @error('propic') is-invalid @enderror" name="propic">

                                    @error('propic')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Submit') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

@endsection