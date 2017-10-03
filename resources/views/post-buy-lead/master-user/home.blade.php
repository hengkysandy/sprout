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
                      <a href="staff-buy-lead" class="product-title">Arifan</a>
                      <span class="product-description">
                      Procurement Manager
                      </span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 no-padding margin-top-med-and-down">
                  <a href="meeting-schedule" class="product-title">
                    <div class="col-md-4 col-sm-4 col-xs-4 padding-btn-rl">
                      <div class="col-md-12 col-xs-12 btn-danger btn no-padding btn-sm">
                        <span class="initial">M</span>
                        <span class="label-sm">2 Meeting Schedule</span>
                      </div>
                    </div>
                  </a>
                  <a href="staff-buy-lead" class="product-title">
                    <div class="col-md-4 col-sm-4 col-xs-4 padding-btn-rl">
                      <div class="col-md-12 col-xs-12 btn-success btn no-padding btn-sm">
                        <span class="initial">A</span>
                        <span class="label-sm">4 Active Buy Lead</span>
                      </div>
                    </div>
                  </a>
                  <a href="history-rfq" class="product-title">
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
          <!--<div class="box-footer text-center">
            <a href="javascript:void(0)" class="uppercase">View All Products</a>
          </div>-->
          <!-- /.box-footer -->
        </div>
      </div>
      <div class="col-md-4 col-sm-12 col-xs-12 hide-on-med-and-down">
        <ul class="no-ul-style menu-wrapper">
          <li>
            <a href="home" class="btn btn-orange btn-lg active-orange padding-transition no-border-radius">
              <i class="pull-left fa fa-home padding-top-2px padding-right-8px"></i> <span>Home</span>
            </a>
          </li>
          <li>
            <a href="post_buy_lead" class="btn btn-orange btn-lg padding-transition no-border-radius">
              <i class="pull-left fa fa-pencil-square padding-top-2px padding-right-8px"></i> <span>Post Buy Lead</span>
            </a>
          </li>
          <li>
            <a href="company-database" class="btn btn-orange btn-lg padding-transition no-border-radius">
              <i class="pull-left fa fa-building padding-top-2px padding-right-8px"></i> <span>Company Database</span>
            </a>
          </li>
          <li>
            <a href="meeting-schedule" class="btn btn-orange btn-lg padding-transition no-border-radius">
              <i class="pull-left fa fa-calendar padding-top-2px padding-right-8px"></i> <span>Meeting Schedule</span>
            </a>
          </li>
          <li>
            <a href="profile" class="btn btn-orange btn-lg padding-transition no-border-radius">
              <i class="pull-left fa fa-gear padding-top-2px padding-right-8px"></i> <span>Profile</span>
            </a>
          </li>
          <li>
            <a href="logoutUser" class="btn btn-orange btn-lg padding-transition no-border-radius">
              <i class="pull-left fa fa-power-off padding-top-2px padding-right-8px"></i> <span>Logout</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  

  @include('layouts.user.mobile-menu')
@endsection
