@extends('../layouts.LoginRegisterApp')
@section('content')
<body class=" login">
    <!-- BEGIN : LOGIN PAGE 5-2 -->
    <div class="user-login-5">
        <div class="row bs-reset">
            <div class="col-md-6 login-container bs-reset">
                <img class="login-logo login-6" src="{{ asset('assets/pages/img/login/login-invert.png') }}" />
                <div class="login-content">
                    <h1>News LLC Admin Login</h1>
                    <p> Lorem ipsum dolor sit amet, coectetuer adipiscing elit sed diam nonummy et nibh euismod aliquam erat volutpat. Lorem ipsum dolor sit amet, coectetuer adipiscing. </p>
                    <form action="{{ route('login') }}" class="login-form" method="post">
                        <div class="alert alert-danger display-hide">
                            <button class="close" data-close="alert"></button>
                            <span>Enter any email and password. </span>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <input class="form-control form-control-solid placeholder-no-fix form-group" value="{{old('password')}}" type="password" autocomplete="off" placeholder="Password" name="password" required/> </div>
                                <div class="col-xs-6">
                                    <input class="form-control form-control-solid placeholder-no-fix form-group" value="{{old('email')}}"  type="text" autocomplete="off" placeholder="Email" name="email" required/> </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="rememberme mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" name="remember" value="1" /> Remember me
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="col-sm-8 text-right">
                                        <button class="btn blue" type="submit">Login</button>
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
                    <div class="col-md-6 bs-reset">
                        <div class="login-bg"> </div>
                    </div>
                </div>
            </div>
        </body>
        @endsection
        @section('title')
        Login
        @endsection