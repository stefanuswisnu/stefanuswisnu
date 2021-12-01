@extends('layouts.app') 

@section('title', 'Register')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 style="text-align: center; margin-top: 20px;">Register</h3>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">

                            <div class="col-md-6">
                                <label for="name" style="margin-left: 50%;" class="">{{ __('Name') }}</label>
                                <input style="margin-left: 50%; color: #000000; border: 1px solid  #cacaca; border-radius: 60px; padding: 10px; padding-left: 20px; padding-right: 20px;" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">


                            <div class="col-md-6">
                                <label for="email" style="margin-left: 50%;">{{ __('E-Mail Address') }}</label>
                                <input id="email" style="margin-left: 50%; color: #000000; border: 1px solid  #cacaca; border-radius: 60px; padding: 10px; padding-left: 20px; padding-right: 20px;" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-6">
                                <label for="password" style="margin-left: 50%;">{{ __('Password') }}</label>
                                <input id="password" style="margin-left: 50%; color: #000000; border: 1px solid  #cacaca; border-radius: 60px; padding: 10px; padding-left: 20px; padding-right: 20px;" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-6">
                                <label for="password-confirm" style="margin-left: 50%;">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" style="margin-left: 50%; color: #000000; border: 1px solid  #cacaca; border-radius: 60px; padding: 10px; padding-left: 20px; padding-right: 20px;" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button style="margin-left: 45px; color: #fafafa; border: 0px solid  #1cc88a; border-radius: 60px; padding: 10px; padding-left: 20px; padding-right: 20px; background-color:  #1cc88a;" type="submit" class="btn btn-success">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
