@extends('layouts.app')

@section('title', 'Login')

@section('css')
    <link href="{{ asset('css/auth.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="col-4 col-s-3"></div>

    <div class="col-4 col-s-6">
        <!-- FORM ELEMENT -->
        <div id="form-container">
            <div id="form-head">
                <h1><i class="fas fa-sign-in-alt"></i> {{ __('Login') }}</h1>

                <hr>
            </div>

            <form name="login" method="POST" action="{{ route('login') }}" onsubmit="return validateForm()">
                @csrf

                <div class="form-group">
                    <label for="email"><i class="fas fa-envelope"></i> {{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password"><i class="fas fa-key"></i> {{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <div>
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label for="remember">{{ __('Remember Me') }}</label>
                    </div>
                </div>

                <div class="form-group">
                    <div>
                        <input type="submit" value="Login">

                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>
            </form>
            <p id="already">Don't have an account?
                <a href="/register">Register.</a>
            </p>
        </div>
    </div>

    <div class="col-4 col-s-3"></div>
@endsection
