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
								<form class="form-horizontal margin-top">
									<div class="row">
										<div class="form-group">
											<label class="col-md-2 col-sm-12 col-xs-12 control-label">User Type <small class="text-danger"><strong>(required)</strong></small></label>
											<div class="col-md-4 col-sm-12 col-xs-12">
												<select class="form-control">
													<option value="">Choose user type</option>
													<option value="master_procurement_manager">Master Procurement Manager</option>
													<option value="master_sales_manager">Master Sales Manager</option>
													<option value="procurement_manager" selected="">Procurement Manager</option>
													<option value="procurement_staff">Procurement Staff</option>
													<option value="sales_manager">Sales Manager</option>
													<option value="sales_staff">Sales Staff</option>
												</select>
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-2 col-sm-12 col-xs-12 control-label">Email <small class="text-danger"><strong>(required)</strong></small></label>
											<div class="col-md-6 col-sm-12 col-xs-12">
												<input type="text" class="form-control" placeholder="Email" value="{{$thisUser->email}}">
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-2 col-sm-12 col-xs-12 control-label">First Name <small class="text-danger"><strong>(required)</strong></small></label>
											<div class="col-md-6 col-sm-12 col-xs-12">
												<input type="text" class="form-control" placeholder="First Name" value="{{$thisUser->first_name}}">
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-2 col-sm-12 col-xs-12 control-label">Last Name <small class="text-danger"><strong>(required)</strong></small></label>
											<div class="col-md-6 col-sm-12 col-xs-12">
												<input type="text" class="form-control" placeholder="Last Name" value="{{$thisUser->last_name}}">
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-2 col-sm-12 col-xs-12 control-label">Username <small class="text-danger"><strong>(required)</strong></small></label>
											<div class="col-md-6 col-sm-12 col-xs-12">
												<input type="text" class="form-control" placeholder="Username" value="{{$thisUser->username}}">
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-2 col-sm-12 col-xs-12 control-label">Job Title <small class="text-danger"><strong>(required)</strong></small></label>
											<div class="col-md-6 col-sm-12 col-xs-12">
												<input type="text" class="form-control" placeholder="Job Title" value="{{$thisUser->job_title}}">
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-2 col-sm-12 col-xs-12 control-label">Upload Photo <small class="text-muted"><strong>(optional)</strong></small></label>
											<div class="col-md-6 col-sm-12 col-xs-12">
												<img src="{{$thisUser->photo_image}}" alt="Avatar" width="150" height="150">
												<input type="file">
												<p class="help-block">Insert your photo as profile picture</p>
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-2 col-sm-12 col-xs-12 control-label">Old Password <small class="text-danger"><strong>(required)</strong></small></label>
											<div class="col-md-6">
												<input type="password" class="form-control" placeholder="Old Password">
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-2 col-sm-12 col-xs-12 control-label">New Password <small class="text-danger"><strong>(required)</strong></small></label>
											<div class="col-md-6 col-sm-12 col-xs-12">
												<input type="password" class="form-control" placeholder="New Password">
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-2 col-sm-12 col-xs-12 control-label">Re-Password <small class="text-danger"><strong>(required)</strong></small></label>
											<div class="col-md-6 col-sm-12 col-xs-12">
												<input type="password" class="form-control" placeholder="Re-Password">
											</div>
										</div>

										<div class="form-group">
											<div class="col-md-6 col-md-offset-2">
												<a href="#" class="btn btn-primary">Save</a>
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
		@include('layouts.user.side-nav')
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
				<h4><strong>Section A</strong></h4>
				<h5>Agriculture, forestry and fishing</h5>

				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">
									<a href="#division1" class="no-text-decoration" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="division1">Division 1 - Crop and animal production, hunting and related service activities</a>
								</h3>
							</div>
							<div id="division1" class="panel-body collapse">
								<div class="table-responsive">
									<table class="table table-condensed">
										<thead>
											<tr>
												<th>Group</th>
												<th>Description</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>011</td>
												<td>Growing of non-perennial crops</td>
											</tr>
											<tr>
												<td>012</td>
												<td>Growing of perennial crops</td>
											</tr>
											<tr>
												<td>013</td>
												<td>Plant propagation</td>
											</tr>
											<tr>
												<td>014</td>
												<td>Animal production</td>
											</tr>
											<tr>
												<td>015</td>
												<td>Mixed farming</td>
											</tr>
											<tr>
												<td>016</td>
												<td>Support activities to agriculture and post-harvest crop activities</td>
											</tr>
											<tr>
												<td>017</td>
												<td>Hunting, trapping and related service activities</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">
									<a href="#division2" class="no-text-decoration" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="division2">Division 2 - Forestry and logging</a>
								</h3>
							</div>
							<div id="division2" class="panel-body collapse">
								<div class="table-responsive">
									<table class="table table-condensed">
										<thead>
											<tr>
												<th>Group</th>
												<th>Description</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>021</td>
												<td>Silviculture and other forestry activities</td>
											</tr>
											<tr>
												<td>022</td>
												<td>Logging</td>
											</tr>
											<tr>
												<td>023</td>
												<td>Gathering of non-wood forest products</td>
											</tr>
											<tr>
												<td>024</td>
												<td>Support services to forestry</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

@yield('modal');
@include('layouts.dashboard.menu-mobile')
@endsection
