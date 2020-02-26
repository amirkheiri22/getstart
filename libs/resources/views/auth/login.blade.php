@extends('layouts.app')

@section('content')
    <div class="main-w3layouts wrapper">
        <h1>Login</h1>
        <div class="main-agileinfo">
            <div class="agileits-top">
                <form action="{{ route('login') }}" method="POST">
                    {{csrf_field()}}
                    <div>
                        <input type="text" class="text form-control @error('email') is-invalid @enderror"
                               name="email" value="{{ old('email') }}" placeholder="Email" required
                               autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <br>
                    <div>
                        <input type="password"
                               class="text form-control @error('password') is-invalid @enderror" name="password"
                               placeholder="Password" required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <br>
                    <br>
                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember"
                                       id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        @if (Route::has('password.request'))
                            <a class="btn btn-success" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                    <input type="submit" value="LOGIN">
                </form>
                <p>Don't have an Account? <a href="{{route('register')}}"> Register Now!</a></p>
            </div>
        </div>
        <div>
            <ul class="colorlib-bubbles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </div>
@endsection
