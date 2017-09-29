@extends('layouts.user.app')

@section('content')
  @include('layouts.user.navbar')
    <div id="main" class="container-fluid">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <h1 class="main-title no-margin-top no-margin-bottom">Buy Lead History</h1>
          <br>
        </div>

        <div class="col-md-9 col-sm-12 col-xs-12">

          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label>Search</label>
                <input id="searchHistory" type="text" class="form-control">
              </div>
            </div>
          </div>

          <div class="table-responsive">
            <table id="historyRfq" class="table table-bordered table-middle table-hover">
              <thead class="bg-white">
                <tr>
                  <th>No</th>
                  <th>Item</th>
                  <th>Total Price</th>
                  <th>Shipping Term</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Biji Kedelai</td>
                  <td>Rp 50.000.000</td>
                  <td>FOB</td>
                  <td>
                    <span class="btn btn-success btn-sm">
                      <i class="fa fa-check"></i>
                    </span>
                  </td>
                  <td>
                    <a href="detail-history-quotation.html" class="btn btn-default">Detail</a>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Pupuk Organik</td>
                  <td>Rp 40.000.000</td>
                  <td>EX</td>
                  <td>
                    <span class="btn btn-success btn-sm">
                      <i class="fa fa-check"></i>
                    </span>
                  </td>
                  <td>
                    <a href="detail-history-quotation.html" class="btn btn-default">Detail</a>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Bibit Padi</td>
                  <td>Rp 200.000.000</td>
                  <td>FOB</td>
                  <td>
                    <span class="btn btn-success btn-sm">
                      <i class="fa fa-check"></i>
                    </span>
                  </td>
                  <td>
                    <a href="detail-history-quotation.html" class="btn btn-default">Detail</a>
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Pupuk Kandang</td>
                  <td>Rp 150.000.000</td>
                  <td>FOB</td>
                  <td>
                    <span class="btn btn-success btn-sm">
                      <i class="fa fa-check"></i>
                    </span>
                  </td>
                  <td>
                    <a href="detail-history-quotation.html" class="btn btn-default">Detail</a>
                  </td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Bibit Teh</td>
                  <td>Rp 450.000.000</td>
                  <td>FOB</td>
                  <td>
                    <span class="btn btn-success btn-sm">
                      <i class="fa fa-check"></i>
                    </span>
                  </td>
                  <td>
                    <a href="detail-history-quotation.html" class="btn btn-default">Detail</a>
                  </td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>Beras Kualitas Terbaik</td>
                  <td>Rp 550.000.000</td>
                  <td>EX</td>
                  <td>
                    <span class="btn btn-success btn-sm">
                      <i class="fa fa-check"></i>
                    </span>
                  </td>
                  <td>
                    <a href="detail-history-quotation.html" class="btn btn-default">Detail</a>
                  </td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>Plate Material</td>
                  <td>Rp 70.000.000</td>
                  <td>FOB</td>
                  <td>
                    <span class="btn btn-success btn-sm">
                      <i class="fa fa-check"></i>
                    </span>
                  </td>
                  <td>
                    <a href="detail-history-quotation.html" class="btn btn-default">Detail</a>
                  </td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>Pupuk Anorganik</td>
                  <td>Rp 50.000.000</td>
                  <td>FOB</td>
                  <td>
                    <span class="btn btn-success btn-sm">
                      <i class="fa fa-check"></i>
                    </span>
                  </td>
                  <td>
                    <a href="detail-history-quotation.html" class="btn btn-default">Detail</a>
                  </td>
                </tr>
                <tr>
                  <td>9</td>
                  <td>Biji Kelapa</td>
                  <td>Rp 1.150.000.000</td>
                  <td>FOB</td>
                  <td>
                    <span class="btn btn-success btn-sm">
                      <i class="fa fa-check"></i>
                    </span>
                  </td>
                  <td>
                    <a href="detail-history-quotation.html" class="btn btn-default">Detail</a>
                  </td>
                </tr>
                <tr>
                  <td>10</td>
                  <td>Pupuk High Class</td>
                  <td>Rp 50.000.000</td>
                  <td>FOB</td>
                  <td>
                    <span class="btn btn-success btn-sm">
                      <i class="fa fa-check"></i>
                    </span>
                  </td>
                  <td>
                    <a href="detail-history-quotation.html" class="btn btn-default">Detail</a>
                  </td>
                </tr>
              </tbody>
            </table>
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
              <a href="buy-lead-list.html" class="btn btn-orange btn-lg active-orange padding-transition no-border-radius">
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
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 margin-top">
          <a class="btn btn-warning btn-sm" href="buy-lead-list.html"><i class="fa fa-arrow-left"></i> Back</a>
        </div>
      </div>
    </div>

    <div class="modal fade" id="detailBuyLead" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Detail Buy Lead</h4>
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

    <div class="modal fade" id="detailRfq" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Detail Quotation</h4>
          </div>
          <div class="modal-body">
            <table class="table no-border-table">
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
                <th>Unit</th>
                <td>:</td>
                <td>Ton</td>
              </tr>
              <tr>
                <th>Total Price</th>
                <td>:</td>
                <td>Rp50.000.000</td>
              </tr>
              <tr>
                <th>City</th>
                <td>:</td>
                <td>Jakarta</td>
              </tr>
              <tr>
                <th>Shipping Term</th>
                <td>:</td>
                <td>FOB</td>
              </tr>
              <tr>
                <th>Closed Date</th>
                <td>:</td>
                <td>11 April 2017</td>
              </tr>
              <tr>
                <th>Closed Date</th>
                <td>:</td>
                <td>30 April 2017</td>
              </tr>
              <tr>
                <th>Area</th>
                <td>:</td>
                <td>Soekarno Hatta Airport</td>
              </tr>
              <tr>
                <th>Status</th>
                <td>:</td>
                <td><span class="text-success"><strong>Released</strong></span></td>
              </tr>
            </table>
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
