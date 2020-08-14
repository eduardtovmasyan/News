@extends('../layouts.app')
@section('content')
<h1 class="page-title" > Admins List | Admins
<small></small>
</h1>
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
                            <img src="{{ asset('assets/pages/media/users/user.png') }}"> </div>
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
                                            <button type="button" class="btn btn-outline green btn-sm profile-accept" value="{{ $pandingPanelAdmin->id }}">Accept</button>
                                            <button type="button" class="btn btn-outline red btn-sm profile-decline" value="{{ $pandingPanelAdmin->id }}">Decline</button>
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
@endsection
@section('js')
<script src="{{ asset('js/profile_access.js')}}" type="text/javascript"></script>
@endsection