@extends('layouts.user.app')

@section('content')
  @include('layouts.user.navbar')
    <div id="main" class="container-fluid">
      <div class="row">
        <div class="col-md-8 col-sm-12 col-xs-12">
          <!-- Note: Untuk notification yang muncul pada halaman ini dibuat yang tampil per 6 baris saja, nanti diberi batas waktu per berapa hari akan hilang dan di gantikan dengan notifikasi yang baru di buat, kurang lebih permintaan fitur klien seperti itu. Nanti di discuss saja dengan klien nya.
          -->
          <!--<div class="margin-top">
            <a href="#collapseNotif" data-toggle="collapse" class="btn btn-primary">Show All Notification</a>
          </div>-->
          <div class="box box-primary margin-top">
            <div class="box-header with-border">
              <h3 class="box-title">Recently Added Quotation</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="products-list product-list-in-box">
                <li class="item">
                  <div class="col-md-6 col-sm-6 col-xs-12 no-padding">
                    <div class="product-img">
                      <img src="../../images/avatar.jpg" alt="Arifan">
                    </div>
                    <div class="product-info">
                      <div class="col-md-6 col-xs-12 no-padding">
                        <a href="staff-buy-lead.html" class="product-title">Arifan</a>
                        <span class="product-description">
                        Sales Staff
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12 no-padding margin-top-med-and-down">
                    <a href="meeting-schedule.html" class="product-title">
                      <div class="col-md-4 col-sm-4 col-xs-4 padding-btn-rl">
                        <div class="col-md-12 col-xs-12 btn-danger btn no-padding btn-sm">
                          <span class="initial">M</span>
                          <span class="label-sm">2 Meeting Schedule</span>
                        </div>
                      </div>
                    </a>
                    <a href="staff-buy-lead.html" class="product-title">
                      <div class="col-md-4 col-sm-4 col-xs-4 padding-btn-rl">
                        <div class="col-md-12 col-xs-12 btn-success btn no-padding btn-sm">
                          <span class="initial">A</span>
                          <span class="label-sm">4 Active Prospect</span>
                        </div>
                      </div>
                    </a>
                    <a href="history-rfq.html" class="product-title">
                      <div class="col-md-4 col-sm-4 col-xs-4 padding-btn-rl">
                        <div class="col-md-12 col-xs-12 btn-primary btn no-padding btn-sm">
                          <span class="initial">C</span>
                          <span class="label-sm">3/10 Closed</span>
                        </div>
                      </div>
                    </a>
                  </div>
                </li>
                <!-- /.item -->
                <li class="item">
                  <div class="col-md-6 col-sm-6 col-xs-12 no-padding">
                    <div class="product-img">
                      <img src="../../images/avatar2.jpg" alt="Rizki">
                    </div>
                    <div class="product-info">
                      <div class="col-md-6 col-xs-12 no-padding">
                        <a href="staff-buy-lead.html" class="product-title">Rizki</a>
                        <span class="product-description">
                          Sales Staff
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12 no-padding margin-top-med-and-down">
                    <a href="#" class="product-title">
                      <div class="col-md-4 col-sm-4 col-xs-4 padding-btn-rl">
                        <div class="col-md-12 col-xs-12 btn-danger btn no-padding btn-sm">
                          <span class="initial">M</span>
                          <span class="label-sm">1 Meeting Schedule</span>
                        </div>
                      </div>
                    </a>
                    <a href="staff-buy-lead.html" class="product-title">
                      <div class="col-md-4 col-sm-4 col-xs-4 padding-btn-rl">
                        <div class="col-md-12 col-xs-12 btn-success btn no-padding btn-sm">
                          <span class="initial">A</span>
                          <span class="label-sm">6 Active Prospect</span>
                        </div>
                      </div>
                    </a>
                    <a href="history-rfq.html" class="product-title">
                      <div class="col-md-4 col-sm-4 col-xs-4 padding-btn-rl">
                        <div class="col-md-12 col-xs-12 btn-primary btn no-padding btn-sm">
                          <span class="initial">C</span>
                          <span class="label-sm">7/10 Closed</span>
                        </div>
                      </div>
                    </a>
                  </div>
                </li>
                <li class="item">
                  <div class="col-md-6 col-sm-6 col-xs-12 no-padding">
                    <div class="product-img">
                      <img src="../../images/avatar3.jpg" alt="Hafizh">
                    </div>
                    <div class="product-info">
                      <div class="col-md-6 col-xs-12 no-padding">
                        <a href="staff-buy-lead.html" class="product-title">Hafizh</a>
                        <span class="product-description">
                        Sales Staff
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12 no-padding margin-top-med-and-down">
                    <a href="meeting-schedule.html" class="product-title">
                      <div class="col-md-4 col-sm-4 col-xs-4 padding-btn-rl">
                        <div class="col-md-12 col-xs-12 btn-danger btn no-padding btn-sm">
                          <span class="initial">M</span>
                          <span class="label-sm">1 Meeting Schedule</span>
                        </div>
                      </div>
                    </a>
                    <a href="staff-buy-lead.html" class="product-title">
                      <div class="col-md-4 col-sm-4 col-xs-4 padding-btn-rl">
                        <div class="col-md-12 col-xs-12 btn-success btn no-padding btn-sm">
                          <span class="initial">A</span>
                          <span class="label-sm">8 Active Prospect</span>
                        </div>
                      </div>
                    </a>
                    <a href="history-rfq.html" class="product-title">
                      <div class="col-md-4 col-sm-4 col-xs-4 padding-btn-rl">
                        <div class="col-md-12 col-xs-12 btn-primary btn no-padding btn-sm">
                          <span class="initial">C</span>
                          <span class="label-sm">2/10 Closed</span>
                        </div>
                      </div>
                    </a>
                  </div>
                </li>
                <!-- /.item -->
                <li class="item">
                  <div class="col-md-6 col-sm-6 col-xs-12 no-padding">
                    <div class="product-img">
                      <img src="../../images/avatar4.jpg" alt="Riko">
                    </div>
                    <div class="product-info">
                      <div class="col-md-6 col-xs-12 no-padding">
                        <a href="staff-buy-lead.html" class="product-title">Riko</a>
                        <span class="product-description">
                        Sales Staff
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12 no-padding margin-top-med-and-down">
                    <a href="meeting-schedule.html" class="product-title">
                      <div class="col-md-4 col-sm-4 col-xs-4 padding-btn-rl">
                        <div class="col-md-12 col-xs-12 btn-danger btn no-padding btn-sm">
                          <span class="initial">M</span>
                          <span class="label-sm">1 Meeting Schedule</span>
                        </div>
                      </div>
                    </a>
                    <a href="staff-buy-lead.html" class="product-title">
                      <div class="col-md-4 col-sm-4 col-xs-4 padding-btn-rl">
                        <div class="col-md-12 col-xs-12 btn-success btn no-padding btn-sm">
                          <span class="initial">A</span>
                          <span class="label-sm">3 Active Prospect</span>
                        </div>
                      </div>
                    </a>
                    <a href="history-rfq.html" class="product-title">
                      <div class="col-md-4 col-sm-4 col-xs-4 padding-btn-rl">
                        <div class="col-md-12 col-xs-12 btn-primary btn no-padding btn-sm">
                          <span class="initial">C</span>
                          <span class="label-sm">4/10 Closed</span>
                        </div>
                      </div>
                    </a>
                  </div>
                </li>
                <li class="item">
                  <div class="col-md-6 col-sm-6 col-xs-12 no-padding">
                    <div class="product-img">
                      <img src="../../images/avatar5.jpg" alt="Miru">
                    </div>
                    <div class="product-info">
                      <div class="col-md-6 col-xs-12 no-padding">
                        <a href="staff-buy-lead.html" class="product-title">Miru</a>
                        <span class="product-description">
                        Sales Staff
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12 no-padding margin-top-med-and-down">
                    <a href="#" class="product-title">
                      <div class="col-md-4 col-sm-4 col-xs-4 padding-btn-rl">
                        <div class="col-md-12 col-xs-12 btn-danger btn no-padding btn-sm">
                          <span class="initial">M</span>
                          <span class="label-sm">1 Meeting Schedule</span>
                        </div>
                      </div>
                    </a>
                    <a href="#" class="product-title">
                      <div class="col-md-4 col-sm-4 col-xs-4 padding-btn-rl">
                        <div class="col-md-12 col-xs-12 btn-success btn no-padding btn-sm">
                          <span class="initial">A</span>
                          <span class="label-sm">1 Active Prospect</span>
                        </div>
                      </div>
                    </a>
                    <a href="#" class="product-title">
                      <div class="col-md-4 col-sm-4 col-xs-4 padding-btn-rl">
                        <div class="col-md-12 col-xs-12 btn-primary btn no-padding btn-sm">
                          <span class="initial">C</span>
                          <span class="label-sm">6/10 Closed</span>
                        </div>
                      </div>
                    </a>
                  </div>
                </li>
                <li class="item">
                  <div class="col-md-6 col-sm-6 col-xs-12 no-padding">
                    <div class="product-img">
                      <img src="../../images/avatar6.jpg" alt="Zee">
                    </div>
                    <div class="product-info">
                      <div class="col-md-6 col-xs-12 no-padding">
                        <a href="staff-buy-lead.html" class="product-title">Zee</a>
                        <span class="product-description">
                        Sales Staff
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12 no-padding margin-top-med-and-down">
                    <a href="#" class="product-title">
                      <div class="col-md-4 col-sm-4 col-xs-4 padding-btn-rl">
                        <div class="col-md-12 col-xs-12 btn-danger btn no-padding btn-sm">
                          <span class="initial">M</span>
                          <span class="label-sm">1 Meeting Schedule</span>
                        </div>
                      </div>
                    </a>
                    <a href="#" class="product-title">
                      <div class="col-md-4 col-sm-4 col-xs-4 padding-btn-rl">
                        <div class="col-md-12 col-xs-12 btn-success btn no-padding btn-sm">
                          <span class="initial">A</span>
                          <span class="label-sm">1 Active Prospect</span>
                        </div>
                      </div>
                    </a>
                    <a href="#" class="product-title">
                      <div class="col-md-4 col-sm-4 col-xs-4 padding-btn-rl">
                        <div class="col-md-12 col-xs-12 btn-primary btn no-padding btn-sm">
                          <span class="initial">C</span>
                          <span class="label-sm">4/10 Closed</span>
                        </div>
                      </div>
                    </a>
                  </div>
                </li>
                <!-- /.item -->
              </ul>
            </div>
            <!-- /.box-body -->
            <!--<div class="box-footer text-center">
              <a href="javascript:void(0)" class="uppercase">View All Products</a>
            </div>-->
            <!-- /.box-footer -->
          </div>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12 hide-on-med-and-down">
          @include('layouts.navbar-sales.navbar')
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
