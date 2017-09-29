@extends('layouts.user.app')

@section('content')
  @include('layouts.user.navbar')
    <div id="main" class="container-fluid">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <h1 class="main-title no-margin-top">Citra Tubindo Tbk</h1>
        </div>
        <div class="col-md-9 col-sm-12 col-xs-12">
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
                        <!-- Note: Untuk Select Province
                        Pada saat province yang dipilih adalah banten, maka seluruh city (kota) hanya berada pada cakupan city (kota) yang ada di province tersebut
                        -->
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
                      <div class="form-group">
                        <label class="col-md-2 col-sm-12 col-xs-12 control-label">Contact Name</label>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                          <input type="text" class="form-control" value="Cahyo Gumilang" disabled>
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
                    </form>
                  </div>
                </div>
              </div>
            </div>

            <div role="tabpanel" class="tab-pane bg-white border-tab-pane" id="up">
              <!-- This is for company profile id -->
              <div class="container-fluid padding">
                <div class="">
                  <div class="container-fluid">
                    <form class="form-horizontal margin-top">
                      <div class="row">
                        <div class="form-group">
                          <!-- Note dari client untuk user type -->
                          <!--
                            User type: master, manager buyer, manager sales, staff sales, staff buyer 1-5 (jika 1 sudah diambil tidak bisa di register ulang)
                            Untuk master user, reset harus menghubungi customer service Sprout. Email digunakan untuk reset password dan aktivasi user.
                          -->
                          <label class="col-md-2 col-sm-12 col-xs-12 control-label">User Type <small class="text-danger"><strong>(required)</strong></small></label>
                          <div class="col-md-4 col-sm-12 col-xs-12">
                            <select class="form-control" disabled>
                              <option value="">Choose user type</option>
                              <option value="master_procurement_manager">Master Procurement Manager</option>
                              <option value="master_sales_manager">Master Sales Manager</option>
                              <option value="procurement_manager">Procurement Manager</option>
                              <option value="procurement_staff" selected>Procurement Staff</option>
                              <option value="sales_manager">Sales Manager</option>
                              <option value="sales_staff">Sales Staff</option>
                            </select>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-2 col-sm-12 col-xs-12 control-label">Email <small class="text-danger"><strong>(required)</strong></small></label>
                          <div class="col-md-6 col-sm-12 col-xs-12">
                            <input type="text" class="form-control" placeholder="Email" value="jason@statham.com">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-2 col-sm-12 col-xs-12 control-label">First Name <small class="text-danger"><strong>(required)</strong></small></label>
                          <div class="col-md-6 col-sm-12 col-xs-12">
                            <input type="text" class="form-control" placeholder="First Name" value="Jason">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-2 col-sm-12 col-xs-12 control-label">Last Name <small class="text-danger"><strong>(required)</strong></small></label>
                          <div class="col-md-6 col-sm-12 col-xs-12">
                            <input type="text" class="form-control" placeholder="Last Name" value="Statham">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-2 col-sm-12 col-xs-12 control-label">Username <small class="text-danger"><strong>(required)</strong></small></label>
                          <div class="col-md-6 col-sm-12 col-xs-12">
                            <input type="text" class="form-control" placeholder="Username" value="jasonstatham">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-2 col-sm-12 col-xs-12 control-label">Job Title <small class="text-danger"><strong>(required)</strong></small></label>
                          <div class="col-md-6 col-sm-12 col-xs-12">
                            <input type="text" class="form-control" placeholder="Job Title" value="Procurement Manager">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-2 col-sm-12 col-xs-12 control-label">Upload Photo <small class="text-muted"><strong>(optional)</strong></small></label>
                          <div class="col-md-6 col-sm-12 col-xs-12">
                            <img src="../../images/avatar.jpg" alt="Avatar" width="150" height="150">
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
              <!-- This is for company profile person -->
              <div class="container-fluid padding">
                <div class="row">
                  <!--<div class="col-md-12 col-sm-12 col-xs-12 margin-top margin-bottom">
                    <a href="#addBc" data-toggle="modal" class="btn btn-primary">
                      Add Business Category
                    </a>
                  </div>-->
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
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-12 col-xs-12 hide-on-med-and-down">
          <ul class="no-ul-style menu-wrapper">
            <li>
              <a href="home.html" class="btn btn-orange btn-lg padding-transition no-border-radius">
                <i class="pull-left fa fa-home padding-top-2px padding-right-8px"></i> <span>Home</span>
              </a>
            </li>
            <li>
              <a href="post-buy-lead.html" class="btn btn-orange btn-lg padding-transition no-border-radius">
                <i class="pull-left fa fa-pencil-square padding-top-2px padding-right-8px"></i> <span>Post Buy Lead</span>
              </a>
            </li>
            <li>
              <a href="company-database.html" class="btn btn-orange btn-lg padding-transition no-border-radius">
                <i class="pull-left fa fa-building padding-top-2px padding-right-8px"></i> <span>Company Database</span>
              </a>
            </li>
            <li>
              <a href="meeting-schedule.html" class="btn btn-orange btn-lg padding-transition no-border-radius">
                <i class="pull-left fa fa-calendar padding-top-2px padding-right-8px"></i> <span>Meeting Schedule</span>
              </a>
            </li>
            <li>
              <a href="profile.html" class="btn btn-orange btn-lg active-orange padding-transition no-border-radius">
                <i class="pull-left fa fa-gear padding-top-2px padding-right-8px"></i> <span>Profile</span>
              </a>
            </li>
            <li>
              <a href="../home-login.html" class="btn btn-orange btn-lg padding-transition no-border-radius">
                <i class="pull-left fa fa-power-off padding-top-2px padding-right-8px"></i> <span>Logout</span>
              </a>
            </li>
          </ul>
        </div>
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

    <a href="javascript:void(0)" class="hide-on-large-only">
      <div class="menu-btn-container" id="nav-btn-open" onclick="openNav()">
        <div class="menu-btn">
          <i class="fa fa-bars"></i>
        </div>
      </div>
    </a>

    <div id="mySidenav" class="sidenav hide-on-large-only">
      <div class="menu-content">
        <a href="home.html">
          <i class="fa fa-home"></i> Home
        </a>
        <a href="post-buy-lead.html">
          <i class="fa fa-pencil-square"></i> Post Buy Lead
        </a>
        <a href="company-database.html">
          <i class="fa fa-building"></i> Company Database
        </a>
        <a href="meeting-schedule.html">
          <i class="fa fa-calendar"></i> Meeting Schedule
        </a>
        <a href="profile.html">
          <i class="fa fa-gear"></i> Profile
        </a>
        <a href="../home-login.html">
          <i class="fa fa-power-off"></i> Logout
        </a>
        <a href="javascript:void(0)" id="nav-btn-close" onclick="closeNav()"><i class="fa fa-close"></i></a>
      </div>
    </div>
  @include('layouts.user.mobile-menu')
@endsection
