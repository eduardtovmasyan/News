@extends('../layouts.app')
@section('content')
<h1 class="page-title" > Admins List | Admins
<small></small>
</h1>
<div class="col">
    <div class="portlet light bordered">
        <div class="portlet-title tabbable-line">
            <div class="caption">
                <i class="icon-bubbles font-dark hide"></i>
                <span class="caption-subject font-dark bold uppercase">Panel Admin List</span>
            </div>
            
        </div>
        <div class="portlet-body">
            <div class="tab-content">
                <div class="tab-pane active panel_admin_list" id="portlet_comments_1">
                    <!-- BEGIN: Comments -->
                    @foreach($acceptedPanelAdmins as $acceptedPanelAdmin)
                    <div class="mt-comments">
                        <div class="mt-comment">
                            <div class="mt-comment-img">
                            <img src="{{ asset('assets/pages/media/users/user.png') }}"> </div>
                            <div class="mt-comment-body">
                                <div class="mt-comment-info">
                                    <span class="mt-comment-author">{{ $acceptedPanelAdmin->name }} {{ $acceptedPanelAdmin->surname }}</span>
                                    <span class="mt-comment-date">{{ $acceptedPanelAdmin->created_at }}</span>
                                </div>
                                <div class="mt-comment-text"> {{ $acceptedPanelAdmin->email }} </div>
                                <div class="mt-comment-details">
                                    <span class="mt-comment-status mt-comment-status-rejected">{{ $acceptedPanelAdmin->role }}</span>
                                    <ul class="mt-comment-actions">
                                        @if($acceptedPanelAdmin->id == Auth::id())
                                        <li>
                                            <a href="{{ url('profile') }}">Edit</a>
                                        </li>
                                        @endif
                                        <li>
                                            <a href="/profile/details/{{ $acceptedPanelAdmin->id }}">View</a>
                                        </li>
                                        @if(Auth::user()->role == 'super_admin')
                                        <li>
                                            <a class="admin_remove" data-id="{{ $acceptedPanelAdmin->id }}" >Delete</a>
                                        </li>
                                        <li>
                                            <a class="admin_block" data-id="{{ $acceptedPanelAdmin->id }}" style="color: red">Block</a>
                                        </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- END: Comments -->
                    <div class="row">
                        <div class="mx-auto">
                            {{$acceptedPanelAdmins->links()}}
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