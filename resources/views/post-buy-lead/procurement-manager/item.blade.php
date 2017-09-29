@extends('layouts.user.app')

@section('content')
  @include('layouts.user.navbar')

    <div id="main" class="container-fluid">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 ">
          <h1 class="main-title no-margin-top"><strong>Plate Material - Rp50.000.000</strong></h1>
          <div class="no-margin-top">
            <h4><strong>Delivery Time: 30 Days</strong></h4>
            <h4><strong>Shipping Term: FOB at Jakarta</strong></h4>
          </div>
          <br>
          <h4>Quotation :</h4>
        </div>
        <div class="col-md-9 col-sm-12 col-xs-12">
          <div class="table-responsive">
            <!-- <table id="quotation"  class="table table-bordered table-hover table-middle"> kalo dipake js quotation responsive di mobile jadi jelek, tapi jadi gak bisa di sort -->
            <!--<table id="listQuote" class="table responsive dt-responsive table-bordered table-middle" cellspacing="0" width="100%">-->
            <table id="tableItemQuotation" class="table responsive dt-responsive table-bordered table-middle">
              <thead class="bg-white">
                <tr>
                  <th>Quotation ID</th>
                  <th>Company Name</th>
                  <th>Delivery Time</th>
                  <th>Shipping Term</th>
                  <th>Quote</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>BY001-AGU-Q01</td>
                  <td>PT Sindang Mulia</td>
                  <td>20 Days</td>
                  <td>EXW</td>
                  <td>Rp 59.000.000</td>
                  <td>
                    <a href="detail-item.html" class="btn btn-default btn-sm">Detail</a>
                    <a href="#acceptOffer" data-toggle="modal" class="btn btn-primary btn-sm">Accept</a>
                    <a href="#rejectOffer" data-toggle="modal" class="btn btn-danger btn-sm">Reject</a>
                  </td>
                </tr>
                <tr>
                  <td>BY001-GUN-Q01</td>
                  <td>PT Sindang Mulia</td>
                  <td>20 Days</td>
                  <td>FCA</td>
                  <td>Rp 56.000.000</td>
                  <td>
                    <a href="detail-item.html" class="btn btn-default btn-sm">Detail</a>
                    <a href="#acceptOffer" data-toggle="modal" class="btn btn-primary btn-sm">Accept</a>
                    <a href="#rejectOffer" data-toggle="modal" class="btn btn-danger btn-sm">Reject</a>
                  </td>
                </tr>
                <tr>
                  <td>BY001-AKU-Q01</td>
                  <td>PT Sindang Mulia</td>
                  <td>20 Days</td>
                  <td>FAS</td>
                  <td>Rp 55.900.000</td>
                  <td>
                    <a href="detail-item.html" class="btn btn-default btn-sm">Detail</a>
                    <a href="#acceptOffer" data-toggle="modal" class="btn btn-primary btn-sm">Accept</a>
                    <a href="#rejectOffer" data-toggle="modal" class="btn btn-danger btn-sm">Reject</a>
                  </td>
                </tr>
                <tr>
                  <td>BY001-SUK-Q01</td>
                  <td>PT Sindang Mulia</td>
                  <td>20 Days</td>
                  <td>FOB</td>
                  <td>Rp 55.800.000</td>
                  <td>
                    <a href="detail-item.html" class="btn btn-default btn-sm">Detail</a>
                    <a href="#acceptOffer" data-toggle="modal" class="btn btn-primary btn-sm">Accept</a>
                    <a href="#rejectOffer" data-toggle="modal" class="btn btn-danger btn-sm">Reject</a>
                  </td>
                </tr>
                <tr>
                  <td>BY001-CIN-Q01</td>
                  <td>PT Sindang Mulia</td>
                  <td>20 Days</td>
                  <td>CFR</td>
                  <td>Rp 55.700.000</td>
                  <td>
                    <a href="detail-item.html" class="btn btn-default btn-sm">Detail</a>
                    <a href="#acceptOffer" data-toggle="modal" class="btn btn-primary btn-sm">Accept</a>
                    <a href="#rejectOffer" data-toggle="modal" class="btn btn-danger btn-sm">Reject</a>
                  </td>
                </tr>
                <tr>
                  <td>BY001-SEJ-Q01</td>
                  <td>PT Sindang Mulia</td>
                  <td>20 Days</td>
                  <td>CIF</td>
                  <td>Rp 55.600.000</td>
                  <td>
                    <a href="detail-item.html" class="btn btn-default btn-sm">Detail</a>
                    <a href="#acceptOffer" data-toggle="modal" class="btn btn-primary btn-sm">Accept</a>
                    <a href="#rejectOffer" data-toggle="modal" class="btn btn-danger btn-sm">Reject</a>
                  </td>
                </tr>
                <tr>
                  <td>BY001-SIM-Q01</td>
                  <td>PT Sindang Mulia</td>
                  <td>20 Days</td>
                  <td>CPT</td>
                  <td>Rp 55.500.000</td>
                  <td>
                    <a href="detail-item.html" class="btn btn-default btn-sm">Detail</a>
                    <a href="#acceptOffer" data-toggle="modal" class="btn btn-primary btn-sm">Accept</a>
                    <a href="#rejectOffer" data-toggle="modal" class="btn btn-danger btn-sm">Reject</a>
                  </td>
                </tr>
                <tr>
                  <td>BY001-BAI-Q01</td>
                  <td>PT Sindang Mulia</td>
                  <td>20 Days</td>
                  <td>CIP</td>
                  <td>Rp 55.400.000</td>
                  <td>
                    <a href="detail-item.html" class="btn btn-default btn-sm">Detail</a>
                    <a href="#acceptOffer" data-toggle="modal" class="btn btn-primary btn-sm">Accept</a>
                    <a href="#rejectOffer" data-toggle="modal" class="btn btn-danger btn-sm">Reject</a>
                  </td>
                </tr>
                <tr>
                  <td>BY001-GUN-Q01</td>
                  <td>PT Sindang Mulia</td>
                  <td>20 Days</td>
                  <td>DAF</td>
                  <td>Rp 55.300.000</td>
                  <td>
                    <a href="detail-item.html" class="btn btn-default btn-sm">Detail</a>
                    <a href="#acceptOffer" data-toggle="modal" class="btn btn-primary btn-sm">Accept</a>
                    <a href="#rejectOffer" data-toggle="modal" class="btn btn-danger btn-sm">Reject</a>
                  </td>
                </tr>
                <tr>
                  <td>BY001-SIN-Q01</td>
                  <td>PT Sindang Mulia</td>
                  <td>20 Days</td>
                  <td>FOB</td>
                  <td>Rp 53.000.000</td>
                  <td>
                    <a href="detail-item.html" class="btn btn-default btn-sm">Detail</a>
                    <a href="#acceptOffer" data-toggle="modal" class="btn btn-primary btn-sm">Accept</a>
                    <a href="#rejectOffer" data-toggle="modal" class="btn btn-danger btn-sm">Reject</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-12">
              <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Filter By Section</label>
                    <select class="form-control selectpicker" data-live-search="true">
                      <option value="">Choose section</option>
                      <option value="1" selected="">Mining and quarrying</option>
                      <option value="2">Manufacturing</option>
                      <option value="3">Electricity, gas, steam, and air conditioner supply</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Filter By Division</label>
                    <select class="form-control selectpicker" data-live-search="true">
                      <option value="">Choose divison</option>
                      <option value="1" selected="">Manufacture of food products</option>
                      <option value="2">Forestry and logging</option>
                      <option value="3">Fishing and aquaculture</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> Filter company only for approved vendor only
                    </label>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> Filter company all vendor except blacklist
                    </label>
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
              <a href="post-buy-lead.html" class="btn btn-orange btn-lg padding-transition active-orange no-border-radius">
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

      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <a class="btn btn-warning btn-sm" href="post-buy-lead.html"><i class="fa fa-arrow-left"></i> Back</a>
        </div>
      </div>
    </div>

    <!-- Accept Confirmarion -->
    <div class="modal fade" id="acceptOffer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Are you sure want to accept this quotation?</h4>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary accept-offer" data-dismiss="modal">Accept</button>
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
