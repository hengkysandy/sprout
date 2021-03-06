@extends('layouts.profile.profile-layouts')
@section('manage-account')
<div class="col-md-12 col-sm-12 col-xs-12">
  <a href="#manageStaff" data-toggle="modal" class="btn btn-primary">Manage Staff</a>
</div>
@endsection
@section('company-profile-tab')
<div class="container-fluid padding">
              <div class="row">
                <div class="container-fluid">
                  <form class="form-horizontal margin-top">
                    <div class="form-group">
                      <label class="col-md-2 col-sm-12 col-xs-12 control-label">Package</label>
                      <div class="col-md-3 col-sm-12 col-xs-12">
                        <select class="form-control selectpicker" disabled data-live-search="true">
                          <option value="">Choose your package</option>
                          <option value="free_trial">Free Trial</option>
                          <option value="basic">Basic</option>
                          <option value="regular">Regular</option>
                          <option value="regular_plus" selected="">Regular +</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-2 col-sm-12 col-xs-12 control-label">Business Entity</label>
                      <div class="col-md-3 col-sm-12 col-xs-12">
                        <select class="selectpicker form-control" disabled>
                          <option value="">Choose business entity</option>
                          <option value="pt">PT</option>
                          <option value="cv">CV</option>
                          <option value="pd">PD</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-2 col-sm-12 col-xs-12 control-label">Company Name</label>
                      <div class="col-md-6 col-sm-12 col-xs-12">
                        <input type="text" class="form-control" value="{{$thisCompany->name}}" disabled>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-2 col-sm-12 col-xs-12 control-label">Company Tagline</label>
                      <div class="col-md-6 col-sm-12 col-xs-12">
                        <input type="text" class="form-control" value="{{$thisCompany->tagline}}" disabled>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-2 col-sm-12 col-xs-12 control-label">Address</label>
                      <div class="col-md-6 col-sm-12 col-xs-12">
                        <textarea class="form-control no-resize" rows="6" disabled>{{$thisCompany->address}}</textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-2 col-sm-12 col-xs-12 control-label">Province &amp; City</label>
                      <!-- Note: Untuk Select Province
                      Pada saat province yang dipilih adalah banten, maka seluruh city (kota) hanya berada pada cakupan city (kota) yang ada di province tersebut
                      -->
                      <div class="col-md-3 col-sm-12 col-xs-12">
                        <select class="selectpicker form-control" data-live-search="true" disabled>
                          <option value="">Select Province</option>
                          <option value="1" selected>{{$thisCompany->Province()->first()->name}}</option>
                          
                        </select>
                      </div>
                      <div class="col-md-3 col-sm-12 col-xs-12">
                        <select class="selectpicker form-control" data-live-search="true" disabled>
                          <option value="">Select City</option>
                          <option value="1" selected>{{$thisCompany->City()->first()->name}}</option>
                          
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-2 col-sm-12 col-xs-12 control-label">Zip Code</label>
                      <div class="col-md-6 col-sm-4 col-xs-4">
                        <input type="text" class="form-control" value="gak ada saat register" disabled>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-2 col-sm-12 col-xs-12 control-label">Phone Number</label>
                      <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="row">
                          <div class="col-md-3 col-sm-3 col-xs-3">
                            <input type="text" class="form-control" value="{{substr($thisCompany->phone,0,3)}}" disabled>
                          </div>
                          <div class="col-md-1 col-sm-1 col-xs-1">
                            <label class="control-label">-</label>
                          </div>
                          <div class="col-md-8 col-sm-8 col-xs-8">
                            <input type="text" class="form-control" value="{{substr($thisCompany->phone,3)}}" disabled>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-2 col-sm-12 col-xs-12 control-label">Mobile Phone</label>
                      <div class="col-md-6 col-sm-12 col-xs-12">
                        <input type="text" class="form-control" value="{{$thisCompany->mobile_number}}" disabled>
                      </div>
                    </div>
                    <div class="wpMainProduct">
                      <div id="removeMp" class="form-group">
                        <div class="col-md-12 no-padding main-product">
                          <label class="col-md-2 col-sm-12 col-xs-12 control-label labelfirst">Main Product</label>
                          <div class="col-md-6 col-sm-12 col-xs-12">
                            <input id="mp-1" type="text" class="form-control inline-input" value="{{$thisCompany->CompanyMainProduct()->first()->main_product_name}}" disabled>
                            <button type="button" class="btn btn-sm btn-danger btn-remove-main-product"><i class="fa fa-minus"></i></button>
                          </div>
                        </div>
                        <div id="appendMp"></div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-offset-2 col-sm-12 col-xs-12">
                          <button type="button" id="addMainProduct" class="btn btn-sm btn-primary">Add Main Product</button>
                        </div>
                      </div>
                    </div>
                    <div class="wrapperCataloguePrf">
                      <div id="removeCataloguePrf" class="form-group">
                        <div class="">
                          <label class="col-md-2 col-sm-12 col-xs-12 control-label">Product Catalogue</label>
                          <div class="col-md-6 col-sm-12 col-xs-12">
                            <input type="text" class="form-control" placeholder="ini ambil dari mana ya?" disabled>
                          </div>

                          <div class="col-md-4 col-sm-4 col-xs-6 margin-top-med-and-down">
                            <input type="file">
                            <p class="help-block hide-on-med-and-down">(.docx, .pdf, or photo of document Product Catalogue)</p>
                          </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <div class="form-group">
                            <label class="col-md-2 col-sm-0 col-xs-0 control-label"></label>
                            <div class="col-md-10 col-sm-12 col-xs-12">
                              <a href="#" class="btn btn-success">Open Document</a>
                              <a href="#delete" data-toggle="modal" class="btn btn-danger">Delete Document</a>
                              <p class="help-block">Certificate Halal</p>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-2 col-sm-0 col-xs-0 control-label"></label>
                            <div class="col-md-10 col-sm-12 col-xs-12">
                              <a href="../storage/sample.pdf" class="btn btn-success">Open Document</a>
                              <a href="#deleteDoc" class="btn btn-danger">Delete Document</a>
                              <p class="help-block">Catalogue 1</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label class="col-md-2 col-sm-12 col-xs-12 control-label">Contact Name</label>
                      <div class="col-md-6 col-sm-12 col-xs-12">
                        <input type="text" class="form-control" value="{{$thisCompany->contact_name}}" disabled>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-2 col-sm-12 col-xs-12 control-label">Interested Program</label>
                      <div class="col-md-2 col-sm-2 col-xs-2">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" {{$thisCompany->CompanyInterestedProgram()->where('id_interested_program',1)->first() ? 'checked' : ''}} disabled> Selling
                          </label>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-3 col-xs-3">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" {{$thisCompany->CompanyInterestedProgram()->where('id_interested_program',2)->first() ? 'checked' : ''}} disabled> Buying
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-2 col-sm-12 col-xs-12 control-label">Company Status</label>
                      <div class="col-md-2 col-sm-2 col-xs-2">
                        <div class="radio">
                          <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" {{$thisCompany->tax_type == 'PKP' ? 'checked' : ''}} disabled>
                            PKP
                          </label>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-3 col-xs-3">
                        <div class="radio">
                          <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" {{$thisCompany->tax_type == 'Non PKP' ? 'checked' : ''}} disabled>
                            Non PKP
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-2 col-sm-12 col-xs-12 control-label">Required Document</label>
                      <!-- Note:
                      Untuk bagian ini client minta biar bisa buka file pdf, docs, atau sejenisnya, for all required document
                      -->
                      <div class="col-md-10 col-sm-12 col-xs-12">
                        <!-- Note: Berlaku untuk setiap required document
                        Untuk tombol choose document jika document dihapus maka tombol baru akan muncul, jika document ada maka tombol choose document tidak di munculkan
                        -->
                        <!--<label class="btn btn-primary btn-file">
                          Choose Document <input type="file" class="hide">
                        </label>-->
                        <a href="../storage/sample.pdf" class="btn btn-success">Open Document</a>
                        <a href="#deleteDoc" data-toggle="modal" class="btn btn-danger">Delete Document</a>
                        <p class="help-block">Scan of Business Licence / SIUP</p>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-2 col-sm-12 col-xs-12 control-label"></label>
                      <div class="col-md-10 col-sm-12 col-xs-12">
                        <!-- Note: Berlaku untuk setiap required document
                        Untuk tombol choose document jika document dihapus maka tombol baru akan muncul, jika document ada maka tombol choose document tidak di munculkan
                        -->
                        <!--<label class="btn btn-primary btn-file">
                          Choose Document <input type="file" class="hide">
                        </label>-->
                        <a href="../storage/sample.pdf" class="btn btn-success">Open Document</a>
                        <a href="#deleteDoc" data-toggle="modal" class="btn btn-danger">Delete Document</a>
                        <p class="help-block">Scan of Tax ID / NPWP</p>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-2 col-sm-12 col-xs-12 control-label">Certification <small><strong>(optional)</strong></small></label>
                      <div class="col-md-10 col-sm-12 col-xs-12">
                        <!-- Note: Berlaku untuk setiap required document
                        Untuk tombol choose document jika document dihapus maka tombol baru akan muncul, jika document ada maka tombol choose document tidak di munculkan
                        -->
                        <!--<label class="btn btn-primary btn-file">
                          Choose Document <input type="file" class="hide">
                        </label>-->
                        <a href="../storage/sample.pdf" class="btn btn-success">Open Document</a>
                        <a href="#deleteDoc" class="btn btn-danger">Delete Document</a>
                        <p class="help-block">Certificate 1081</p>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-2 col-sm-0 col-xs-0 control-label"></label>
                      <div class="col-md-10 col-sm-12 col-xs-12" style="margin-bottom: 10px;">
                        <img src="../../images/amazon.png" class="show-logo" alt="Amazon">
                      </div>

                      <div class="hide-on-med-and-down">
                        <br><br><br><br><br>
                      </div>

                      <label class="col-md-2 col-sm-12 col-xs-12 control-label">Company Logo</label>
                      <div class="col-md-10 col-sm-12 col-xs-12">
                        <!-- Note: Berlaku juga untuk logo
                        Untuk tombol browse jika logo dihapus maka tombol baru akan muncul, jika logo ada maka tombol choose document tidak di munculkan
                        -->
                        <label class="btn btn-primary btn-file">
                          Browse <input type="file" class="hide">
                        </label>
                        <a href="../../images/amazon.png" class="btn btn-success">Open Logo</a>
                        <a href="#" class="btn btn-danger">Delete Logo</a>
                        <p class="help-block">Insert image logo with format .png</p>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-10 col-md-offset-2 col-sm-12 col-xs-12">
                        <button type="button" class="btn btn-primary">Save</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
@endsection
@section('business-category-tab')
<div class="container-fluid padding">
  <div class="row">
    
    <div class="col-md-12 col-sm-12 col-xs-12 margin-top">
      <div class="table-responsive">
        <table class="table table-middle table-bordered table-hover">
          <thead>
            <tr>
              <th>Section</th>
              <th>Section Name</th>
              <th>Division</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Section A</td>
              <td>Agriculture, forestry and fishing</td>
              <td>Division 1, Division 2</td>
              <td>
                <a href="#detailBc" data-toggle="modal" class="btn btn-orange btn-sm">Detail</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>


    <div class="col-md-12 col-sm-6 col-xs-12">
      <div class="row">
        <div class="col-md-8 col-sm-12 col-xs-12">
          <div class="col-md-8 col-sm-8 col-xs-12 no-padding-left">
            <div class="form-group">
              <label class="block">Package</label>
              <input type="text" class="form-control" disabled="" value="Regular +">
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
              <label class="block" style="visibility:hidden;">test</label>
              <a href="#" class="form-control" style="border:0px"><i class="fa fa-question-circle"></i> Package Information</a>
            </div>
          </div>
        </div>

        <div class="col-md-8 col-sm-12 col-xs-8">
          <div class="col-md-8 col-sm-8 col-xs-12 no-padding-left">
            <div class="form-group">
              <label>Account Duration</label>
              <input type="text" class="form-control" disabled="" value="10 November 2018">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
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

<div class="modal fade" id="manageStaff" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Manage Staff</h4>
      </div>
      <div class="modal-body">
        <a href="#addStaff" data-toggle="modal" class="btn btn-primary">Add Staff</a>
        <div class="table-responsive margin-top">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nama Staff</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($user as $key => $value)
              <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->first_name.' '.$value->last_name}}</td>
                <td>
                  <a href="#editStaff" data-toggle="modal" class="btn btn-primary btn-sm">Edit</a>
                  <a href="#deleteStaff" data-toggle="modal" class="btn btn-danger btn-sm">Delete</a>
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

<div class="modal fade" id="addStaff" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="doRegisUser" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Add Staff</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>User Type</label>
                <select class="form-control" name="role">
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

<div class="modal fade" id="editStaff" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit Staff</h4>
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
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="deleteStaff" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Are you sure want to delete this staff?</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Delete</button>
      </div>
    </div>
  </div>
</div>
@endsection