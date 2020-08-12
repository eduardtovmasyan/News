@extends('../layouts.app')
@section('content')
<div class="page" style="min-height: 587px;">
    <!-- BEGIN PAGE HEADER-->
    <!-- BEGIN PAGE TITLE-->
    <h1 class="page-title"> {{ Auth::user()->name }} {{ Auth::user()->surname }} | Account
    <small>user account page</small>
    </h1>
    <!-- END PAGE TITLE-->
    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN PROFILE CONTENT -->
            <div class="profile-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet light ">
                            <div class="portlet-title tabbable-line">
                                <div class="caption caption-md">
                                    <i class="icon-globe theme-font hide"></i>
                                    <span class="caption-subject font-blue-madison bold uppercase">Profile Account</span>
                                </div>
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#tab_1_1" data-toggle="tab">Personal Info</a>
                                    </li>
                                    <li>
                                        <a href="#tab_1_3" data-toggle="tab">Change Password</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="portlet-body">
                                <div class="tab-content">
                                    <!-- PERSONAL INFO TAB -->
                                    <div class="tab-pane active" id="tab_1_1">
                                        <form role="form" action="{{ url('profile/details') }}" method="post">
                                            <div class="form-group">
                                                <label class="control-label">First Name</label>
                                                <div class="alert alert-danger display-hide">
                                                    <button class="close" data-close="alert"></button>
                                                    <span>{{$errors->first('name')}}</span><br>
                                                </div>
                                                <input type="text" placeholder="{{ Auth::user()->name }}" class="form-control" name="name" value="{{ Auth::user()->name }}"> 
                                            </div>
                                                <div class="form-group">
                                                    <label class="control-label">Last Name</label>
                                                    <div class="alert alert-danger display-hide">
                                                        <button class="close" data-close="alert"></button>
                                                        <span>{{$errors->first('surname')}}</span><br>
                                                    </div>
                                                    <input type="text" placeholder="{{ Auth::user()->surname }}" class="form-control" name="surname" value="{{ Auth::user()->surname }}"> </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Email</label>
                                                        <div class="alert alert-danger display-hide">
                                                            <button class="close" data-close="alert"></button>
                                                            <span>{{$errors->first('email')}}</span><br>
                                                        </div>
                                                        <input type="email" placeholder="{{ Auth::user()->email }}" class="form-control" name="email" value="{{ Auth::user()->email }}"> </div>
                                                        <div class="margiv-top-10">
                                                            <button class="btn green"> Save Changes </button>
                                                        </div>
                                                        {{ csrf_field() }}
                                                    </form>
                                                </div>
                                                <!-- END PERSONAL INFO TAB -->
                                                <!-- CHANGE PASSWORD TAB -->
                                                <div class="tab-pane" id="tab_1_3">
                                                    <form action="{{ url('/profile/password') }}" method="post">
                                                        <div class="form-group">
                                                            <label class="control-label">Current Password</label>
                                                            <input type="password" class="form-control" name="password"> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">New Password</label>
                                                                <input type="password" class="form-control" name="newPassword"> </div>
                                                                <div class="margin-top-10">
                                                                    <button class="btn green"> Change Password </button>
                                                                    <a href="javascript:;" class="btn default"> Cancel </a>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <!-- END CHANGE PASSWORD TAB -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END PROFILE CONTENT -->
                            </div>
                        </div>
                    </div>
                    @endsection
                    @section('css')
                    @endsection
                    @section('js')
                    @endsection