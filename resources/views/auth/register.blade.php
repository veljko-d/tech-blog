@extends('layouts.app')

@section('title', 'Register')

@section('css')
    <link href="{{ asset('css/auth.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="col-4 col-s-3"></div>

    <div class="col-4 col-s-6">
        <!-- FORM ELEMENT -->
        <div id="form-container">
            <div id="form-head">
                <h1><i class="fas fa-sign-in-alt"></i> {{ __('Register') }}</h1>

                <hr>
            </div>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group">
                    <label for="name"><i class='fas fa-user'></i> {{ __('Name') }}</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email"><i class="fas fa-envelope"></i> {{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password"><i class="fas fa-key"></i> {{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password-confirm"><i class="fas fa-key"></i> {{ __('Confirm Password') }}</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>

                <input type="submit" value="Register">
            </form>

            <p id="already">Already have an account?
                <a href="{{ route('login') }}">Login.</a>
            </p>
        </div>
    </div>

    <div class="col-4 col-s-3"></div>
@endsection
