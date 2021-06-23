@extends('home')

@section('Profile')

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

@endsection