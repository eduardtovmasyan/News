@extends('../layouts.app')
@section('content')
<h1 class="page-title">My News | News
<small></small>
<a href="/news/{{$news->id}}/editors/update" class="btn green-haze btn-outline sbold uppercase" style="float: right;margin-right: 35px"><strong>Add or Remove Editors</strong></a>
</h1>
<div class="col-lg col-xs col-sm">
    <div class="portlet light portlet-fit bordered">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-directions font-green hide"></i>
                <span style="cursor: pointer;" class="caption-subject bold font-dark uppercase edits">{{ $news->title }}</span>
                <span class="caption-helper" style="cursor: pointer;">{{ $news->type->type }}</span>
            </div>
            <div class="mt-author" style="float: right;">
                <div class="mt-avatar">
                    <img src="{{ asset('/assets/pages/media/users/user.png') }}">
    <a href="/news/{{ $news->id }}/update" style="float: right;margin-right: 30px" class="edit_info"><strong><i class="fa fa-pencil" aria-hidden="true">Edit</i></strong></a>
                </div>
                <div class="mt-author-name">
                    <a href="javascript:;" class="font-blue-madison">{{ $news->author }}</a>
                </div>
                <div class="mt-author-datetime font-grey-mint">{{ $news->created_at }}</div>
            </div>
        </div>
        <div class="portlet-body">
            <div class="mt-timeline-horizontal loaded" data-spacing="60">
                <div class="events-content">
                    <ol>
                        <li data-date="19/01/2015" class="selected">
                            <div class="clearfix"></div>
                            <div class="mt-content border-grey-steel">
                                <p>{{ $news->news }}</p>
                            </div>
                        </li>
                    </ol>
                </div>
                <!-- .events-content -->
            </div>
        </div>
    </div>
</div>
@if(!$news->images->isEmpty())
<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
        <i class="fa fa-picture-o"></i> Post Images </div>
        <div class="tools">
            <a href="/news/update/images/{{ $news->id }}" data-toggle="modal" class="config" data-original-title="" title=""> </a>
            <a href="" class="collapse" data-original-title="" title=""> </a>
        </div>
    </div>
    <div class="portlet-body form">
        <div class="row" style=" padding: 0px 15px;">
            <div class="slideContainer">
                @foreach($news->images as $image)
                <div class="picture">
                    <img src="{{ asset('storage/'.$image->path) }}">
                </div>
                @endforeach
                <div class="arrow">
                    <a class="previous" onclick="slideMove(-1)">&#10094;</a>
                    <a class="next" onclick="slideMove(1)">&#10095; </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@if(!$news->files->isEmpty())
<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
        <i class="fa fa-file"></i> Post Files </div>
        <div class="tools">
            <a href="" class="collapse" data-original-title="" title=""> </a>
        </div>
    </div>
    <div class="portlet-body form">
        <div class="row">
            
            @foreach($news->files as $file)
            <div class="col-md-4">
                <a src="{{ asset('storage/'.$file->path) }}" with="100" height="100" download=""> <i class="fa fa-file" aria-hidden="true"></i></a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endif
@endsection
@section('js')
<script src="{{ asset('js/carusel.js')}}" type="text/javascript"></script>
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('css/carusel.css')}}" type="text/css">
@endsection