@extends('layouts.user.app')

@section('content')
  @include('layouts.user.navbar')
    <div id="main" class="container-fluid">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <h1 class="main-title no-margin-top">Buy Lead List</h1>
        </div>

        <div class="col-md-12 col-sm-12 col-xs-12">
          <a href="history-rfq.html" class="btn btn-primary">Buy Lead History</a>
        </div>

        <br><br><br><br><br><br>

        <div class="col-md-9 col-sm-12 col-xs-12">
          <div class="table-responsive">
            <table id="Tablepbl" class="table table-middle table-bordered table-hover">
              <thead class="bg-white">
                <tr>
                  <th>Buy Lead ID</th>
                  <th>Buyer Name</th>
                  <th>Item</th>
                  <th>Delivery Time</th>
                  <th>Shipping Term</th>
                  <th>Total Price</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Jak-00101</td>
                  <td>PT Total Indonesia</td>
                  <td>Biji Kedelai</td>
                  <td>30 Days</td>
                  <td>DDP</td>
                  <td>Rp 45.000.000</td>
                  <td>
                    <span class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Success Job">
                      <i class="fa fa-handshake-o"></i>
                    </span>
                    <span style="display: none;">Success Job</span>
                  </td>
                  <td>
                    <a href="item.html" class="btn btn-sm btn-default">Detail</a>
                  </td>
                </tr>
                <tr>
                  <td>Jak-00102</td>
                  <td>PT Salam Sehat Sejahtera</td>
                  <td>Pupuk Organik</td>
                  <td>30 Days</td>
                  <td>DES</td>
                  <td>Rp 35.000.000</td>
                  <td>
                    <span class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="Approved">
                      <i class="fa fa-check"></i>
                    </span>
                    <span style="display: none;">Approved</span>
                  </td>
                  <td>
                    <a href="item.html" class="btn btn-sm btn-default">Detail</a>
                  </td>
                </tr>
                <tr>
                  <td>Jak-00122</td>
                  <td>PT Panca Karya</td>
                  <td>Bibit Padi</td>
                  <td>10 Days</td>
                  <td>FAS</td>
                  <td>Rp 88.000.000</td>
                  <td>
                    <span class="btn btn-sm btn-default" data-toggle="tooltip" data-placement="top" title="Waiting approve">
                      <i class="fa fa-question"></i>
                    </span>
                    <span style="display: none;">Waiting approve</span>
                  </td>
                  <td>
                    <a href="item.html" class="btn btn-sm btn-default">Detail</a>
                  </td>
                </tr>
                <tr>
                  <td>Jak-00133</td>
                  <td>PT Kebun Makmur</td>
                  <td>Pupuk Kandang</td>
                  <td>20 Days</td>
                  <td>CIF</td>
                  <td>Rp 35.000.000</td>
                  <td>
                    <span class="btn btn-sm btn-default" data-toggle="tooltip" data-placement="top" title="Waiting approve">
                      <i class="fa fa-question"></i>
                    </span>
                    <span style="display: none;">Waiting approve</span>
                  </td>
                  <td>
                    <a href="item.html" class="btn btn-sm btn-default">Detail</a>
                  </td>
                </tr>
                <tr>
                  <td>Jak-00144</td>
                  <td>PT Sayur Hijau</td>
                  <td>Bibit Teh</td>
                  <td>15 Days</td>
                  <td>CPT</td>
                  <td>Rp 100.000.000</td>
                  <td>
                    <span class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Pending">
                      <i class="fa fa-clock-o"></i>
                    </span>
                    <span style="display: none;">Pending</span>
                  </td>
                  <td>
                    <a href="item.html" class="btn btn-sm btn-default">Detail</a>
                  </td>
                </tr>
                <tr>
                  <td>Jak-00155</td>
                  <td>PT Diffusion</td>
                  <td>Beras Terbaik</td>
                  <td>20 Days</td>
                  <td>CFR</td>
                  <td>Rp 500.000.000</td>
                  <td>
                    <span class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Pending">
                      <i class="fa fa-clock-o"></i>
                    </span>
                    <span style="display: none;">Pending</span>
                  </td>
                  <td>
                    <a href="item.html" class="btn btn-sm btn-default">Detail</a>
                  </td>
                </tr>
                <tr>
                  <td>Jak-00155</td>
                  <td>PT Rakyat Sentosa</td>
                  <td>Plate Material</td>
                  <td>20 Days</td>
                  <td>FOB</td>
                  <td>Rp 20.000.000</td>
                  <td>
                    <span class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Pending">
                      <i class="fa fa-clock-o"></i>
                    </span>
                    <span style="display: none;">Pending</span>
                  </td>
                  <td>
                    <a href="item.html" class="btn btn-sm btn-default">Detail</a>
                  </td>
                </tr>
                <tr>
                  <td>Jak-00155</td>
                  <td>PT Mari Berbenah</td>
                  <td>Pupuk Anorganik</td>
                  <td>20 Days</td>
                  <td>DES</td>
                  <td>Rp 31.000.000</td>
                  <td>
                    <span class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Already taken">
                      <i class="fa fa-times"></i>
                    </span>
                    <span style="display: none;">Already taken</span>
                  </td>
                  <td>
                    <a href="item.html" class="btn btn-sm btn-default">Detail</a>
                  </td>
                </tr>
                <tr>
                  <td>Jak-00155</td>
                  <td>PT Rakyat Sentosa</td>
                  <td>Biji Kelapa</td>
                  <td>20 Days</td>
                  <td>DDU</td>
                  <td>Rp 26.000.000</td>
                  <td>
                    <span class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Already taken">
                      <i class="fa fa-times"></i>
                    </span>
                    <span style="display: none;">Already taken</span>
                  </td>
                  <td>
                    <a href="item.html" class="btn btn-sm btn-default">Detail</a>
                  </td>
                </tr>
                <tr>
                  <td>Jak-00155</td>
                  <td>PT Makmur Sentosa</td>
                  <td>Pupuk Kandang</td>
                  <td>20 Days</td>
                  <td>FCA</td>
                  <td>Rp 38.000.000</td>
                  <td>
                    <span class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Already taken">
                      <i class="fa fa-times"></i>
                    </span>
                    <span style="display: none;">Already taken</span>
                  </td>
                  <td>
                    <a href="item.html" class="btn btn-sm btn-default">Detail</a>
                  </td>
                </tr>
                <tr>
                  <td>Jak-00155</td>
                  <td>PT Cahaya Makmur</td>
                  <td>Biji Kedelai</td>
                  <td>20 Days</td>
                  <td>DDP</td>
                  <td>Rp 38.000.000</td>
                  <td>
                    <span class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Already taken">
                      <i class="fa fa-times"></i>
                    </span>
                    <span style="display: none;">Already taken</span>
                  </td>
                  <td>
                    <a href="item.html" class="btn btn-sm btn-default">Detail</a>
                  </td>
                </tr>
                <tr>
                  <td>Jak-00155</td>
                  <td>PT Rakyat Sentosa</td>
                  <td>Pupuk Organik</td>
                  <td>20 Days</td>
                  <td>DES</td>
                  <td>Rp 45.000.000</td>
                  <td>
                    <span class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Already taken">
                      <i class="fa fa-times"></i>
                    </span>
                    <span style="display: none;">Already taken</span>
                  </td>
                  <td>
                    <a href="item.html" class="btn btn-sm btn-default">Detail</a>
                  </td>
                </tr>
                <tr>
                  <td>Jak-00155</td>
                  <td>PT Suka Makmur</td>
                  <td>Bibit Padi</td>
                  <td>20 Days</td>
                  <td>FAS</td>
                  <td>Rp 88.000.000</td>
                  <td>
                    <span class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Already taken">
                      <i class="fa fa-times"></i>
                    </span>
                    <span style="display: none;">Already taken</span>
                  </td>
                  <td>
                    <a href="item.html" class="btn btn-sm btn-default">Detail</a>
                  </td>
                </tr>
                <tr>
                  <td>Jak-00155</td>
                  <td>PT Jaya Abadi</td>
                  <td>Bibit Teh</td>
                  <td>20 Days</td>
                  <td>CIF</td>
                  <td>Rp 20.000.000</td>
                  <td>
                    <span class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Already taken">
                      <i class="fa fa-times"></i>
                    </span>
                    <span style="display: none;">Already taken</span>
                  </td>
                  <td>
                    <a href="#detailBuyLead" data-toggle="modal" class="btn btn-sm btn-default">Detail</a>
                  </td>
                </tr>
                <tr>
                  <td>Jak-00155</td>
                  <td>PT Sawit Mekar</td>
                  <td>Biji Kelapa</td>
                  <td>20 Days</td>
                  <td>CPT</td>
                  <td>Rp 31.000.000</td>
                  <td>
                    <span class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Already taken">
                      <i class="fa fa-times"></i>
                    </span>
                    <span style="display: none;">Already taken</span>
                  </td>
                  <td>
                    <a href="item.html" class="btn btn-sm btn-default">Detail</a>
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
                    <label>Filter Section</label>
                    <select class="form-control selectpicker" data-live-search="true">
                      <option value="">Africulture, foresty, and fishing</option>
                      <option value="1" selected="">Mining and quarrying</option>
                      <option value="2">Manufacturing</option>
                      <option value="3">Electricity, gas, steam, and air conditioner supply</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Filter Division</label>
                    <select class="form-control selectpicker" data-live-search="true">
                      <option value="">Crop and animal production, hunting and related service activities</option>
                      <option value="1" selected="">Manufacture of food products</option>
                      <option value="2">Forestry and logging</option>
                      <option value="3">Fishing and aquaculture</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Filter Status</label>
                    <select class="form-control selectpicker" multiple>
                      <option value="0">Pending</option>
                      <option value="1" selected="">Rejected</option>
                      <option value="2">Delayed</option>
                      <option value="3">Assigned</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> Filter company by frequent buyer
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
              <a href="buy-lead-list.html" class="btn btn-orange active-orange btn-lg padding-transition no-border-radius">
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
    </div>

    <!-- Detail Buy Lead -->
    <div class="modal fade" id="detailBuyLead" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Detail Buy Lead</h4>
          </div>
          <div class="modal-body">
            <table class="table table-condensed no-border-table">
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
