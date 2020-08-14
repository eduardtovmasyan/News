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
                            <img src="{{ asset('assets/pages/media/users/user.png') }}"> </div>
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