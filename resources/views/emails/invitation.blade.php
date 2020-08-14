<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>Admin Panel</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #1 for statistics, charts, recent events and reports" name="description" />
        <meta content="Eduard" name="author" />
        <link href="{{ asset('assets/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/css/components.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{ asset('assets/layouts/layout/css/themes/darkblue.min.css') }}" rel="stylesheet" type="text/css" id="style_color" />
    </head>
    <!-- END HEAD -->
    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        <div class="page-wrapper">
            <div class="portlet box blue">
                <div class="portlet-title">
                    <div class="caption">
                    <i class="fa fa-gift"></i> Admin Details </div>
                </div>
                <div class="portlet-body form">
                    <div class="caption">
                    </div>
                    <form class="form-horizontal" role="form" method="post" action="{{ route('create') }}">
                        <div class="form-body">
                            <input type="hidden" name="role" value="{{ $role }}">
                            <div class="form-group">
                                <label class="col-md-2 control-label" style="margin-top: 25px" ><strong>Name: </strong></label>
                                <div class="col-md-10">
                                    <input type="text" name="name" class="form-control input-lg" placeholder="Name" value="{{old('name')}}"> </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label class="col-md-2 control-label" style="margin-top: 25px" ><strong>Surname: </strong></label>
                                    <div class="col-md-10">
                                        <input type="text" name="surname" class="form-control input-lg" placeholder="Surname" value="{{old('surname')}}"> </div>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" style="margin-top: 25px" ><strong>Email: </strong></label>
                                        <div class="col-md-10">
                                            <input type="email" name="email" class="form-control input-lg" placeholder="Email" value="{{old('email')}}"> </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label" style="margin-top: 25px" ><strong>Password: </strong></label>
                                            <div class="col-md-10">
                                                <input type="password" name="password" class="form-control input-lg" placeholder="Password"> </div>
                                            </div>
                                            <br>
                                            <div class="form-group">
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
                    </html>