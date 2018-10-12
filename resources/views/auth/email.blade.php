@extends('layouts.auth')
@section('title','Login')
@section('content')

    <style type="text/css">
        .info-danger{
            color: red;
        }
        .wrap-login100{
            padding: 85px 130px 33px 95px !important;
        }
    </style>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">

                <form class="login100-form validate-form col-lg-offset-4 col-md-offset-4 col-xs-offset-3" role="form" method="POST" action="{{ route('password.email') }}">
                    {{csrf_field()}}
                    <span class="login100-form-title">
                        Send Password Reset Link
                    </span>

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="wrap-input100 col-sm-12 validate-input{{ $errors->has('email') ? ' has-error' : '' }}" data-validate = "Valid email is required: ex@abc.xyz">
                        <input class="input100" type="email" name="email" placeholder="Email" required autocomplete="off" value="{{old('email')}}">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>
                    @if ($errors->has('email'))
                        <span class="help-block info-danger">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    <div class="container-login100-form-btn col-sm-12 col-xs-12">
                        <button class="login100-form-btn">
                            Send Link &nbsp;
                            <i class="fa fa-send" aria-hidden="true"></i>
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection
