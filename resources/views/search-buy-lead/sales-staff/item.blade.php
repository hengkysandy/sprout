@extends('layouts.user.app')

@section('content')
  @include('layouts.user.navbar')
    <div id="main" class="container-fluid">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 ">
          <h1 class="main-title no-margin-top"><strong>Buy Lead - Plate Material</strong></h1>
        </div>
        <!--<div class="col-md-12 col-sm-12 col-xs-12 margin-bottom">
          <a href="#addPbl" data-toggle="modal" class="btn btn-primary">Add Post Buy Lead</a>
          <a href="#addUw" data-toggle="modal" class="btn btn-primary">Add Unit</a>
        </div> -->
        <div class="col-md-9 col-sm-12 col-xs-12">
          <div class="table-responsive">
            <!-- <table id="quotation"  class="table table-bordered table-hover table-middle"> kalo dipake js quotation responsive di mobile jadi jelek, tapi jadi gak bisa di sort -->
            <!--<table id="listQuote" class="table responsive dt-responsive table-bordered table-middle" cellspacing="0" width="100%">-->
            <table class="table responsive dt-responsive table-bordered table-middle" cellspacing="0" width="100%">
              <thead class="bg-white">
                <tr>
                  <th>Buy Lead ID</th>
                  <th>Buyer Name</th>
                  <th>Delivery Time</th>
                  <th>Shipping Term</th>
                  <th>City</th>
                  <th>Total Price</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Jak-00102</td>
                  <td>Gunawan Fabrikatama</td>
                  <td>30 Days</td>
                  <td>Franco</td>
                  <td>Jakarta</td>
                  <td>Rp 900.000.000</td>
                  <td>
                    <a href="detail-item.html" class="btn btn-default btn-sm">Detail</a>
                    <!-- untuk status buy lead accepted, button accept dan reject akan menghilang -->
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="margin-bottom">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <a href="#reviseQuote" data-toggle='modal' class="btn btn-sm btn-primary">Submit Quotation</a>
                <a href="#accBuyLead" data-toggle="modal" class="btn btn-sm btn-success">Accept Buy Lead</a>
                <a href="#rejectQuote" data-toggle="modal" class="btn btn-sm btn-danger">Reject Buy Lead</a>
                <a href="#" class="btn btn-sm btn-primary" disabled>Request Job</a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="panel panel-white post">
                <div class="post-heading col-md-12 col-sm-12 col-xs-12">
                  <div class="col-md-2 col-sm-2 col-xs-3 no-padding image">
                    <img src="http://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
                  </div>
                  <div class="col-md-8 col-sm-8 col-xs-8 meta no-padding">
                    <div class="title h5">
                       <b>Kevin</b> - Sales Staff
                    </div>
                    <h6 class="text-muted time">30 minute ago</h6>
                  </div>
                </div>
                <div class="post-description">
                  <p>Mohon maaf pak saya tidak bisa ambil project ini, skripsian belum kelar. apakah bisa di assign ke staff yang lain?</p>
                </div>
                <a href="#replyMessage" class="no-text-decoration" data-toggle="modal">
                  <div class="reply">
                    <i class="fa fa-reply"></i><span class="padding-btn-rl">reply</span>
                  </div>
                </a>
                <hr>
                <div class="reply-box col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
                  <ul class="reply-list">
                    <li>
                      <div class="reply-heading">
                        <div class="no-padding image col-md-2 col-sm-2 col-xs-3">
                           <img src="http://bootdey.com/img/Content/user_3.jpg" class="img-circle avatar" alt="user profile image">
                        </div>
                        <div>
                          <div class="title h5 ">
                            <b>John Legend</b> - Sales Manager
                          </div>
                          <h6 class="text-muted time">5 minute ago</h6>
                        </div>
                      </div>
                      <div class="post-description">
                        <p> Oke nanti saya cari penggantinya</p>
                      </div>
                      <a href="" class="no-text-decoration">
                        <div class="reply">
                          <i class="fa fa-reply"></i><span class="padding-btn-rl">reply</span>
                        </div>
                      </a>
                      <hr>
                    </li>
                  </ul>
                </div>
              </div>

              <form class="margin-top">
                <h4>Add Discussion :</h4>
                <div class="row">
                  <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="row">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                          <label></label>
                          <textarea rows="6" class="form-control no-resize" placeholder="Your discussion..."></textarea>
                        </div>
                      </div>
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                          <a href="#" class="btn btn-primary">Submit</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-12 col-xs-12 hide-on-med-and-down">
        <div>
          <ul class="no-ul-style menu-wrapper">
            <li>
              <a href="home.html" class="btn btn-orange btn-lg padding-transition no-border-radius">
                <i class="pull-left fa fa-home padding-top-2px padding-right-8px"></i> <span>Home</span>
              </a>
            </li>
            <li>
              <a href="buy-lead-list.html" class="btn btn-orange btn-lg padding-transition active-orange no-border-radius">
                <i class="pull-left fa fa-pencil-square padding-top-2px padding-right-8px"></i> <span>Buy Lead List</span>
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
              <a href="profile.html" class="btn btn-orange btn-lg padding-transition no-border-radius">
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
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <a class="btn btn-warning btn-sm" href="buy-lead-list.html"><i class="fa fa-arrow-left"></i> Back</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Reject Confirmarion -->
    <div class="modal fade" id="rejectOffer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Are you sure want to reject this quotation?</h4>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-danger reject-offer" data-dismiss="modal">Reject</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="replyMessage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="MyModalLabel">Reply Messages</h4>
          </div>
          <div class="modal-body">
            <form>
              <div class="form">
                <textarea rows="6" class="form-control no-resize"></textarea>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary submit-reply" data-dismiss="modal">Submit</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Revise Quote -->
    <div class="modal fade" id="reviseQuote" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Submit Quotation</h4>
          </div>
          <div class="modal-body">
            <form>
              <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Item</label>
                    <input type="text" class="form-control" value="Plate Material" disabled>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Amount</label>
                    <input type="text" class="form-control" value="10">
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Total Price</label>
                    <div class="input-group">
                      <span class="input-group-addon">Rp</span>
                      <input type="number" class="form-control" min="0" value="50000000">
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Payment Term</label>
                    <input type="text" class="form-control" value="Down Payment 50%, Installment 6 Months">
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Province</label>
                    <select class="form-control selectpicker" data-live-search="true">
                      <option value="">Select Province</option>
                      <option value="aceh">Aceh</option>
                      <option value="bali" selected="">Bali</option>
                      <option value="banten">Banten</option>
                      <option value="bengkulu">Bengkulu</option>
                      <option value="yogyakarta">DI Yogyakarta</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>City</label>
                    <select class="form-control selectpicker" data-live-search="true" disabled>
                      <option value="">Select City</option>
                      <option value="">Tangerang</option>
                      <option value="">Jakarta</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Shipping Term</label>
                    <select class="form-control selectpicker" data-live-search="true">
                      <option value="">Select Shipping Term</option>
                      <option value="exw" selected="">EXW – Ex Works</option>
                      <option value="fca">FCA – Free Carrier</option>
                      <option value="cpt">CPT – Carriage Paid To</option>
                      <option value="cip">CIP – Carriage and Insurance Paid to</option>
                      <option value="dat">DAT – Delivered At Terminal</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Area (Airport, Seaport, &amp; Terminal)</label>
                    <select class="form-control selectpicker" data-live-search="true">
                      <option value="">Select Area (Airport, Seaport, &amp; Terminal)</option>
                      <option value="seota">Soekarno Hatta Airport (CGK)</option>
                      <option value="ngurahrarai">Ngurah Rai Airport (DPS)</option>
                      <option value="cirebon_port">Cirebon Port</option>
                      <option value="tpk_palaran_samarinda">TPK Palaran Samarinda Port</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Closed Date</label>
                    <input type="text" id="Editcd" class="form-control" disabled>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Delivery Time</label>
                    <div class="input-group">
                      <input type="number" class="form-control">
                      <span class="input-group-addon">Days</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label class="btn btn-primary btn-file">
                      Upload Quotation <input type="file" class="hidden">
                    </label>
                    <p class="help-block">Format document .docs, .xls, and .pdf</p>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary send-quote" data-dismiss="modal">Submit</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Add Meeting Schedule -->
    <div class="modal fade" id="meetingReq" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Add Meeting Schedule</h4>
          </div>
          <div class="modal-body">
            <form>
              <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Send To</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Subject</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Date</label>
                    <input type="text" id="ac" class="form-control">
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Time</label>
                    <input type="text" id="tc" class="form-control">
                  </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Place</label>
                    <textarea rows="7" class="form-control"></textarea>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary add-ms" data-dismiss="modal">Submit</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Detail Quotation -->
    <div class="modal fade" id="detailSbl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Detail Quotation</h4>
          </div>
          <div class="modal-body">
            <table class="table table-condensed no-border-table">
              <table class="table table-condensed no-border-table table-middle">
                <tr>
                  <th>Item</th>
                  <td>:</td>
                  <td>Plate Material</td>
                </tr>
                <tr>
                  <th>Amount</th>
                  <td>:</td>
                  <td>10 Ton</td>
                </tr>
                <tr>
                  <th>Total Price</th>
                  <td>:</td>
                  <td>Rp50.000.000</td>
                </tr>
                <tr>
                  <th>Payment Term</th>
                  <td>:</td>
                  <td>Down Payment 50%, Installment 6 Months</td>
                </tr>
                <tr>
                  <th>City</th>
                  <td>:</td>
                  <td>Jakarta</td>
                </tr>
                <tr>
                  <th>Province</th>
                  <td>:</td>
                  <td>DKI</td>
                </tr>
                <tr>
                  <th>Shipping Term</th>
                  <td>:</td>
                  <td>EXW - Ex Works</td>
                </tr>
                <tr>
                  <th>Area</th>
                  <td>:</td>
                  <td>Soekarno Hatta Airport</td>
                </tr>
                <tr>
                  <th>Closed Date</th>
                  <td>:</td>
                  <td>11 April 2017</td>
                </tr>
                <tr>
                  <th>Delivery Time</th>
                  <td>:</td>
                  <td>30 Days</td>
                </tr>
                <tr>
                  <th>Assign to</th>
                  <td>:</td>
                  <td>Arifan</td>
                </tr>
                <tr>
                  <th>Status</th>
                  <td>:</td>
                  <td><span class="text-danger"><strong>Not Yet Released</strong></span></td>
                </tr>
                <tr>
                  <th>Document</th>
                  <td>:</td>
                  <td>
                    <a href="../../storage/sample.pdf" class="btn btn-primary btn-sm">Open Document</a>
                  </td>
                </tr>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Reject Quotation -->
    <div class="modal fade" id="rejectQuote" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Are you sure want to reject this buy lead?</h4>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Yes</button>
          </div>
        </div>
      </div>
    </div>

    <div id="accBuyLead" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Are you sure want to accept this buy lead?</h4>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
            <button type="button" class="btn btn-success" data-dismiss="modal">Yes</button>
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
        <a href="buy-lead-list.html">
          <i class="fa fa-pencil-square"></i> Buy Lead List
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
