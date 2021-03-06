@extends('layouts.profile.profile-layouts')
@section('company-profile-tab')
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
        <input type="text" class="form-control" value="Argomas Internusa" disabled>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-2 col-sm-12 col-xs-12 control-label">Company Tagline</label>
      <div class="col-md-6 col-sm-12 col-xs-12">
        <input type="text" class="form-control" value="Company Tagline Company Tagline" disabled>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-2 col-sm-12 col-xs-12 control-label">Address</label>
      <div class="col-md-6 col-sm-12 col-xs-12">
        <textarea class="form-control no-resize" rows="6" disabled>Ki. Antapani Lama No. 365, BaBel</textarea>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-2 col-sm-12 col-xs-12 control-label">Province &amp; City</label>

      <div class="col-md-3 col-sm-12 col-xs-12">
        <select class="selectpicker form-control" data-live-search="true" disabled>
          <option value="">Select Province</option>
          <option value="1" selected>Aceh</option>
          <option value="2">Bali</option>
          <option value="3">Bangkulu</option>
          <option value="4">Banten</option>
        </select>
      </div>
      <div class="col-md-3 col-sm-12 col-xs-12">
        <select class="selectpicker form-control" data-live-search="true" disabled>
          <option value="">Select City</option>
          <option value="1" selected>Mana Saja</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-2 col-sm-12 col-xs-12 control-label">Zip Code</label>
      <div class="col-md-6 col-sm-4 col-xs-4">
        <input type="text" class="form-control" value="15560" disabled>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-2 col-sm-12 col-xs-12 control-label">Phone Number</label>
      <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="row">
          <div class="col-md-3 col-sm-3 col-xs-3">
            <input type="text" class="form-control" value="021" disabled>
          </div>
          <div class="col-md-1 col-sm-1 col-xs-1">
            <label class="control-label">-</label>
          </div>
          <div class="col-md-8 col-sm-8 col-xs-8">
            <input type="text" class="form-control" value="55772211" disabled>
          </div>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-2 col-sm-12 col-xs-12 control-label">Mobile Phone</label>
      <div class="col-md-6 col-sm-12 col-xs-12">
        <input type="text" class="form-control" value="085678910" disabled>
      </div>
    </div>
    <div class="wpMainProduct">
      <div id="removeMp" class="form-group">
        <div class="col-md-12 no-padding main-product">
          <label class="col-md-2 col-sm-12 col-xs-12 control-label labelfirst">Main Product</label>
          <div class="col-md-6 col-sm-12 col-xs-12">
            <input id="mp-1" type="text" class="form-control inline-input" value="Frozen Fish" disabled>
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
            <input type="text" class="form-control" placeholder="Product Catalogue" disabled>
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
        <input type="text" class="form-control" value="Cahyo Gumilang" disabled>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-2 col-sm-12 col-xs-12 control-label">Interested Program</label>
      <div class="col-md-2 col-sm-2 col-xs-2">
        <div class="checkbox">
          <label>
            <input type="checkbox" checked disabled> Selling
          </label>
        </div>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-3">
        <div class="checkbox">
          <label>
            <input type="checkbox" checked disabled> Buying
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-2 col-sm-12 col-xs-12 control-label">Company Status</label>
      <div class="col-md-2 col-sm-2 col-xs-2">
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked disabled>
            PKP
          </label>
        </div>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-3">
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" disabled>
            Non PKP
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-2 col-sm-12 col-xs-12 control-label">Required Document</label>

      <div class="col-md-10 col-sm-12 col-xs-12">

        <a href="../storage/sample.pdf" class="btn btn-success">Open Document</a>
        <a href="#deleteDoc" data-toggle="modal" class="btn btn-danger">Delete Document</a>
        <p class="help-block">Scan of Business Licence / SIUP</p>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-2 col-sm-12 col-xs-12 control-label"></label>
      <div class="col-md-10 col-sm-12 col-xs-12">

        <a href="../storage/sample.pdf" class="btn btn-success">Open Document</a>
        <a href="#deleteDoc" data-toggle="modal" class="btn btn-danger">Delete Document</a>
        <p class="help-block">Scan of Tax ID / NPWP</p>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-2 col-sm-12 col-xs-12 control-label">Certification <small><strong>(optional)</strong></small></label>
      <div class="col-md-10 col-sm-12 col-xs-12">

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


    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="row">
        <div class="col-md-8 col-sm-12 col-xs-12">
          <div class="form-group">
            <label class="block">Package</label>
            <div class="col-md-8 col-sm-8 col-xs-12 no-padding-left">
              <input type="text" class="form-control" disabled="" value="Regular +">
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <a href="#" class="inline-block"><i class="fa fa-question-circle"></i> Package Information</a>
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
              <tr>
                <td>1</td>
                <td>Sakura</td>
                <td>
                  <a href="#editStaff" data-toggle="modal" class="btn btn-primary btn-sm">Edit</a>
                  <a href="#deleteStaff" data-toggle="modal" class="btn btn-danger btn-sm">Delete</a>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Ino</td>
                <td>
                  <a href="#editStaff" data-toggle="modal" class="btn btn-primary btn-sm">Edit</a>
                  <a href="#deleteStaff" data-toggle="modal" class="btn btn-danger btn-sm">Delete</a>
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>Hinata</td>
                <td>
                  <a href="#editStaff" data-toggle="modal" class="btn btn-primary btn-sm">Edit</a>
                  <a href="#deleteStaff" data-toggle="modal" class="btn btn-danger btn-sm">Delete</a>
                </td>
              </tr>
              <tr>
                <td>4</td>
                <td>Ishida</td>
                <td>
                  <a href="#editStaff" data-toggle="modal" class="btn btn-primary btn-sm">Edit</a>
                  <a href="#deleteStaff" data-toggle="modal" class="btn btn-danger btn-sm">Delete</a>
                </td>
              </tr>
              <tr>
                <td>5</td>
                <td>Kuroko</td>
                <td>
                  <a href="#editStaff" data-toggle="modal" class="btn btn-primary btn-sm">Edit</a>
                  <a href="#deleteStaff" data-toggle="modal" class="btn btn-danger btn-sm">Delete</a>
                </td>
              </tr>
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
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Add Staff</h4>
      </div>
      <div class="modal-body">
        <form action="">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>User Type</label>
                <select class="form-control">
                  <option value="">Choose user type</option>
                  <option value="">Sales Staff</option>
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
                <label>Upload Photo</label>
                <input type="file">
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Add</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="editAccount" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit Account</h4>
      </div>
      <div class="modal-body">
        <form action="">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>User Type</label>
                <select class="form-control">
                  <option value="">Choose user type</option>
                  <option value="">Procurement Manager</option>
                  <option value="">Procurement Staff</option>
                  <option value="">Sales Manager</option>
                  <option value="">Sales Staff</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>First Name</label>
                <input type="text" class="form-control" value="Uzumaki">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Last Name</label>
                <input type="text" class="form-control" value="Naruto">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" value="uzumaki@gmail.com">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" value="narutouzumaki">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Job Title</label>
                <input type="text" class="form-control" value="Procurement Manager (Hokage)">
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
        <button type="button" class="btn btn-primary" data-dismiss="modal">Add</button>
      </div>
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
        <button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
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