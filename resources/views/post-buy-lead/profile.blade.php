@extends('layouts.profile.profile-layouts')
@section('manage-account')
<div class="col-md-12 col-sm-12 col-xs-12">
  <a href="#manageEmployee" data-toggle="modal" class="btn btn-primary">Manage Employee</a>
</div>
@endsection
@section('company-profile-tab')
  @include('post-buy-lead.layouts-view.view-company-profile-tab')
@endsection
@section('business-category-tab')
  @include('post-buy-lead.layouts-view.view-business-category-tab')
@endsection

@section('modal')

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

<div class="modal fade" id="reactivate" tabindex="-1" role="dialog">
 <div class="modal-dialog" role="document">
   <div class="modal-content">
     <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
       <h4 class="modal-title">Reactivate Account</h4>
     </div>
     <form action="{{url('doExtendCompanyPackage')}}" method="post">
       {{csrf_field()}}
       <div class="modal-body">
         <div class="row">
           <div class="col-md-6">
             <div class="form-group">
               <label>Package</label>
               <select class="form-control" id="package" name="package">
                <option value="0">Select your package</option>
                @foreach($packageData as $packData)
                  @if($packData->id == $thisCompany->CompanyPackage()->latest('created_at')->first()->id_package)
                    <option value="{{$packData->id}}" selected="">{{$packData->name}}</option>
                  @else
                    <option value="{{$packData->id}}">{{$packData->name}}</option>
                  @endif
                  @endforeach
              </select>
            </div>
          </div>
          <div class="col-md-6">
           <div class="form-group">
             <label>Duration</label>
             <select class="form-control" name="yearDuration">
              <option value="0">Select Duration</option>
              <option value="1" selected="">1 Year</option>
              <option value="2">2 Year</option>
              <option value="3">3 Year</option>
            </select>
          </div>
        </div>
        <div class="col-md-12">
         <div class="form-group">
           <label>Price</label>
           <input type="text" class="form-control" name="price" value="0" readonly>
         </div>
       </div>
     </div>
   </div>
   <div class="modal-footer">
     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
     <button type="Submit" data-target="#konfirmasiReactivate" class="btn btn-primary">Submit</button>
   </div>
 </form>
</div>
</div>
</div>

<div class="modal fade" id="requestAddon" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Request Add-On</h4>
      </div>
      <form method="post" action="{{url('doRequestCompanyAddOn')}}">
      {{csrf_field()}}
      <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Add On</label>
                <select id="addon-select" class="form-control selectpicker" name="addonId" data-live-search="true">
                  <option value="">Select Addon</option>
                  @foreach($addOnData as $aData)
                    <option value="{{$aData->id}}">{{$aData->name}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Quantity</label>
                <select id="addon-qty" class="form-control selectpicker" name="quantity" data-live-search="true">
                  <option value="0">Select Quantity</option>
                  <option value="1" selected>1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Duration</label>
                <select id="addon-duration" class="form-control selectpicker" name="duration" data-live-search="true">
                  <option value="0">Select Duration</option>
                  <option value="1" selected>1 Year</option>
                  <option value="2">2 Year</option>
                  <option value="3">3 Year</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Price</label>
                <input id="addon-price" type="text" class="form-control" name="price" disabled value="kosong">
              </div>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" data-target="#konfirmasiRequestAddon-tampung" class="btn btn-primary" data-toggle="modal">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="reactivateAddon" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Re-Activate Add-On</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Package</label>
                <select class="form-control selectpicker" data-live-search="true" disabled>
                  <option value="">Select Package</option>
                  <option value="" selected>Basic</option>
                  <option value="">Regular +</option>
                  <option value="">Premium</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Quantity</label>
                <select class="form-control selectpicker" data-live-search="true" disabled>
                  <option value="">Select Quantity</option>
                  <option value="" selected>1</option>
                  <option value="">2</option>
                  <option value="">3</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Duration</label>
                <select class="form-control selectpicker" data-live-search="true">
                  <option value="">Select Duration</option>
                  <option value="" selected>1 Year</option>
                  <option value="">2 Year</option>
                  <option value="">3 Year</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Price</label>
                <input type="text" class="form-control" value="Rp. 1.000.000" disabled>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" data-target="#konfirmasiReactivateAddon" class="btn btn-primary" data-toggle="modal">Submit</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="konfirmasiReactivate" tabindex="1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Are you sure want to Reactivate?</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary reactivate-subs" data-dismiss="modal">Yes</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="konfirmasiRequestAddon" tabindex="1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Are you sure want to Request Add-On?</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary request-addon" data-dismiss="modal">Yes</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="konfirmasiReactivateAddon" tabindex="1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Are you sure want to Reactivate Add-On?</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary reactivate-subs" data-dismiss="modal">Yes</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="manageEmployee" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Manage Employee</h4>
      </div>
      <div class="modal-body">
        <a href="#addEmployee" data-toggle="modal" class="btn btn-primary">Add Employee</a>
        <br><br>
        <h4><label class="label label-success">Manager Quota Left: 3</label> - <label class="label label-warning">Staff Quota Left: 3</label></h4>
        <div class="table-responsive margin-top">
          <table class="table table-hover table-middle">
            <thead>
              <tr>
                <th>ID</th>
                <th>Position</th>
                <th>Name</th>
                <th>Status</th>
                <th>Head Manager</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($user as $key => $value)
              <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->role_name}}</td>
                <td>{{$value->first_name.' '.$value->last_name}}</td>
                <td>
                  @if($value->status == "Active")
                  <label class="btn btn-success btn-sm">
                    <i class="fa fa-check"></i>
                  </label>
                  @else
                  <label class="btn btn-danger btn-sm">
                    <i class="fa fa-close"></i>
                  </label>
                  @endif
                </td>
                <td>
                  @if($value->is_head == "false")
                  <a href="{{url('doSetUserHeadStatus?id_user='.$value->id.'&status=true')}}" class="btn btn-primary btn-sm">Set as head</a>
                  @else
                  <a href="{{url('doSetUserHeadStatus?id_user='.$value->id.'&status=false')}}" class="btn btn-warning btn-sm">Cancel as head</a>
                  @endif
                </td>
                <td>
                <a href="#editEmployee" data-toggle="modal" class="btn btn-primary btn-sm">Edit</a>
                  <a href="#" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure want to delete this?');">Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="addEmployee" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="doRegisUser" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Add Account</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>User Type</label>
                <select name="role" class="form-control">
                  <option value="">Choose user type</option>
                  @foreach($role as $key => $value)
                  <option value="{{$value->id}}">{{$value->name}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>First Name</label>
                <input type="text" name="firstName" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Last Name</label>
                <input type="text" name="lastName" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Job Title</label>
                <input type="text" name="jobTitle" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" class="form-control">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Upload Photo</label>
                <input type="file" name="photoImage">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="editEmployee" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit Employee</h4>
      </div>
      <div class="modal-body">
        <form action="">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>User Type</label>
                <select class="form-control">
                  <option value="">Choose user type</option>
                  <option value="">Procurement Staff</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>First Name</label>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Last Name</label>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Job Title</label>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" class="form-control">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <img src="../../images/avatar.jpg" width="150" height="150"><br>
                <label>Upload Photo</label>
                <input type="file">
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="deleteEmployee" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Are you sure want to delete this employee?</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Delete</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="delete" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Are you sure want to delete this?</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Delete</button>
      </div>
    </div>
  </div>
</div>

  @if(session()->get('userSession')[0]->role_id != 2)
    <script type="text/javascript">
      $("#company-profile-form :input").attr("disabled", true);
    </script>
  @endif

@endsection