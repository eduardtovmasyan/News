@extends('../layouts.app')
@section('content')
<h1 class="page-title">Update The Latest News | Images
<small></small>
</h1>
<div class="portlet light portlet-fit bordered">
    <input type="hidden" value="{{ $news->id }}" id="newsId">
    <div class="portlet-body">
        <div class="row">
            @foreach($news->images as $image)
            <div class="col-md-4 imageContainer">
                <div class="mt-widget-3">
                    <div class="mt-head" style="background: url({{ asset('storage/'.$image->path) }});background-size: cover;background-repeat: no-repeat;">
                        <div class="mt-head-icon">
                        </div>
                        <div class="mt-head-button">
                            <button type="button" class="btn btn-circle btn-outline white btn-sm img_delete" value="{{ $image->id }}">delete</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<form class="form-horizontal" role="form" method="post" action="{{ url('/news/update/images/'.$news->id ) }}"  enctype="multipart/form-data">
    <div class="form-body">
        <div class="form-group">
            <label class="col-md-1 control-label" style="margin-top: 10px" ><strong>Images: </strong></label>
            <div class="col-md-11">
                <input type="file" name="images[]" multiple class="form-control" value="{{old('images')}}"></div>
            </div>
        </div>
        <div class="form-actions right1" dir="rtl">
            {{csrf_field()}}
            <a href="{{ route('home') }}" type="button" class="btn default">Cancel</a>
            <button type="submit" class="btn green">Post</button>
        </div>
    </form>
    @endsection
    @section('js')
    <script src="{{ asset('js/news_details.js')}}" type="text/javascript"></script>
    @endsection
    @section('css')
    @endsection