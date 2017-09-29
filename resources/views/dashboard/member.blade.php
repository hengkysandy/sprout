@extends('layouts.dashboard.app')

@section('content')
  @include('layouts.dashboard.navbar')

  <div class="container-fluid">
    <h1 class="main-title no-margin-top">Argomas Internusa</h1>
    <div class="col-md-10 col-sm-12 col-xs-12 margin-top">
      <ul class="nav nav-tabs nav-justified" role="tablist">
        <li role="presentation" class="active"><a href="#cp" aria-controls="cp" role="tab" data-toggle="tab">Company Profile</a></li>
        <li role="presentation"><a href="#bc" aria-controls="bc" role="tab" data-toggle="tab">Business Category</a></li>
      </ul>
    </div>
    <div class="col-md-10 col-sm-12 col-xs-12">
      <div class="tab-content margin-bottom">
        <div role="tabpanel" class="tab-pane bg-white active border-tab-pane" id="cp">
          <!-- This is for company profile id -->
          <div class="container-fluid padding">
            <form class="form-horizontal margin-top">
              <div class="row">
                <div class="form-group">
                  <label class="col-md-2 col-sm-12 col-xs-12 control-label">Package</label>
                  <div class="col-md-3 col-sm-12 col-xs-12">
                    <select class="selectpicker form-control" data-live-search="true">
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
                    <input type="text" class="form-control" value="PT">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-2 col-sm-12 col-xs-12 control-label">Company Name</label>
                  <div class="col-md-6 col-sm-12 col-xs-12">
                    <input type="text" class="form-control" value="Argomas Internusa">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-2 col-sm-12 col-xs-12 control-label">Company Tagline</label>
                  <div class="col-md-6 col-sm-12 col-xs-12">
                    <input type="text" class="form-control" value="Company Tagline Company Tagline">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-2 col-sm-12 col-xs-12 control-label">Address</label>
                  <div class="col-md-6 col-sm-12 col-xs-12">
                    <textarea class="form-control no-resize" rows="6">Ki. Antapani Lama No. 365, BaBel</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-2 col-sm-12 col-xs-12 control-label">Province &amp; City</label>
                  <!-- Note: Untuk Select Province
                  Pada saat province yang dipilih adalah banten, maka seluruh city (kota) hanya berada pada cakupan city (kota) yang ada di province tersebut
                  -->
                  <div class="col-md-3 col-sm-12 col-xs-12">
                    <select class="selectpicker form-control" data-live-search="true">
                      <option value="">Select Province</option>
                      <option value="1" selected>Aceh</option>
                      <option value="2">Bali</option>
                      <option value="3">Bangkulu</option>
                      <option value="4">Banten</option>
                    </select>
                  </div>
                  <div class="col-md-3 col-sm-12 col-xs-12">
                    <select class="selectpicker form-control" data-live-search="true">
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
                    <input type="text" class="form-control" value="15560">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-2 col-sm-12 col-xs-12 control-label">Phone Number</label>
                  <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="row">
                      <div class="col-md-3 col-sm-3 col-xs-3">
                        <input type="text" class="form-control" value="021">
                      </div>
                      <div class="col-md-1 col-sm-1 col-xs-1">
                        <label class="control-label">-</label>
                      </div>
                      <div class="col-md-8 col-sm-8 col-xs-8">
                        <input type="text" class="form-control" value="55772211">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-2 col-sm-12 col-xs-12 control-label">Mobile Phone</label>
                  <div class="col-md-6 col-sm-12 col-xs-12">
                    <input type="text" class="form-control" value="085678910">
                  </div>
                </div>
                <div class="wpMainProduct">
                  <div id="removeMp" class="form-group">
                    <div class="col-md-12 no-padding main-product">
                      <label class="col-md-2 col-sm-12 col-xs-12 control-label labelfirst">Main Product</label>
                      <div class="col-md-6 col-sm-12 col-xs-12">
                        <input id="mp-1" type="text" class="form-control inline-input" value="Frozen Fish">
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
                <div class="form-group">
                  <label class="col-md-2 col-sm-12 col-xs-12 control-label">Contact Name</label>
                  <div class="col-md-6 col-sm-12 col-xs-12">
                    <input type="text" class="form-control" value="Cahyo Gumilang">
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
                  <label class="col-md-2 col-sm-12 col-xs-12 control-label">Certification</label>
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
                  <div class="col-md-10 col-sm-12 col-xs-12">
                    <!-- Note: Berlaku untuk setiap required document
                    Untuk tombol choose document jika document dihapus maka tombol baru akan muncul, jika document ada maka tombol choose document tidak di munculkan
                    -->
                    <!--<label class="btn btn-primary btn-file">
                      Choose Document <input type="file" class="hide">
                    </label>-->
                    <a href="#" class="btn btn-success">Open Document</a>
                    <a href="#deleteDoc" data-toggle="modal" class="btn btn-danger">Delete Document</a>
                    <p class="help-block">Certificate Halal</p>
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
              </div>
            </form>
          </div>
        </div>

        <div role="tabpanel" class="tab-pane bg-white border-tab-pane" id="bc">
          <!-- This is for company profile person -->
          <div class="container-fluid padding">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12 margin-top margin-bottom">
                <a href="#addBc" data-toggle="modal" class="btn btn-primary">
                  Add Business Category
                </a>

              </div>
              <div class="col-md-12 col-sm-12 col-xs-12">
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
                          <a href="#editBc" data-toggle="modal" class="btn btn-primary btn-sm">Edit</a>
                          <a href="#deleteBc" data-toggle="modal" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="row">
                  <div class="col-md-8 col-sm-8 col-xs-8">
                    <div class="form-group">
                      <label>Package</label>
                      <input type="text" class="form-control" disabled="" value="Regular +">
                    </div>
                  </div>

                  <div class="col-md-4 col-sm-4 col-xs-4">
                    <div class="wrapper-btn-bc">
                      <a href="#addEmployee" data-toggle="modal" class="btn btn-primary">
                        Add Employee
                      </a>
                    </div>
                  </div>

                  <div class="col-md-8 col-sm-8 col-xs-8">
                    <div class="form-group">
                      <label>Account Duration</label>
                      <input type="text" class="form-control" disabled="" value="10 November 2018">
                    </div>
                  </div>

                  <div class="col-md-4 col-sm-4 col-xs-4">
                    <div class="wrapper-btn-bc">
                      <a href="#reActivate" class="btn btn-success" data-toggle="modal">Re-Activate</a>
                    </div>
                  </div>

                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Reactivate Account -->
  <div class="modal fade" id="reActivate" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Re-Activate</h4>
        </div>
        <div class="modal-body">
          <form>
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                  <label>Package</label>
                  <select class="form-control">
                    <option value="choose_your_package">Choose your package</option>
                    <option value="free_trial">Free Trial</option>
                    <option value="regular">Regular</option>
                    <option value="regular_plus">Regular +</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                  <label>Duration</label>
                  <select class="form-control">
                    <option value="">1 Year</option>
                    <option value="">2 Year</option>
                    <option value="">3 Year</option>
                  </select>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-success re-activate" data-dismiss="modal">Re-Activate</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Add Account for Purchasing/Sales -->
  <div class="modal fade" id="addEmployee" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Add Employee</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <div class="row">
              <div class="col-md-12">
                <label>Manager &amp; Staff</label>
                <input type="number" min="0" class="form-control">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal">Add</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Add Business Category -->
  <div class="modal fade" id="addBc" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Add Business Category</h4>
        </div>
        <div class="modal-body">
          <div class="margin-bottom">
            <a href="#chooseBc" data-toggle="modal" class="btn btn-orange">Choose From Existing Category</a>
          </div>
          <form>
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                  <label>Choose Section</label>
                  <div class="input-group">
                    <input type="text" class="form-control" value="Section A : Agriculture, forestry and fishing">
                    <span class="input-group-btn">
                      <button class="btn btn-default" data-toggle="modal" data-target="#chooseSect" type="button"><i class="fa fa-folder-open"></i></button>
                    </span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                  <label>Choose Division</label>
                  <div class="input-group">
                    <input type="text" class="form-control" value="Division 1, Division 2">
                    <span class="input-group-btn">
                      <button class="btn btn-default" data-toggle="modal" data-target="#chooseDiv" type="button"><i class="fa fa-folder-open"></i></button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary add-bc" data-dismiss="modal">Add</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Choose Section -->
  <div class="modal fade" id="chooseSect" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Choose Section</h4>
        </div>
        <div class="modal-body">
          <div class="table-responsive">
            <table class="table table-middle table-condensed">
              <thead>
                <tr>
                  <th>Section</th>
                  <th>Section Name</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Section A</td>
                  <td>Agriculture, forestry and fishing</td>
                  <td>
                    <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Section B</td>
                  <td>Mining and quarrying</td>
                  <td>
                    <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Section C</td>
                  <td>Manufacturing</td>
                  <td>
                    <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal">Add</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Choose Division -->
  <div class="modal fade" id="chooseDiv" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Choose Division</h4>
        </div>
        <div class="modal-body">
          <div class="table-responsive">
            <table class="table table-middle table-condensed">
              <thead>
                <tr>
                  <th>Division</th>
                  <th>Description</th>
                  <th>Group</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Division 1</td>
                  <td>Placeholder placeholder placeholder</td>
                  <td>Group 1, Group 2, Group 3</td>
                  <td>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox">
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Division 2</td>
                  <td>Placeholder placeholder placeholder</td>
                  <td>Group 1, Group 2, Group 3</td>
                  <td>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox">
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Division 3</td>
                  <td>Placeholder placeholder placeholder</td>
                  <td>Group 1, Group 2, Group 3</td>
                  <td>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox">
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal">Add</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Edit Business Category -->
  <div class="modal fade" id="editBc" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Edit Business Category</h4>
        </div>
        <div class="modal-body">
          <div class="margin-bottom">
            <a href="#chooseBc" data-toggle="modal" class="btn btn-orange">Choose From Existing Category</a>
          </div>
          <form>
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                  <label>Choose Section</label>
                  <div class="input-group">
                    <input type="text" class="form-control" value="Section A : Agriculture, forestry and fishing">
                    <span class="input-group-btn">
                      <button class="btn btn-default" data-toggle="modal" data-target="#chooseSect" type="button"><i class="fa fa-folder-open"></i></button>
                    </span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                  <label>Choose Division</label>
                  <div class="input-group">
                    <input type="text" class="form-control" value="Division 1, Division 2">
                    <span class="input-group-btn">
                      <button class="btn btn-default" data-toggle="modal" data-target="#chooseDiv" type="button"><i class="fa fa-folder-open"></i></button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary edit-bc" data-dismiss="modal">Save</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Choose From Existing Business Category -->
  <div class="modal fade" id="chooseBc" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Choose From Existing Category</h4>
        </div>
        <div class="modal-body">
          <div class="table-responsive">
            <table class="table table-middle table-condensed table-hover">
              <thead>
                <tr>
                  <th>Section</th>
                  <th>Division</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Section A</td>
                  <td>Division 1, Division 2, Division 3, Division 4, Division 5</td>
                  <td>
                    <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Section B</td>
                  <td>Division 6, Division 7, Division 8, Division 9, Division 10</td>
                  <td>
                    <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Section C</td>
                  <td>Division 11, Division 12, Division 13, Division 14, Division 15</td>
                  <td>
                    <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal">Add</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Detail Business Category -->
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

  <!-- Delete Business Category -->
  <div class="modal fade" id="deleteBc" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Are you sure want delete this?</h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary delete-bc" data-dismiss="modal">Delete</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Delete Document -->
  <div class="modal fade" id="deleteDoc" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Are you sure want delete this?</h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary delete-doc" data-dismiss="modal">Delete</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Delete Logo -->
  <div class="modal fade" id="deleteLogo" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Are you sure want delete this?</h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary delete-doc" data-dismiss="modal">Delete</button>
        </div>
      </div>
    </div>
  </div>

  @include('layouts.dashboard.menu-mobile')
@endsection
