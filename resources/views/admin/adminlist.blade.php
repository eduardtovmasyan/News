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
                    @foreach($pandingPanelAdmins as $pandingPanelAdmin)
                    <div class="mt-actions">
                        <div class="mt-action">
                            <div class="mt-action-img">
                            <img src="../assets/pages/media/users/user.png"> </div>
                            <div class="mt-action-body">
                                <div class="mt-action-row">
                                    <div class="mt-action-info ">
                                        <div class="mt-action-details ">
                                            <span class="mt-action-author">{{ $pandingPanelAdmin->name }} {{ $pandingPanelAdmin->surname }}</span>
                                            <p class="mt-action-desc">{{ $pandingPanelAdmin->email }}</p>
                                        </div>
                                    </div>
                                    <div class="mt-action-datetime ">
                                        <span class="mt-action-date"></span>
                                        <span class="mt-action-dot bg-green"></span>
                                        <span class="mt=action-time">{{ $pandingPanelAdmin->created_at }}</span>
                                    </div>
                                    <div class="mt-action-buttons ">
                                        <div class="btn-group btn-group-circle">
                                            <button type="button" class="btn btn-outline green btn-sm profile-accept" value="{{ $pandingPanelAdmin->id }} ">Accept</button>
                                            <button type="button" class="btn btn-outline red btn-sm profile-decline" value="{{ $pandingPanelAdmin->id }} ">Decline</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- END: Actions -->
                    <div class="row">
                        <div class="mx-auto">
                            {{ $pandingPanelAdmins->links() }}
                        </div>
                    </div>
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
                    @foreach($superAdmins as $superAdmin)
                    <div class="mt-comments">
                        <div class="mt-comment">
                            <div class="mt-comment-img">
                            <img src="../assets/pages/media/users/user.png"> </div>
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
                    @foreach($acceptedPanelAdmins as $acceptedPanelAdmin)
                    <div class="mt-comments">
                        <div class="mt-comment">
                            <div class="mt-comment-img">
                            <img src="../assets/pages/media/users/user.png"> </div>
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
<hr>
<div class="col">
    <div class="portlet light bordered">
        <div class="portlet-title tabbable-line">
            <div class="caption">
                <i class="icon-bubbles font-dark hide"></i>
                <span class="caption-subject font-dark bold uppercase">Blocked Admin List</span>
            </div>
            
        </div>
        <div class="portlet-body">
            <div class="tab-content">
                <div class="tab-pane active panel_admin_list" id="portlet_comments_1">
                    <!-- BEGIN: Comments -->
                    @foreach($blockedPanelAdmins as $blockedPanelAdmin)
                    <div class="mt-comments">
                        <div class="mt-comment">
                            <div class="mt-comment-img">
                            <img src="../assets/pages/media/users/user.png"> </div>
                            <div class="mt-comment-body">
                                <div class="mt-comment-info">
                                    <span class="mt-comment-author">{{ $blockedPanelAdmin->name }} {{ $blockedPanelAdmin->surname }}</span>
                                    <span class="mt-comment-date">{{ $blockedPanelAdmin->created_at }}</span>
                                </div>
                                <div class="mt-comment-text"> {{ $blockedPanelAdmin->email }} </div>
                                <div class="mt-comment-details">
                                    <span class="mt-comment-status mt-comment-status-rejected">{{ $blockedPanelAdmin->role }}</span>
                                    <ul class="mt-comment-actions">
                                        @if($blockedPanelAdmin->id == Auth::id())
                                        <li>
                                            <a href="{{ url('profile') }}">Edit</a>
                                        </li>
                                        @endif
                                        
                                        <li>
                                            <a href="/profile/details/{{ $blockedPanelAdmin->id }}">View</a>
                                        </li>
                                        @if(Auth::user()->role == 'super_admin')
                                        <li>
                                            <a class="admin_remove" data-id="{{ $blockedPanelAdmin->id }}" >Delete</a>
                                        </li>
                                        <li>
                                            <a class="admin_admit" data-id="{{ $blockedPanelAdmin->id }}" style="color: #28a745">Admit</a>
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
                            {{$blockedPanelAdmins->links()}}
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