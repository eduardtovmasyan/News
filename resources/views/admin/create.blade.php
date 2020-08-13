@extends('../layouts.app')
@section('content')
<h1 class="page-title">Create New Admin Page | Create
<small></small>
</h1>
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
        <form class="form-horizontal" role="form" method="post" action="{{ route('create') }}">
            <div class="form-body">
                <div class="form-group">
                    <span style="color: red; margin-left: 15px;">{{$errors->first('role')}}</span>
                            <label class="col-md-2 control-label" style="margin-top: 25px" ><strong>Role: </strong></label>
                            <div class="col-md-10">
                                <select name="role" class="form-control input-lg">
                                    <option disabled="" selected="">Please Choose A Role</option>
                                    <option value="super_admin">Super Admin</option>
                                    <option value="panel_admin">Panel Admin</option>
                                </select>
                            </div>
                        </div>
                        <br>
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
                        <a href="{{ route('home') }}" type="button" class="btn default">Cancel</a>
                        <button type="submit" class="btn green">Create</button>
                    </div>
                </form>
            </div>
        </div>
        @endsection