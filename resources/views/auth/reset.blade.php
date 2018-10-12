@extends('layouts.auth')
@section('title','Reset Password')

@section('content')

    <style>
        .wrap-login100{
            padding: 85px 130px 33px 95px !important;
        }
        .pl{
            padding-top: 25px;
        }
    </style>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">

                <form class="login100-form validate-form col-lg-offset-4 col-md-offset-4 col-xs-offset-3" role="form" method="POST" action="{{ route('password.email') }}">
                    {{csrf_field()}}
                    <span class="login100-form-title">
                        Reset Password
                    </span>

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="wrap-input100 col-sm-12 m-b-40">
                        <label for="password">Enter Your Password</label>
                        <input class="input100" type="password" name="password" placeholder="Password" required autocomplete="off">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock pl" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 col-sm-12">
                        <label for="password_confirmation">Confirm Your Password</label>
                        <input class="input100" type="password" name="password_confirmation" placeholder="Confirm Password" required autocomplete="off">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock pl" aria-hidden="true"></i>
                        </span>
                    </div>
                    @if ($errors->has('password'))
                        <span class="help-block info-danger">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    @if ($errors->has('password_confirmation'))
                        <span class="help-block info-danger">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                    <div class="container-login100-form-btn col-sm-12 col-xs-12">
                        <button class="login100-form-btn">
                            Reset &nbsp;
                            <i class="fa fa-refresh" aria-hidden="true"></i>
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection