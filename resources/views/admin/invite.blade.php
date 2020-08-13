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
        <form class="form-horizontal" role="form">
            <div class="form-body">
                <div class="form-group">
                    <label class="col-md-1 control-label">Message: </label>
                    <div class="col-md-10">
                        <input type="text" class="form-control input-lg" placeholder="Message"> </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-1 control-label">Email: </label>
                        <div class="col-md-10">
                            <input type="email" class="form-control input-lg" placeholder="Email"> </div>
                        </div>
                        
                        
                        <div class="form-group">
                            <label class="col-md-1 control-label">Role: </label>
                            <div class="col-md-10">
                                <select class="form-control input-lg">
                                    <option disabled="" selected="">Please Choose A Role</option>
                                    <option>Super Admin</option>
                                    <option>Panel Admin</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions right1" dir="rtl">
                        <button type="button" class="btn default">Cancel</button>
                        <button type="submit" class="btn green">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        @endsection