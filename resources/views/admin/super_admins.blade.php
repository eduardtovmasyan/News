@extends('../layouts.app')
@section('content')
<h1 class="page-title" >Super Admin List | Admins
<small></small>
</h1>
<div class="col">
    <div class="portlet light bordered">
        <div class="portlet-title tabbable-line">
            <div class="caption">
                <i class="icon-bubbles font-dark hide"></i>
                <span class="caption-subject font-dark bold uppercase">Super Admin List</span>
            </div>
        </div>
        <div class="portlet-body">
            <div class="tab-content">
                <div class="tab-pane active" id="portlet_comments_1">
                    <!-- BEGIN: Comments -->
                    @foreach($superAdmins as $superAdmin)
                    <div class="mt-comments">
                        <div class="mt-comment">
                            <div class="mt-comment-img">
                            <img src="{{ asset('assets/pages/media/users/user.png') }}"> </div>
                            <div class="mt-comment-body">
                                <div class="mt-comment-info">
                                    <span class="mt-comment-author">{{ $superAdmin->name }} {{ $superAdmin->surname }}</span>
                                    <span class="mt-comment-date">{{ $superAdmin->created_at }}</span>
                                </div>
                                <div class="mt-comment-text"> {{ $superAdmin->email }} </div>
                                <div class="mt-comment-details">
                                    <span class="mt-comment-status mt-comment-status-rejected">{{ $superAdmin->role }}</span>
                                    <ul class="mt-comment-actions">
                                        @if($superAdmin->id == Auth::id())
                                        <li>
                                            <a href="{{ url('profile') }}">Edit</a>
                                        </li>
                                        @endif
                                        
                                        <li>
                                            <a href="/profile/details/{{ $superAdmin->id }}">View</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- END: Comments -->
                    <div class="row">
                        <div class="mx-auto">
                            {{$superAdmins->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script src="{{ asset('js/profile_access.js')}}" type="text/javascript"></script>
@endsection