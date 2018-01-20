@extends('layouts.user.app')
@section('content')
@include('layouts.user.navbar')
<div id="main" class="container-fluid">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<h1 class="main-title no-margin-top">Citra Tubindo Tbk</h1>
		</div>
		@yield('manage-account')

		<div class="col-md-9 col-sm-12 col-xs-12 margin-top">
			<ul class="nav nav-tabs nav-justified" role="tablist">
				<li role="presentation" class="active"><a href="#cp" aria-controls="cp" role="tab" data-toggle="tab">Company Profile</a></li>
				<li role="presentation"><a href="#up" aria-controls="up" role="tab" data-toggle="tab">User Profile</a></li>
				<li role="presentation"><a href="#bc" aria-controls="bc" role="tab" data-toggle="tab">Business Category</a></li>
			</ul>
		</div>
		<div class="col-md-9 col-sm-12 col-xs-12">
			<div class="tab-content margin-bottom">
				<div role="tabpanel" class="tab-pane bg-white active border-tab-pane" id="cp">
					<!-- This is for company profile id -->
					@yield('company-profile-tab')
				</div>

				<div role="tabpanel" class="tab-pane bg-white border-tab-pane" id="up">
					<div class="container-fluid padding">
						<div class="">
							<div class="container-fluid">
								<form method="post" action="{{url('doEditUser')}}" class="form-horizontal margin-top">
									{{csrf_field()}}
									<input type="hidden" value="{{$thisUser->id}}" name="userId">
									<div class="row">
										<div class="form-group">
											<label class="col-md-2 col-sm-12 col-xs-12 control-label">User Type <small class="text-danger"><strong>(required)</strong></small></label>
											<div class="col-md-4 col-sm-12 col-xs-12">
												<select class="form-control" disabled="">
													<option value="{{$thisUser->UserRole->Role->name}}">{{$thisUser->UserRole->Role->name}}</option>
												</select>
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-2 col-sm-12 col-xs-12 control-label">Email <small class="text-danger"><strong>(required)</strong></small></label>
											<div class="col-md-6 col-sm-12 col-xs-12">
												<input name="email" type="text" class="form-control" placeholder="Email" value="{{$thisUser->email}}">
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-2 col-sm-12 col-xs-12 control-label">First Name <small class="text-danger"><strong>(required)</strong></small></label>
											<div class="col-md-6 col-sm-12 col-xs-12">
												<input name="firstName" type="text" class="form-control" placeholder="First Name" value="{{$thisUser->first_name}}">
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-2 col-sm-12 col-xs-12 control-label">Last Name <small class="text-danger"><strong>(required)</strong></small></label>
											<div class="col-md-6 col-sm-12 col-xs-12">
												<input name="lastName" type="text" class="form-control" placeholder="Last Name" value="{{$thisUser->last_name}}">
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-2 col-sm-12 col-xs-12 control-label">Username <small class="text-danger"><strong>(required)</strong></small></label>
											<div class="col-md-6 col-sm-12 col-xs-12">
												<input name="username" type="text" class="form-control" placeholder="Username" value="{{$thisUser->username}}">
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-2 col-sm-12 col-xs-12 control-label">Job Title <small class="text-danger"><strong>(required)</strong></small></label>
											<div class="col-md-6 col-sm-12 col-xs-12">
												<input name="jobTitle" type="text" class="form-control" placeholder="Job Title" value="{{$thisUser->job_title}}">
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-2 col-sm-12 col-xs-12 control-label">Upload Photo <small class="text-muted"><strong>(optional)</strong></small></label>
											<div class="col-md-6 col-sm-12 col-xs-12">
												<img src="{{$thisUser->photo_image}}" alt="Avatar" width="150" height="150">
												<input type="file" name="photoImage">
												<p class="help-block">Insert your photo as profile picture</p>
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-2 col-sm-12 col-xs-12 control-label">Old Password <small class="text-danger"><strong>(required)</strong></small></label>
											<div class="col-md-6">
												<input name="password" type="password" class="form-control" placeholder="Old Password">
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-2 col-sm-12 col-xs-12 control-label">New Password <small class="text-danger"><strong>(required)</strong></small></label>
											<div class="col-md-6 col-sm-12 col-xs-12">
												<input name="newPass" type="password" class="form-control" placeholder="New Password">
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-2 col-sm-12 col-xs-12 control-label">Re-Password <small class="text-danger"><strong>(required)</strong></small></label>
											<div class="col-md-6 col-sm-12 col-xs-12">
												<input name="confPass" type="password" class="form-control" placeholder="Re-Password">
											</div>
										</div>

										<div class="form-group">
											<div class="col-md-6 col-md-offset-2">
												<button type="submit" class="btn btn-primary">Save</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>

				<div role="tabpanel" class="tab-pane bg-white border-tab-pane" id="bc">
					@yield('business-category-tab')
				</div>
			</div>
		</div>
		@include('post-buy-lead.popup-view.side-nav-buy-lead')
	</div>
</div>

<div class="modal fade" id="detailBc" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Detail Business Category</h4>
			</div>
			<div class="modal-body">
				@foreach($thisCompany->CompanyBusinessCategory()->get() as $sVal)
				
				<h4><strong>{{$sVal->BusinessCategory->Section->section}}</strong></h4>
				<h5>{{$sVal->BusinessCategory->Section->name}}</h5>
					@foreach($sVal->BusinessCategory->Section->Division()->get() as $dKey => $dVal)
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">
										<a href="#division{{$dKey}}" class="no-text-decoration" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="division{{$dKey}}">{{$dVal->name}} - {{$dVal->description}}</a>
									</h3>
								</div>

								<div id="division{{$dKey}}" class="panel-body collapse">
									<div class="table-responsive">
										<table class="table table-condensed">
											<thead>
												<tr>
													<th>Group</th>
													<th>Description</th>
												</tr>
											</thead>
											<tbody>
												@foreach($dVal->Group()->get() as $gVal)
												<tr>
													<td>{{$gVal->name}}</td>
													<td>{{$gVal->description}}</td>
												</tr>
												@endforeach
											</tbody>
										</table>
									</div>
								</div>
								
							</div>
						</div>
					</div>
					@endforeach
				@endforeach
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

@yield('modal');
@endsection
