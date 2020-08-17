@extends('../layouts.app')
@section('content')
<div style="overflow: hidden;">
    <h1 class="page-title">My News | News
    <small></small>
    <span style="float: right;">
        <div class="btn-group" style="margin-right: 30px; ">
            <div class="btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                Filter <span class="caret"></span></button>
                <ul class="dropdown-menu" role="menu">
                    @foreach($types as $type)
                    <li value="{{ $type->id }}"><a class="newsType" value="{{ $type->id }}">{{ $type->type }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </span>
    </h1>
    @foreach($news as $post)
    <div class="col-md-6 col-xs col-sm">
        <div class="portlet light portlet-fit bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-directions font-green hide"></i>
                    <span class="caption-subject bold font-dark uppercase ">{{ $post->title }}</span>
                    <span class="caption-helper">{{ $post->type->type }}</span>
                </div>
                <div class="mt-author" style="float: right;">
                    <div class="mt-avatar">
                        <img src="{{ asset('/assets/pages/media/users/user.png') }}">
                    </div>
                    <div class="mt-author-name">
                        <a href="javascript:;" class="font-blue-madison">{{ $post->author }}</a>
                    </div>
                </div>
            </div>
            <div class="portlet-body">
                <div class="mt-timeline-horizontal loaded" data-spacing="60">
                    <div class="events-content">
                        <ol>
                            <li data-date="19/01/2015" class="selected">
                                @if(!$post->images->isEmpty())
                                <div style="text-align:center">
                                    <img src="{{ asset('storage/'.$post->images[0]->path) }}" with="150" height="150">
                                </div>
                                @endif
                                
                                <div class="clearfix"></div>
                                <div class="mt-content border-grey-steel">
                                    <p>{{ Str::limit($post->news, 100, '...') }}</p>
                                    <a href="news/{{ $post->id }}" class="btn btn-circle green-turquoise">Read More</a>
                                </div>
                            </li>
                        </ol>
                    </div>
                    <!-- .events-content -->
                </div>
            </div>
        </div>
    </div>
    @endforeach
    {{ $news->links() }}
</div>
@endsection
@section('js')
<script src="{{ asset('js/news.js')}}" type="text/javascript"></script>
@endsection