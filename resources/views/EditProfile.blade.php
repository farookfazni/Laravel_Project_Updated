@extends('home')

@section('editProfile')

    <div class="card" id="edit-profile">
        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group row">
                    <label for="text" class="col-md-4 col-form-label text-md-right">{{ __('Full Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name">

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="text" class="col-md-4 col-form-label text-md-right">{{ __('ID No') }}</label>

                    <div class="col-md-6">
                        <input id="ino" type="text" class="form-control @error('ino') is-invalid @enderror" name="ino">

                        @error('ino')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="number" class="col-md-4 col-form-label text-md-right">{{ __('Mobile Number') }}</label>

                    <div class="col-md-6">
                        <input id="mobile" type="number" class="form-control @error('mobile') is-invalid @enderror" name="mobile">

                        @error('mobile')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="text" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                    <div class="col-md-6">
                        <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>

                        @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="text" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                    <div class="col-md-6">
                        <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city">

                        @error('city')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>

                    <div class="col-md-6">
                        <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" name="dob">

                        @error('dob')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Registration Date') }}</label>

                    <div class="col-md-6">
                        <input id="regdate" type="date" class="form-control @error('regdate') is-invalid @enderror" name="regdate">

                        @error('regdate')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="formfile" class="col-md-4 col-form-label text-md-right">{{ __('Profile Picture') }}</label>

                    <div class="col-md-6">
                        <input id="propic" type="file" class="form-control @error('propic') is-invalid @enderror" name="propic">

                        @error('propic')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Submit') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
