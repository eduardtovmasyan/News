@extends('../layouts.app')
@section('content')
<!-- BEGIN PAGE HEADER-->
<!-- BEGIN PAGE TITLE-->
<h1 class="page-title" > {{ $user->name }} {{ $user->surname }} | {{ $user->role }}
<small> &nbsp <span class="badge badge-success"> {{ $user->is_active }}</span>
</small>
</h1>
<!-- END PAGE TITLE-->
<!-- END PAGE HEADER-->
<div class="col-md-12">
	<!-- BEGIN PROFILE SIDEBAR -->
	<div class="">
		<!-- PORTLET MAIN -->
		<div class="portlet light profile-sidebar-portlet ">
			<!-- SIDEBAR USERPIC -->
			
			<!-- END PORTLET MAIN -->
			<!-- PORTLET MAIN -->
			<div class="portlet light ">
				<!-- STAT -->
				<div class="row list-separated profile-stat">
					<div class="col-md-4 col-sm-4 col-xs-6">
						<div class="uppercase profile-stat-title"> 37 </div>
						<div class="uppercase profile-stat-text"> Projects </div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6">
						<div class="uppercase profile-stat-title"> 51 </div>
						<div class="uppercase profile-stat-text"> Tasks </div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6">
						<div class="uppercase profile-stat-title"> 61 </div>
						<div class="uppercase profile-stat-text"> Uploads </div>
					</div>
				</div>
				<!-- END STAT -->
				<div>
					<h4 class="profile-desc-title">About {{ $user->name }} {{ $user->surname }}</h4>
					<span class="profile-desc-text"> Lorem ipsum dolor sit amet diam nonummy nibh dolore. </span>
					<div class="margin-top-20 profile-desc-link">
						<i class="fa fa-envelope" style="color: #ed6b75"> {{ $user->email }}</i>
						<a href=""></a>
					</div>
					<div class="margin-top-20 profile-desc-link">
						<i class="fa fa-globe" style="color: #3471ad"> {{ $user->name }} {{ $user->surname }}</i>
						<a href=""></a>
					</div>
					<div class="margin-top-20 profile-desc-link">
						<i class="fa fa-twitter" style="color:#36c6d3"> {{ " ".$user->name }} {{ $user->surname }}</i>
						<a href=""></a>
					</div>
					<div class="margin-top-20 profile-desc-link">
						<i class="fa fa-facebook" style="color:#3471ad"> {{ $user->name }} {{ $user->surname }}</i>
						<a href=""></a>
					</div>
				</div>
			</div>
			<!-- END PORTLET MAIN -->
		</div>
		<!-- END BEGIN PROFILE SIDEBAR -->
		<!-- BEGIN PROFILE CONTENT -->
		
		<!-- END PROFILE CONTENT -->
	</div>
	@endsection
	@section('js')
	@endsection