<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>Admin Panel</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #1 for statistics, charts, recent events and reports" name="description" />
        <meta content="Eduard" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{ asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/plugins/morris/morris.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/plugins/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/plugins/jqvmap/jqvmap/jqvmap.css') }}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{ asset('assets/global/css/components.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{ asset('assets/global/css/plugins.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="{{ asset('assets/layouts/layout/css/layout.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/layouts/layout/css/themes/darkblue.min.css') }}" rel="stylesheet" type="text/css" id="style_color" />
        <link href="{{ asset('assets/layouts/layout/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
        @yield('css')
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" />
    </head>
    <!-- END HEAD -->
    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        <div class="page-wrapper">
<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
        <i class="fa fa-gift"></i> Admin Details </div>
        <div class="tools">
            <a href="" class="collapse" data-original-title="" title=""> </a>
            <!-- <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title=""> </a> -->
            <!-- <a href="" class="reload" data-original-title="" title=""> </a> -->
            <!-- <a href="" class="remove" data-original-title="" title=""> </a> -->
        </div>
    </div>
    <div class="portlet-body form">
        <div class="caption">
            <span class="caption-subject bold font-green uppercase"> {{ $message }} </span>
        </div>
        <form class="form-horizontal" role="form" method="post" action="{{ route('create') }}">
            <div class="form-body">
                    <input type="hidden" name="role" value="{{ $role }}">
                <div class="form-group">
                    <span style="color: red; margin-left: 15px;">{{$errors->first('name')}}</span>
                    <label class="col-md-2 control-label" style="margin-top: 25px" ><strong>Name: </strong></label>
                    <div class="col-md-10">
                    <input type="text" name="name" class="form-control input-lg" placeholder="Name" value="{{old('name')}}"> </div>
                </div>
                <br>


                <div class="form-group">
                    <span style="color: red; margin-left: 15px;">{{$errors->first('surname')}}</span>
                    <label class="col-md-2 control-label" style="margin-top: 25px" ><strong>Surname: </strong></label>
                    <div class="col-md-10">
                        <input type="text" name="surname" class="form-control input-lg" placeholder="Surname" value="{{old('surname')}}"> </div>
                </div>
                <br>

                <div class="form-group">
                    <span style="color: red; margin-left: 15px;">{{$errors->first('email')}}</span>
                        <label class="col-md-2 control-label" style="margin-top: 25px" ><strong>Email: </strong></label>
                        <div class="col-md-10">
                            <input type="email" name="email" class="form-control input-lg" placeholder="Email" value="{{old('email')}}"> </div>
                </div> 
                <br>

                <div class="form-group">
                    <span style="color: red; margin-left: 15px;">{{$errors->first('password')}}</span>
                        <label class="col-md-2 control-label" style="margin-top: 25px" ><strong>Password: </strong></label>
                        <div class="col-md-10">
                            <input type="password" name="password" class="form-control input-lg" placeholder="Password"> </div>
                </div> 
                <br>
                <div class="form-group">
                    <span style="color: red; margin-left: 15px;">{{$errors->first('confirm_password')}}</span>
                        <label class="col-md-2 control-label" style="margin-top: 25px" ><strong>Confirm Password: </strong></label>
                        <div class="col-md-10">
                            <input type="password" name="confirm_password" class="form-control input-lg" placeholder="Confirm Password"> </div>
                        </div>
                </div>

                    <div class="form-actions right1" dir="rtl">
                        {{csrf_field()}}
                        <button type="submit" class="btn green">Create</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
        
    </body>
    <script src="{{ asset('assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/moment.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/morris/morris.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/morris/raphael-min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/counterup/jquery.waypoints.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/amcharts/amcharts/amcharts.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/amcharts/amcharts/serial.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/amcharts/amcharts/pie.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/amcharts/amcharts/radar.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/amcharts/amcharts/themes/light.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/amcharts/amcharts/themes/patterns.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/amcharts/amcharts/themes/chalk.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/amcharts/ammap/ammap.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/amcharts/ammap/maps/js/worldLow.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/amcharts/amstockcharts/amstock.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/fullcalendar/fullcalendar.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/horizontal-timeline/horizontal-timeline.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/flot/jquery.flot.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/flot/jquery.flot.resize.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/flot/jquery.flot.categories.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/jquery.sparkline.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/pages/scripts/dashboard.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/layouts/layout/scripts/layout.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/layouts/layout/scripts/demo.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/layouts/global/scripts/quick-sidebar.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/layouts/global/scripts/quick-nav.min.js')}}" type="text/javascript"></script>
</html>