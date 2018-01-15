@extends('layouts.profile.profile-layouts')
@section('manage-account')
  @if( !in_array(session()->get('userSession')[0]->role_id,[4,6]))
  <div class="col-md-12 col-sm-12 col-xs-12">
    <a href="#manageEmployee" data-toggle="modal" class="btn btn-primary">Manage Employee</a>
  </div>
  @endif
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
        @foreach($thisCompany->CompanyBusinessCategory()->get() as $sVal)

        <h4><strong>{{$sVal->BusinessCategory->Section->section}}</strong></h4>
        <h5>{{$sVal->BusinessCategory->Section->name}}</h5>

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
          
        </div>
        @endforeach
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
             <select class="form-control" name="yearDuration" id="yearDuration">
              <option value="0">Select Duration</option>
              <option value="1" selected="">1 Year</option>
              <option value="2">2 Year</option>
              <option value="3">3 Year</option>
            </select>
          </div>
        </div>
        <div class="col-md-12">
           <div class="form-group">
             <label>Extend Company Add on</label>
          </div>
        </div>
        <div class="col-md-8">
          @foreach($currCompanyAddOn as $data)
           <div class="form-group">
             <div class="col-md-4">
                <label>{{$data->AddOn->name}}({{$data->quantity}})</label>
             </div>
             <div class="col-md-4">
                <input type="checkbox" class="addon" name="listOfCompAddOnId[]" value="{{$data->id}}">
             </div>
           </div>
           <br>
         @endforeach
         
       </div>
        <div class="col-md-12">
         <div class="form-group">
           <label>Price</label>
           <input type="text" class="form-control" id="reactivePrice" value="0" readonly>
           <input type="hidden" class="form-control" name="reactivePrice">
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


@include('post-buy-lead.popup-view.request-add-on-pop-up')


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


@include('post-buy-lead.popup-view.manage-employee-pop-up')

<div class="modal fade" id="addEmployee" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="{{url('doRegisUser')}}" method="post" enctype="multipart/form-data">
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
      <form action="{{url('doEditUser')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="hidden" name="userId" id="userId">
      <div class="modal-body">
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
                <input type="text" name="firstName" id="firstName" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Last Name</label>
                <input type="text" id="lastName" name="lastName" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" id="email" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" id="username" class="form-control">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Job Title</label>
                <input type="text" name="jobTitle" id="jobTitle" class="form-control">
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
                <input type="password" name="confPass" class="form-control">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <img id="photoImage" width="150" height="150"><br>
                <label>Upload Photo</label>
                <input type="file" name="photoImage">
              </div>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>
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
  <script type="text/javascript">
    $package = <?php echo $packageData?>;
    $currCompanyAddOn = <?php echo $currCompanyAddOn?>;
  </script>
  <script type="text/javascript" src="{{asset('js/myscript/manage-employee.js')}}"></script>
  @if(session()->get('userSession')[0]->role_id != 2)
    <script type="text/javascript">
      $("#company-profile-form :input").attr("disabled", true);
      $('#company-profile-form a').click(function(e) {
          e.preventDefault();
      });
    </script>
  @endif

@endsection