<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <title>@yield('title')</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin RTL Theme #1 for " name="description" />
        <meta content="" name="author" />
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/plugins/font-awesome/css/font-awesome.min.css')}} " rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}} " rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/plugins/bootstrap/css/bootstrap-rtl.min.css')}} " rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch-rtl.min.css')}} " rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/plugins/select2/css/select2.min.css')}} " rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/plugins/select2/css/select2-bootstrap.min.css')}} " rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/css/components-rtl.min.css')}} " rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{ asset('assets/global/css/plugins-rtl.min.css')}} " rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/pages/css/login-5-rtl.min.css')}} " rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="favicon.ico" />
    </head>
    @yield('content')
    <script src=" {{ asset('assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
    <script src=" {{ asset('assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src=" {{ asset('assets/global/plugins/js.cookie.min.js') }}" type="text/javascript"></script>
    <script src=" {{ asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
    <script src=" {{ asset('assets/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
    <script src=" {{ asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>
    <script src=" {{ asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>
    <script src=" {{ asset('assets/global/plugins/jquery-validation/js/additional-methods.min.js') }}" type="text/javascript"></script>
    <script src=" {{ asset('assets/global/plugins/select2/js/select2.full.min.js') }}" type="text/javascript"></script>
    <script src=" {{ asset('assets/global/plugins/backstretch/jquery.backstretch.min.js') }}" type="text/javascript"></script>
    <script src=" {{ asset('assets/global/scripts/app.min.js') }}" type="text/javascript"></script>
    <script src=" {{ asset('assets/pages/scripts/login-5.min.js') }}" type="text/javascript"></script>
</html>
