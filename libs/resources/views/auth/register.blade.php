@extends('layouts.app')

@section('content')
    <div class="main-w3layouts wrapper">
        <h1>SignUp</h1>
        <div class="main-agileinfo">
            <div class="agileits-top">
                <form action="{{ route('register') }}" method="POST">
                    {{csrf_field()}}
                    <div>
                        <input class="text form-control @error('name') is-invalid @enderror" type="text" name="name"
                               value="{{ old('name') }}" placeholder="Name" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
{{--                    <div>--}}
{{--                        <input type="text" class="text form-control @error('email') is-invalid @enderror"--}}
{{--                               name="email" value="{{ old('email') }}" placeholder="Email" required--}}
{{--                               autocomplete="email" autofocus>--}}
{{--                        @error('email')--}}
{{--                        <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
                    <div>
                        <input type="email"
                               class="text email form-control @error('email') is-invalid @enderror" name="email"
                               value="{{ old('email') }}" autocomplete="email" placeholder="E-mail" required>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div>
                        <input type="password"
                               class="text form-control @error('password') is-invalid @enderror" name="password"
                               placeholder="Password" required autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div>
                        <input type="password" class="text w3lpass form-control"
                               name="password_confirmation" required autocomplete="new-password"  placeholder="Confirm Password">
                    </div>
                    {{--                    <div class="wthree-text">--}}
                    {{--                        <label class="anim">--}}
                    {{--                            <input type="checkbox" class="checkbox" required="">--}}
                    {{--                            <span>I Agree To The Terms & Conditions</span>--}}
                    {{--                        </label>--}}
                    {{--                        <div class="clear"></div>--}}
                    {{--                    </div>--}}
                    <input type="submit" value="SIGNUP">
                </form>
                <p>if you have an account <a style="color: #2b542c" href="{{route('login')}}"> Login Now!</a></p>
            </div>
        </div>
        <div class="colorlibcopy-agile">
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
            </ul>
        </div>
@endsection
