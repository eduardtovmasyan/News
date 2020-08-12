@extends('../layouts.app')
@section('content')
<!-- BEGIN PAGE HEADER-->
<!-- BEGIN PAGE TITLE-->
<h1 class="page-title" > Admins List | Admins
<small></small>
</h1>
<!-- END PAGE TITLE-->
<!-- END PAGE HEADER-->
@if(Auth::user()->role == 'super_admin')
<div class="col" style="margin-top: 50px">
    <div class="portlet light bordered">
        <div class="portlet-title tabbable-line">
            <div class="caption">
                <i class=" icon-social-twitter font-dark hide"></i>
                <span class="caption-subject font-dark bold uppercase">Accept/Decline</span>
            </div>
            
        </div>
        <div class="portlet-body">
            <div class="tab-content">
                <div class="tab-pane active" id="tab_actions_pending">
                    <!-- BEGIN: Actions -->
                    @foreach($users as $user)
                    @if($user->is_active == 'panding')
                    <div class="mt-actions">
                        <div class="mt-action">
                            <div class="mt-action-img">
                            <img src="../assets/pages/media/users/user.png"> </div>
                            <div class="mt-action-body">
                                <div class="mt-action-row">
                                    <div class="mt-action-info ">
                                        <div class="mt-action-details ">
                                            <span class="mt-action-author">{{ $user->name }} {{ $user->surname }}</span>
                                            <p class="mt-action-desc">{{ $user->email }}</p>
                                        </div>
                                    </div>
                                    <div class="mt-action-datetime ">
                                        <span class="mt-action-date"></span>
                                        <span class="mt-action-dot bg-green"></span>
                                        <span class="mt=action-time">{{ $user->created_at }}</span>
                                    </div>
                                    <div class="mt-action-buttons ">
                                        <div class="btn-group btn-group-circle">
                                            <button type="button" class="btn btn-outline green btn-sm profile-accept" value="{{ $user->id }} ">Accept</button>
                                            <button type="button" class="btn btn-outline red btn-sm profile-decline" value="{{ $user->id }} ">Decline</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    <!-- END: Actions -->
                </div>
                
            </div>
        </div>
    </div>
</div>
@endif
<hr>
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
                    @foreach($users as $user)
                    @if($user->is_active == 'accepted' && $user->role == 'super_admin')
                    <div class="mt-comments">
                        <div class="mt-comment">
                            <div class="mt-comment-img">
                            <img src="../assets/pages/media/users/user.png"> </div>
                            <div class="mt-comment-body">
                                <div class="mt-comment-info">
                                    <span class="mt-comment-author">{{ $user->name }} {{ $user->surname }}</span>
                                    <span class="mt-comment-date">{{ $user->created_at }}</span>
                                </div>
                                <div class="mt-comment-text"> {{ $user->email }} </div>
                                <div class="mt-comment-details">
                                    <span class="mt-comment-status mt-comment-status-rejected">{{ $user->role }}</span>
                                    <ul class="mt-comment-actions">
                                        @if($user->id == Auth::id())
                                        <li>
                                            <a href="{{ url('profile') }}">Edit</a>
                                        </li>
                                        @endif
                                        
                                        <li>
                                            <a href="#">View</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    <!-- END: Comments -->
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
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
                    @foreach($users as $user)
                    @if($user->is_active == 'accepted' && $user->role == 'panel_admin')
                    <div class="mt-comments">
                        <div class="mt-comment">
                            <div class="mt-comment-img">
                            <img src="../assets/pages/media/users/user.png"> </div>
                            <div class="mt-comment-body">
                                <div class="mt-comment-info">
                                    <span class="mt-comment-author">{{ $user->name }} {{ $user->surname }}</span>
                                    <span class="mt-comment-date">{{ $user->created_at }}</span>
                                </div>
                                <div class="mt-comment-text"> {{ $user->email }} </div>
                                <div class="mt-comment-details">
                                    <span class="mt-comment-status mt-comment-status-rejected">{{ $user->role }}</span>
                                    <ul class="mt-comment-actions">
                                        @if($user->id == Auth::id())
                                        <li>
                                            <a href="{{ url('profile') }}">Edit</a>
                                        </li>
                                        @endif
                                        
                                        <li>
                                            <a href="/api/user/{{ $user->id }}">View</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    <!-- END: Comments -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script src="{{ asset('js/profile_access.js')}}" type="text/javascript"></script>
@endsection