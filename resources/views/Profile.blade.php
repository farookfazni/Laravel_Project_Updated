@extends('layouts.app')

@section('Profile')

<body class="home-body">
    <div class="container">
        <div class="row">
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
                
            </div>
            <div class="col-md-8">
                <div class="card" id="edit-profile">
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="text" class="col-md-4 col-form-label text-md-right">{{ __('Full Name') }}</label>

                                <label for="text" class="col-md-4 col-form-label text-md-right">{{ __('Farook Fazni') }}</label>
                            </div>

                            <div class="form-group row">
                                <label for="text" class="col-md-4 col-form-label text-md-right">{{ __('ID No') }}</label>

                                <label for="text" class="col-md-4 col-form-label text-md-right">{{ __('Farook Fazni') }}</label>
                            </div>

                            <div class="form-group row">
                                <label for="number" class="col-md-4 col-form-label text-md-right">{{ __('Mobile Number') }}</label>

                                <label for="text" class="col-md-4 col-form-label text-md-right">{{ __('Farook Fazni') }}</label>
                            </div>

                            <div class="form-group row">
                                <label for="text" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                                <label for="text" class="col-md-4 col-form-label text-md-right">{{ __('Farook Fazni') }}</label>
                            </div>

                            <div class="form-group row">
                                <label for="text" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                                <label for="text" class="col-md-4 col-form-label text-md-right">{{ __('Farook Fazni') }}</label>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <label for="text" class="col-md-4 col-form-label text-md-right">{{ __('Farook Fazni') }}</label>
                            </div>

                            <div class="form-group row">
                                <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>

                                <label for="text" class="col-md-4 col-form-label text-md-right">{{ __('Farook Fazni') }}</label>
                            </div>

                            <div class="form-group row">
                                <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Registration Date') }}</label>

                                <label for="text" class="col-md-4 col-form-label text-md-right">{{ __('Farook Fazni') }}</label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection