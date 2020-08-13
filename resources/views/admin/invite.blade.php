@extends('../layouts.app')
@section('content')
<h1 class="page-title">Invitation Page | Invite
<small></small>
</h1>
<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
        <i class="fa fa-gift"></i> Invitation Details </div>
        <div class="tools">
            <a href="" class="collapse" data-original-title="" title=""> </a>
            <!-- <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title=""> </a> -->
            <!-- <a href="" class="reload" data-original-title="" title=""> </a> -->
            <!-- <a href="" class="remove" data-original-title="" title=""> </a> -->
        </div>
    </div>
    <div class="portlet-body form">
        <form class="form-horizontal" role="form"  method="post" action="{{ route('invite') }}">
            <div class="form-body">
                <div class="form-group">
                    <label class="col-md-1 control-label"><strong>Message: </strong></label>
                    <div class="col-md-10">
                        <input type="text" name="message" class="form-control input-lg" placeholder="Message"> </div>
                    </div>
                    <br>
                    <div class="form-group">
                    <span style="color: red; margin-left: 15px;">{{$errors->first('email')}}</span>
                        <label class="col-md-1 control-label"><strong>Email: </strong></label>
                        <div class="col-md-10">
                            <input type="email" name="email" class="form-control input-lg" placeholder="Email"> </div>
                        </div>
                        <br>
                        
                        <div class="form-group">
                    <span style="color: red; margin-left: 15px;">{{$errors->first('confirm_password')}}</span>
                            <label class="col-md-1 control-label"><strong>Role: </strong></label>
                            <div class="col-md-10">
                                <select name="role" class="form-control input-lg">
                                    <option disabled="" selected="">Please Choose A Role</option>
                                    <option value="super_admin">Super Admin</option>
                                    <option value="panel_admin">Panel Admin</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions right1" dir="rtl">
                        {{csrf_field()}}
                        <a href="{{ route('home') }}" type="button" class="btn default">Cancel</a>
                        <button type="submit" class="btn green">Invite</button>
                    </div>
                </form>
            </div>
        </div>
        @endsection