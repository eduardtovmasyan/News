@extends('../layouts.app')
@section('content')
<h1 class="page-title">Post The Latest News | Post
<small></small>
</h1>
<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
        <i class="fa fa-gift"></i> News Details </div>
        <div class="tools">
            <a href="" class="collapse" data-original-title="" title=""> </a>
        </div>
    </div>
    <div class="portlet-body form">
        <form class="form-horizontal" role="form" method="post" action="{{ route('post') }}"  enctype="multipart/form-data">
            <div class="form-body">
                <div class="form-group">
                    <span style="color: red; margin-left: 15px;">{{$errors->first('type')}}</span>
                    <label class="col-md-1 control-label" style="margin-top: 10px" ><strong>Type: </strong></label>
                    <div class="col-md-11">
                        <select name="type" class="form-control">
                            <option disabled="" selected="">Please Choose A Type</option>
                            @foreach($types as $type)
                            <option value="{{ $type->id }}">{{ $type->type }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <span style="color: red; margin-left: 15px;">{{$errors->first('title')}}</span>
                    <label class="col-md-1 control-label" style="margin-top: 10px" ><strong>Title: </strong></label>
                    <div class="col-md-11">
                        <input type="text" name="title" class="form-control" placeholder="Title" value="{{old('title')}}"> </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <span style="color: red; margin-left: 15px;">{{$errors->first('news')}}</span>
                        <label class="col-md-1 control-label" style="margin-top: 10px" ><strong>News: </strong></label>
                        <div class="col-md-11">
                            <textarea name="news" class="form-control" value="{{old('news')}}"></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                    <span style="color: red; margin-left: 15px;">{{$errors->first('images')}}</span>
                    <label class="col-md-1 control-label" style="margin-top: 10px" ><strong>Images: </strong></label>
                    <div class="col-md-11">
                        <input type="file" name="images[]" multiple class="form-control" value="{{old('images')}}"></div>
                    </div>
                    <br>
                    <div class="form-group">
                    <span style="color: red; margin-left: 15px;">{{$errors->first('images')}}</span>
                    <label class="col-md-1 control-label" style="margin-top: 10px" ><strong>Files: </strong></label>
                    <div class="col-md-11">
                        <input type="file" name="files[]" multiple class="form-control" value="{{old('files')}}"></div>
                    </div>
                </div>
                <div class="form-actions right1" dir="rtl">
                    {{csrf_field()}}
                    <a href="{{ route('home') }}" type="button" class="btn default">Cancel</a>
                    <button type="submit" class="btn green">Post</button>
                </div>
            </form>
        </div>
    </div>
    @endsection