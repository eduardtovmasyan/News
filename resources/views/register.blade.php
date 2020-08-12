@extends('layouts.LoginRegisterApp')
@section('content')
<body class=" login">
    <!-- BEGIN : LOGIN PAGE 5-2 -->
    <div class="user-login-5">
        <div class="row bs-reset">
            <div class="col-md-6 bs-reset">
                <div class="login-bg"> </div>
            </div>
            <div class="col-md-6 login-container bs-reset">
                
                <img class="login-logo login-6" src="{{ asset('assets/pages/img/login/login-invert.png') }}" />
                <div class="login-content">
                    <h1>News LLC Admin Registration</h1>
                    <p> Lorem ipsum dolor sit amet, coectetuer adipiscing elit sed diam nonummy et nibh euismod aliquam erat volutpat. Lorem ipsum dolor sit amet, coectetuer adipiscing. </p>
                    <form  method="post" action="{{ route('register') }}" class="login-form">
                        
                        <div class="alert alert-danger display-hide">
                            <button class="close" data-close="alert"></button>
                            <br>
                            <span>{{$errors->first('name')}}</span><br>
                            <span>{{$errors->first('surname')}}</span><br>
                            <span>{{$errors->first('email')}}</span><br>
                            <span>{{$errors->first('password')}}</span><br>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <input class="form-control form-control-solid placeholder-no-fix form-group" value="{{old('surname')}}" autocomplete="off" placeholder="Surname" name="surname"/>
                            </div>
                            <div class="col-xs-6">
                                <input class="form-control form-control-solid placeholder-no-fix form-group"  value="{{old('name')}}" autocomplete="off" placeholder="Name" name="name"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <input class="form-control form-control-solid placeholder-no-fix form-group" value="{{old('email')}}" autocomplete="off" placeholder="Email" name="email"/>
                            </div>
                            <div class="col-xs-6">
                                <input class="form-control form-control-solid placeholder-no-fix form-group" type="password" value="{{old('password')}}" autocomplete="off" placeholder="Password" name="password"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control form-control-solid placeholder-no-fix form-group" value="{{old('password_confirmation')}}" type="password" autocomplete="off" placeholder="Config Password" name="password_confirmation"/>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="rememberme mt-checkbox mt-checkbox-outline">
                                    <input type="checkbox" name="remember" value="1" /> Remember me
                                    <span></span>
                                </label>
                            </div>
                            <div class="col-sm-8 text-right">
                                <button class="btn blue" type="submit">Register</button>
                                {{csrf_field()}}
                            </div>
                        </div>
                    </form>
                </div>
                <div class="login-footer">
                    <div class="row bs-reset">
                        <div class="col-xs-5 bs-reset">
                        </div>
                        <div class="col-xs-7 bs-reset">
                            <div class="login-copyright text-right">
                                <p>Copyright &copy; News LLC 2020</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</body>
@endsection
@section('title')
Register
@endsection