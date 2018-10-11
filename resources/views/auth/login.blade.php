@extends('layouts.auth')
@section('title','Login')
@section('content')

<style type="text/css">
    .info-danger{
        color: red;
    }
</style>

<div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="images/img-01.png" alt="IMG">
                </div>

                <form class="login100-form validate-form" role="form" method="POST" action="{{ url('/login') }}">
                    {{csrf_field()}}
                    <span class="login100-form-title">
                        Member Login
                    </span>

                    <div class="wrap-input100 validate-input{{ $errors->has('email') ? ' has-error' : '' }}" data-validate = "Valid email is required: ex@abc.xyz">
                        <input class="input100" type="email" name="email" placeholder="Email" required autocomplete="off" value="{{old('email')}}">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>
                    
                    <div class="wrap-input100 validate-input{{ $errors->has('password') ? ' has-error' : '' }}" data-validate = "Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password" required>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    @if ($errors->has('email'))
                        <span class="help-block info-danger animated slower pulse">
                        <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    @if ($errors->has('password'))
                        <span class="help-block info-danger animated slower pulse">
                        <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>

                    <div class="text-center p-t-12">
                        <span class="txt1">
                            Forgot
                        </span>
                        <a class="txt2" href="{{ url('/password/reset') }}">
                            Username / Password?
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
@endsection
