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
            <h3 class="box-title">Recently Added Buy Lead</h3>
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
                      <a href="staff-item-buy-lead.html" class="product-title">Arifan</a>
                      <span class="product-description">
                      Procurement Staff
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
                        <span class="label-sm">4 Active Buy Lead</span>
                      </div>
                    </div>
                  </a>
                  <a href="history-rfq.html" class="product-title">
                    <div class="col-md-4 col-sm-4 col-xs-4 padding-btn-rl">
                      <div class="col-md-12 col-xs-12 btn-primary btn no-padding btn-sm">
                        <span class="initial">C</span>
                        <span class="label-sm">1 Closed</span>
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
                      <a href="staff-item-buy-lead.html" class="product-title">Rizki</a>
                      <span class="product-description">
                      Procurement Staff
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
                        <span class="label-sm">6 Active Buy Lead</span>
                      </div>
                    </div>
                  </a>
                  <a href="history-rfq.html" class="product-title">
                    <div class="col-md-4 col-sm-4 col-xs-4 padding-btn-rl">
                      <div class="col-md-12 col-xs-12 btn-primary btn no-padding btn-sm">
                        <span class="initial">C</span>
                        <span class="label-sm">9 Closed</span>
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
                      <a href="staff-item-buy-lead.html" class="product-title">Hafizh</a>
                      <span class="product-description">
                      Procurement Staff
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
                        <span class="label-sm">8 Active Buy Lead</span>
                      </div>
                    </div>
                  </a>
                  <a href="history-rfq.html" class="product-title">
                    <div class="col-md-4 col-sm-4 col-xs-4 padding-btn-rl">
                      <div class="col-md-12 col-xs-12 btn-primary btn no-padding btn-sm">
                        <span class="initial">C</span>
                        <span class="label-sm">10 Closed</span>
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
                      <a href="staff-item-buy-lead.html" class="product-title">Riko</a>
                      <span class="product-description">
                      Procurement Staff
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
                        <span class="label-sm">3 Active Buy Lead</span>
                      </div>
                    </div>
                  </a>
                  <a href="history-rfq.html" class="product-title">
                    <div class="col-md-4 col-sm-4 col-xs-4 padding-btn-rl">
                      <div class="col-md-12 col-xs-12 btn-primary btn no-padding btn-sm">
                        <span class="initial">C</span>
                        <span class="label-sm">1 Closed</span>
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
                      <a href="staff-item-buy-lead.html" class="product-title">Miru</a>
                      <span class="product-description">
                      Procurement Staff
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
                        <span class="label-sm">1 Active Buy Lead</span>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="product-title">
                    <div class="col-md-4 col-sm-4 col-xs-4 padding-btn-rl">
                      <div class="col-md-12 col-xs-12 btn-primary btn no-padding btn-sm">
                        <span class="initial">C</span>
                        <span class="label-sm">1 Closed</span>
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
                      <a href="staff-item-buy-lead.html" class="product-title">Zee</a>
                      <span class="product-description">
                      Procurement Staff
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
                        <span class="label-sm">1 Active Buy Lead</span>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="product-title">
                    <div class="col-md-4 col-sm-4 col-xs-4 padding-btn-rl">
                      <div class="col-md-12 col-xs-12 btn-primary btn no-padding btn-sm">
                        <span class="initial">C</span>
                        <span class="label-sm">1 Closed</span>
                      </div>
                    </div>
                  </a>
                </div>
              </li>
              <!-- /.item -->
            </ul>
          </div>
          <!-- /.box-body -->
        </div>
      </div>
      <div class="col-md-4 col-sm-12 col-xs-12 hide-on-med-and-down">
        <ul class="no-ul-style menu-wrapper">
          <li>
            <a href="home.html" class="btn btn-orange btn-lg active-orange padding-transition no-border-radius">
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
