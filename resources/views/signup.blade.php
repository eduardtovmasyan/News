<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Document</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <!-- Body -->
<!-- <div class="container">
    <div class="row mt-5">
        <div class="col-md order-md-1">
            <form  method="post" action="{{ route('signup') }}" class="needs-validation">
                <h1 class="h3 mb-3 font-weight-normal mb-5"><b>Please sign up</b></h1>
                <div class="mb-3">
                    <label for="name">Name:</label><br>
                    <input type="text" name="name" id="name" value="{{old('name')}}" class="form-control">
                    <div class="error" style='color:red'>{{$errors->first("name")}}</div>
                </div>
                <div class="mb-3">
                    <label for="surname">Surname:</label><br>
                    <input type="text" name="surname" id="surname" value="{{old('surname')}}" class="form-control">
                    <div class="error" style='color:red'>{{$errors->first("surname")}}</div>
                </div>
                
                <label for="email">Email:</label><br>
                <input type="text" name="email" id="email" value="{{old('email')}}"  class="form-control" placeholder="you@example.com">
                <div class="error" style='color:red'>{{$errors->first("email")}}</div>
                <div class="my-3">
                    <label for="password">Password:</label><br>
                    <input type="password" name="password" id="password" value="{{old('password')}}" class="form-control">
                    <div class="error" style='color:red'>{{$errors->first("password")}}</div>
                </div>
                <div class="mb-3">
                    <label for="config_password">Config Password:</label><br>
                    <input type="password" name="password_confirmation" id="password_confirmation" value="{{old('password_confirmation')}}" class="form-control">
                    <div class="error" style='color:red'>{{$errors->first("config_password")}}</div>
                </div>
                <button class="btn btn-primary btn-lg btn-block mt-5">Sign Up</button>
                {{csrf_field()}}
            </form>
        </div>
    </div>
</div> -->
<!-- End of Body -->
        
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>Metronic Admin RTL Theme #1 | User Login 6</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin RTL Theme #1 for " name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/plugins/font-awesome/css/font-awesome.min.css')}} " rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}} " rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/plugins/bootstrap/css/bootstrap-rtl.min.css')}} " rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch-rtl.min.css')}} " rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{ asset('assets/global/plugins/select2/css/select2.min.css')}} " rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/plugins/select2/css/select2-bootstrap.min.css')}} " rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{ asset('assets/global/css/components-rtl.min.css')}} " rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{ asset('assets/global/css/plugins-rtl.min.css')}} " rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="{{ asset('assets/pages/css/login-5-rtl.min.css')}} " rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class=" login">


        <div class="container">
    <div class="row mt-5">
        <div class="col-md order-md-1">
            <form  method="post" action="{{ route('signup') }}" class="needs-validation">
                <h1 class="h3 mb-3 font-weight-normal mb-5"><b>Please sign up</b></h1>
                <div class="mb-3">
                    <label for="name">Name:</label><br>
                    <input type="text" name="name" id="name" value="{{old('name')}}" class="form-control form-control-solid placeholder-no-fix form-group">
                    <div class="error" style='color:red'>{{$errors->first("name")}}</div>
                </div>
                <div class="mb-3">
                    <label for="surname">Surname:</label><br>
                    <input type="text" name="surname" id="surname" value="{{old('surname')}}" class="form-control form-control-solid placeholder-no-fix form-group">
                    <div class="error" style='color:red'>{{$errors->first("surname")}}</div>
                </div>
                
                <label for="email">Email:</label><br>
                <input type="text" name="email" id="email" value="{{old('email')}}"  class="form-control form-control-solid placeholder-no-fix form-group" placeholder="you@example.com">
                <div class="error" style='color:red'>{{$errors->first("email")}}</div>
                <div class="my-3">
                    <label for="password">Password:</label><br>
                    <input type="password" name="password" id="password" value="{{old('password')}}" class="form-control form-control-solid placeholder-no-fix form-group">
                    <div class="error" style='color:red'>{{$errors->first("password")}}</div>
                </div>
                <div class="mb-3">
                    <label for="config_password">Config Password:</label><br>
                    <input type="password" name="password_confirmation" id="password_confirmation" value="{{old('password_confirmation')}}" class="form-control form-control-solid placeholder-no-fix form-group">
                    <div class="error" style='color:red'>{{$errors->first("config_password")}}</div>
                </div>
                <button class="btn btn-primary btn-lg btn-block mt-5">Sign Up</button>
                {{csrf_field()}}
            </form>
        </div>
    </div>
</div>
     </body>
        <script src=" {{ asset('assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
        <script src=" {{ asset('assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <script src=" {{ asset('assets/global/plugins/js.cookie.min.js') }}" type="text/javascript"></script>
        <script src=" {{ asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
        <script src=" {{ asset('assets/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
        <script src=" {{ asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src=" {{ asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>
        <script src=" {{ asset('assets/global/plugins/jquery-validation/js/additional-methods.min.js') }}" type="text/javascript"></script>
        <script src=" {{ asset('assets/global/plugins/select2/js/select2.full.min.js') }}" type="text/javascript"></script>
        <script src=" {{ asset('assets/global/plugins/backstretch/jquery.backstretch.min.js') }}" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src=" {{ asset('assets/global/scripts/app.min.js') }}" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src=" {{ asset('assets/pages/scripts/login-5.min.js') }}" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
  

</html>