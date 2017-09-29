@extends('layouts.user.app')

@section('content')
  @include('layouts.user.navbar')
  
  <div id="main" class="container-fluid">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <h1 class="main-title no-margin-top no-margin-bottom">Buy Lead History</h1>
      </div>
      <div class="col-md-12 col-sm-12 col-xs-12 margin-top">
        <div class="row">
          <div class="col-md-3">
            <div class="form-group">
              <label>Search</label>
              <input id="searchHistory" type="text" class="form-control">
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-9 col-sm-12 col-xs-12">
        <div class="table-responsive">
          <table id="historyRfq" class="table table-bordered table-middle table-hover">
            <thead class="bg-white">
              <tr>
                <th>No</th>
                <th>Item</th>
                <th>Nama</th>
                <th>Position</th>
                <th>Total Price</th>
                <th>Shpment Term</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Plate Material</td>
                <td>Arifan</td>
                <td>Staff</td>
                <td>Rp50.000.000</td>
                <td>FOB at Jakarta</td>
                <td>
                  <span class="btn btn-success btn-sm">
                    <i class="fa fa-check"></i>
                  </span>
                </td>
                <td>
                  <a href="#detailPbl" data-toggle="modal" class="btn btn-default">Detail</a>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Pupuk</td>
                <td>Zee</td>
                <td>Staff</td>
                <td>Rp40.000.000</td>
                <td>EX at Tangerang</td>
                <td>
                  <span class="btn btn-success btn-sm">
                    <i class="fa fa-check"></i>
                  </span>
                </td>
                <td>
                  <a href="#detailPbl" data-toggle="modal" class="btn btn-default">Detail</a>
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>Baja</td>
                <td>Miru</td>
                <td>Staff</td>
                <td>Rp200.000.000</td>
                <td>FOB at Serpong</td>
                <td>
                  <span class="btn btn-success btn-sm">
                    <i class="fa fa-check"></i>
                  </span>
                </td>
                <td>
                  <a href="#detailPbl" data-toggle="modal" class="btn btn-default">Detail</a>
                </td>
              </tr>
              <tr>
                <td>4</td>
                <td>Besi</td>
                <td>Rizki</td>
                <td>Staff</td>
                <td>Rp150.000.000</td>
                <td>FOB at Pasar Minggu</td>
                <td>
                  <span class="btn btn-success btn-sm">
                    <i class="fa fa-check"></i>
                  </span>
                </td>
                <td>
                  <a href="#detailPbl" data-toggle="modal" class="btn btn-default">Detail</a>
                </td>
              </tr>
              <tr>
                <td>5</td>
                <td>Timah</td>
                <td>Hafizh</td>
                <td>Manager</td>
                <td>Rp450.000.000</td>
                <td>FOB at Gading Serpong</td>
                <td>
                  <span class="btn btn-success btn-sm">
                    <i class="fa fa-check"></i>
                  </span>
                </td>
                <td>
                  <a href="#detailPbl" data-toggle="modal" class="btn btn-default">Detail</a>
                </td>
              </tr>
              <tr>
                <td>7</td>
                <td>Batu Bara</td>
                <td>Riko</td>
                <td>30 Ton</td>
                <td>Rp550.000.000</td>
                <td>EX at Pasar Minggu</td>
                <td>
                  <span class="btn btn-success btn-sm">
                    <i class="fa fa-check"></i>
                  </span>
                </td>
                <td>
                  <a href="#detailPbl" data-toggle="modal" class="btn btn-default">Detail</a>
                </td>
              </tr>
              <tr>
                <td>8</td>
                <td>Baja</td>
                <td>Miru</td>
                <td>10 Ton</td>
                <td>Rp70.000.000</td>
                <td>FOB at Pasar Senen</td>
                <td>
                  <span class="btn btn-success btn-sm">
                    <i class="fa fa-check"></i>
                  </span>
                </td>
                <td>
                  <a href="#detailPbl" data-toggle="modal" class="btn btn-default">Detail</a>
                </td>
              </tr>
              <tr>
                <td>8</td>
                <td>Pohon Karet</td>
                <td>Zee</td>
                <td>8 Ton</td>
                <td>Rp50.000.000</td>
                <td>FOB at Kota</td>
                <td>
                  <span class="btn btn-success btn-sm">
                    <i class="fa fa-check"></i>
                  </span>
                </td>
                <td>
                  <a href="#detailPbl" data-toggle="modal" class="btn btn-default">Detail</a>
                </td>
              </tr>
              <tr>
                <td>9</td>
                <td>Beras</td>
                <td>Zee</td>
                <td>100 Ton</td>
                <td>Rp1.150.000.000</td>
                <td>FOB at Banten</td>
                <td>
                  <span class="btn btn-success btn-sm">
                    <i class="fa fa-check"></i>
                  </span>
                </td>
                <td>
                  <a href="#detailPbl" data-toggle="modal" class="btn btn-default">Detail</a>
                </td>
              </tr>
              <tr>
                <td>10</td>
                <td>Soda</td>
                <td>Riko</td>
                <td>10 Ton</td>
                <td>Rp50.000.000</td>
                <td>FOB at Solo</td>
                <td>
                  <span class="btn btn-success btn-sm">
                    <i class="fa fa-check"></i>
                  </span>
                </td>
                <td>
                  <a href="#detailPbl" data-toggle="modal" class="btn btn-default">Detail</a>
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
            <a href="post-buy-lead.html" class="btn btn-orange btn-lg active-orange padding-transition no-border-radius">
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
      <div class="col-md-12 col-sm-12 col-xs-12 margin-top">
        <a class="btn btn-warning btn-sm" href="detail-item.html"><i class="fa fa-arrow-left"></i> Back</a>
      </div>
    </div>
  </div>

  <!-- Detail Post Buy Lead -->
  <div class="modal fade" id="detailPbl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Detail Post Buy Lead</h4>
        </div>
        <div class="modal-body">
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
              <th>Broadcasted</th>
              <td>:</td>
              <td>
                <a href="#broadcastComp" data-toggle="modal" class="btn btn-primary btn-sm">View List</a>
              </td>
            </tr>
            <tr>
              <th>Short Description</th>
              <td>:</td>
              <td>Ini barang harus berkualitas bagus</td>
            </tr>
            <tr>
              <th>Business Category 1</th>
              <td>:</td>
              <td><a href="#bc1" data-toggle="modal" class="btn btn-primary btn-sm">View List</a></td>
            </tr>
            <tr>
              <th>Business Category 2</th>
              <td>:</td>
              <td><a href="#bc2" data-toggle="modal" class="btn btn-primary btn-sm">View List</a></td>
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
              <td>FOB at Jakarta</td>
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
              <th>Delivery Date</th>
              <td>:</td>
              <td>30 April 2017</td>
            </tr>
            <tr>
              <th>Status</th>
              <td>:</td>
              <td><span class="text-success"><strong>Released</strong></span></td>
            </tr>
            <tr>
              <th>Document</th>
              <td>:</td>
              <td><a href="../../storage/sample.pdf" class="btn btn-primary btn-sm">Open Document</a></td>
            </tr>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Broadcasted Company -->
  <div class="modal fade" id="broadcastComp" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Broadcasted Company</h4>
        </div>
        <div class="modal-body">
          <table id="listBroadcast" class="table table-hover table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>ID</th>
                <th>Company Name</th>
                <th>Business Category</th>
                <th>Status Vendor</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>JKT-02</td>
                <td>Arjuna Sanjaya</td>
                <td>Agriculture, forestry and fishing</td>
                <td><span class="text-success"><strong>Approved</strong></span></td>
              </tr>
              <tr>
                <td>2</td>
                <td>JKT-01</td>
                <td>Adijaya Abadi</td>
                <td>Agriculture, forestry and fishing</td>
                <td><span class="text-success"><strong>Approved</strong></span></td>
              </tr>
              <tr>
                <td>3</td>
                <td>JKT-05</td>
                <td>Malik Sentosa Selalu</td>
                <td>Agriculture, forestry and fishing</td>
                <td><span class="text-success"><strong>Approved</strong></span></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Detail Business Category 1 -->
  <div class="modal fade" id="bc1" tabindex="-1" role="dialog">
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
                    <a href="#division1" class="no-text-decoration" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="division1">Division 1 - Crop and animal production, hunting, and related service activities</a>
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
                          <td>Growing of non prennial crops</td>
                        </tr>
                        <tr>
                          <td>013</td>
                          <td>Plant porpagation</td>
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
                          <td>Support activities to agriculture and post harvest crop activities</td>
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

  <!-- Detail Business Category 2 -->
  <div class="modal fade" id="bc2" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Detail Business Category</h4>
        </div>
        <div class="modal-body">
          <h4><strong>Section B</strong></h4>
          <h5>Mining and quarrying</h5>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <a href="#division3" class="no-text-decoration" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="division3">Division 5 - Mining of coal and lignite</a>
                  </h3>
                </div>
                <div id="division3" class="panel-body collapse">
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
                          <td>051</td>
                          <td>Mining of hard coal</td>
                        </tr>
                        <tr>
                          <td>052</td>
                          <td>Mining of lignite</td>
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
                    <a href="#division4" class="no-text-decoration" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="division4">Division 6 - Extraction of crude petroleum and natural gas</a>
                  </h3>
                </div>
                <div id="division4" class="panel-body collapse">
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
                          <td>061</td>
                          <td>Extraction of crude petroleum</td>
                        </tr>
                        <tr>
                          <td>062</td>
                          <td>Extraction of natural gas</td>
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

  <div id="mySidenav" class="sidenav hide-on-large-only">
    <div class="menu-content">
      <a href="../home-login.html">
        <i class="fa fa-power-off"></i> Logout
      </a>
      <a href="profile.html">
        <i class="fa fa-gear"></i> Profile
      </a>
      <a href="meeting-schedule.html">
        <i class="fa fa-calendar"></i> Meeting Schedule
      </a>
      <a href="company-database.html">
        <i class="fa fa-building"></i> Company Database
      </a>
      <a href="post-buy-lead.html">
        <i class="fa fa-pencil-square"></i> Post Buy Lead
      </a>
      <a href="home.html">
        <i class="fa fa-home"></i> Home
      </a>
      <a href="javascript:void(0)" id="nav-btn-close" onclick="closeNav()"><i class="fa fa-close"></i></a>
    </div>

    <a href="javascript:void(0)">
      <div class="menu-btn-container" id="nav-btn-open" onclick="openNav()">
        <div class="menu-btn">
          <i class="fa fa-bars"></i>
        </div>
      </div>
    </a>
  </div>

  @include('layouts.user.mobile-menu')
@endsection
