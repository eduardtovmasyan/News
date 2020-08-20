@extends('../layouts.app')
@section('content')
<h1 class="page-title">Update The Latest News | Editors
<small></small>
</h1>
<!-- Users -->
<div class="portlet box blue">
    <input type="hidden" value="{{ $news->id }}" id="newsId">
    <div class="portlet-title">
        <div class="caption">
        <i class="fa fa-gift"></i> Editors </div>
        <div class="tools">
            <a href="" class="collapse" data-original-title="" title=""> </a>
        </div>
    </div>
    <div class="portlet-body form">
        <div class="portlet-body">
            <div class="row" style="padding: 10px 10px">
                <?php $arr = [] ?>
                @foreach($admins as $admin)
                <?php array_push($arr, $admin->id) ?>
                <div class="col-md-4 editorContainer" style="margin-top: 10px">
                    <!--begin: widget 1-3 -->
                    <div class="mt-widget-1">
                        <div class="mt-icon">
                            <a class="editor_delete" data-id="{{ $admin->id }}">
                                <i class="fa fa-minus-circle"></i>
                            </a>
                        </div>
                        <div class="mt-img">
                        <img src="{{ asset('/assets/pages/media/users/user.png') }}"> </div>
                        <div class="mt-body">
                            <h3 class="mt-username">{{ $admin->name }} {{ $admin->surname }}</h3>
                            <p class="mt-user-title"> {{ $admin->email }} </p>
                        </div>
                    </div>
                    <!--end: widget 1-3 -->
                </div>
                @endforeach
            </div>
        </div>
        <form class="form-horizontal" role="form" method="post" action="{{ url('/news/'.$news->id.'/editors/update') }}">
            <div class="form-body">
                
                <div class="form-group">
                    <span style="color: red; margin-left: 15px;">{{$errors->first('editors')}}</span>
                    <label class="col-md-1 control-label" style="margin-top: 10px" ><strong>Editors: </strong></label>
                    <div class="col-md-11">
                        <select name="editors[]" class="form-control" multiple="">
                            @foreach($editors as $editor)
                                    <option value="{{ $editor->id }}">{{ $editor->name }} {{ $editor->surname }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-actions right1" dir="rtl">
                {{csrf_field()}}
                <a href="{{ route('home') }}" type="button" class="btn default">Cancel</a>
                <button type="submit" class="btn green">Send</button>
            </div>
        </form>
    </div>
</div>
@endsection
@section('js')
    <script src="{{ asset('js/news_details.js')}}" type="text/javascript"></script>
@endsection
@section('css')
@endsection