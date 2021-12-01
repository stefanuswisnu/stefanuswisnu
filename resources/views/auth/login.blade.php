@extends('layouts.app') 

@section('title', 'Login')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 style="text-align: center; margin-top: 20px;">Login</h3>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">

                            <div class="col-md-6">
                                <label style="margin-left: 50%;" for="email" class="">{{ __('E-Mail Address') }}</label>
                                <input style="margin-left: 50%; color: #000000; border: 1px solid  #cacaca; border-radius: 60px; padding: 10px; padding-left: 20px; padding-right: 20px;" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-6">
                                <label style="margin-left: 50%;" for="password" class="">{{ __('Password') }}</label>
                                <input style="margin-left: 50%; color: #000000; border: 1px solid  #cacaca; border-radius: 60px; padding: 10px; padding-left: 20px; padding-right: 20px;" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                        </div>

                        <div class="form-group row">
                            <div style="margin-left: 23%;" class="container">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div style="margin-left: 39%; margin-top: 20px;" class="container">
                                <button style="color: #fafafa; border: 0px solid  #1cc88a; border-radius: 60px; padding: 10px; padding-left: 20px; padding-right: 20px; background-color:  #1cc88a;" type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                            @if (Route::has('password.request'))

                            <table style="margin-left: 31%;">
                                <tr>
                                    <td>
                                        <a style="margin-top: 10px; margin-left: 23px;" class="btn btn-link" href="{{ route('password.request') }}">Forgot Your Password?</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p style="margin-top: 30px;">Don't have account?<a style="margin-left: -8px;" class="btn btn-link" href="{{ route('register') }}">Register now</a></p>

                                    </td>
                                </tr>
                            </table>

                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
