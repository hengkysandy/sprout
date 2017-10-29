@extends('layouts.user.app')

@section('content')
  @include('layouts.user.navbar')

  <div id="main" class="container-fluid">
    <div class="row">
      <div class="col-md-8 col-sm-12 col-xs-12 margin-top">
        <ul class="nav nav-tabs nav-justified" role="tablist">
          <li role="presentation" class="active"><a href="#PM" aria-controls="PM" role="tab" data-toggle="tab">Procurement Manager</a></li>
          <li role="presentation"><a href="#SM" aria-controls="SM" role="tab" data-toggle="tab">Sales Manager</a></li>
        </ul>
      </div>
      <div class="col-md-8 col-sm-12 col-xs-12">
        <div class="tab-content margin-bottom">
          <div role="tabpanel" class="tab-pane bg-white active border-tab-pane" id="PM">
            <!-- Note: Untuk notification yang muncul pada halaman ini dibuat yang tampil per 6 baris saja, nanti diberi batas waktu per berapa hari akan hilang dan di gantikan dengan notifikasi yang baru di buat, kurang lebih permintaan fitur klien seperti itu. Nanti di discuss saja dengan klien nya.
            -->
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
                        <img src="../images/avatar4.jpg" alt="Riko">
                      </div>
                      <div class="product-info">
                        <div class="col-md-6 col-xs-12 no-padding">
                          <a href="staff-procurement.html" class="product-title">Riko</a>
                          <span class="product-description">
                          Procurement Manager
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 no-padding margin-top-med-and-down">
                      <a href="meeting-schedule.html" class="product-title">
                        <div class="col-md-4 col-sm-4 col-xs-4 padding-btn-rl">
                          <div class="col-md-12 col-xs-12 btn-danger btn no-padding btn-sm">
                            <span class="initial">M</span>
                            <span class="label-sm">5 Meeting Schedule</span>
                          </div>
                        </div>
                      </a>
                      <a href="staff-procurement.html" class="product-title">
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
                            <span class="label-sm">2/10 Closed</span>
                          </div>
                        </div>
                      </a>
                    </div>
                  </li>
                  <li class="item">
                    <div class="col-md-6 col-sm-6 col-xs-12 no-padding">
                      <div class="product-img">
                        <img src="../images/avatar5.jpg" alt="Miru">
                      </div>
                      <div class="product-info">
                        <div class="col-md-6 col-xs-12 no-padding">
                          <a href="staff-procurement.html" class="product-title">Miru</a>
                          <span class="product-description">
                          Procurement Manager
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 no-padding margin-top-med-and-down">
                      <a href="#" class="product-title">
                        <div class="col-md-4 col-sm-4 col-xs-4 padding-btn-rl">
                          <div class="col-md-12 col-xs-12 btn-danger btn no-padding btn-sm">
                            <span class="initial">M</span>
                            <span class="label-sm">4 Meeting Schedule</span>
                          </div>
                        </div>
                      </a>
                      <a href="#" class="product-title">
                        <div class="col-md-4 col-sm-4 col-xs-4 padding-btn-rl">
                          <div class="col-md-12 col-xs-12 btn-success btn no-padding btn-sm">
                            <span class="initial">A</span>
                            <span class="label-sm">2 Active Buy Lead</span>
                          </div>
                        </div>
                      </a>
                      <a href="#" class="product-title">
                        <div class="col-md-4 col-sm-4 col-xs-4 padding-btn-rl">
                          <div class="col-md-12 col-xs-12 btn-primary btn no-padding btn-sm">
                            <span class="initial">C</span>
                            <span class="label-sm">1/3 Closed</span>
                          </div>
                        </div>
                      </a>
                    </div>
                  </li>
                  <li class="item">
                    <div class="col-md-6 col-sm-6 col-xs-12 no-padding">
                      <div class="product-img">
                        <img src="../images/avatar6.jpg" alt="Zee">
                      </div>
                      <div class="product-info">
                        <div class="col-md-6 col-xs-12 no-padding">
                          <a href="staff-procurement.html" class="product-title">Zee</a>
                          <span class="product-description">
                          Procurement Manager
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 no-padding margin-top-med-and-down">
                      <a href="#" class="product-title">
                        <div class="col-md-4 col-sm-4 col-xs-4 padding-btn-rl">
                          <div class="col-md-12 col-xs-12 btn-danger btn no-padding btn-sm">
                            <span class="initial">M</span>
                            <span class="label-sm">6 Meeting Schedule</span>
                          </div>
                        </div>
                      </a>
                      <a href="#" class="product-title">
                        <div class="col-md-4 col-sm-4 col-xs-4 padding-btn-rl">
                          <div class="col-md-12 col-xs-12 btn-success btn no-padding btn-sm">
                            <span class="initial">A</span>
                            <span class="label-sm">6 Active Buy Lead</span>
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
                </ul>
              </div>
            </div>
          </div>

          <div role="tabpanel" class="tab-pane bg-white border-tab-pane" id="SM">
            <div class="box box-primary margin-top">
              <div class="box-header with-border">
                <h3 class="box-title">Recently Added Quotation</h3>
              </div>
              <div class="box-body">
                <ul class="products-list product-list-in-box">
                  <li class="item">
                    <div class="col-md-6 col-sm-6 col-xs-12 no-padding">
                      <div class="product-img">
                        <img src="../images/avatar4.jpg" alt="Riko">
                      </div>
                      <div class="product-info">
                        <div class="col-md-6 col-xs-12 no-padding">
                          <a href="staff-sales.html" class="product-title">Pramono</a>
                          <span class="product-description">
                          Sales Manager
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 no-padding margin-top-med-and-down">
                      <a href="meeting-schedule.html" class="product-title">
                        <div class="col-md-4 col-sm-4 col-xs-4 padding-btn-rl">
                          <div class="col-md-12 col-xs-12 btn-danger btn no-padding btn-sm">
                            <span class="initial">M</span>
                            <span class="label-sm">4 Meeting Schedule</span>
                          </div>
                        </div>
                      </a>
                      <a href="staff-sales.html" class="product-title">
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
                            <span class="label-sm">3/6 Closed</span>
                          </div>
                        </div>
                      </a>
                    </div>
                  </li>
                  <li class="item">
                    <div class="col-md-6 col-sm-6 col-xs-12 no-padding">
                      <div class="product-img">
                        <img src="../images/avatar5.jpg" alt="Miru">
                      </div>
                      <div class="product-info">
                        <div class="col-md-6 col-xs-12 no-padding">
                          <a href="staff-sales.html" class="product-title">Supriatna</a>
                          <span class="product-description">
                          Sales Manager
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 no-padding margin-top-med-and-down">
                      <a href="#" class="product-title">
                        <div class="col-md-4 col-sm-4 col-xs-4 padding-btn-rl">
                          <div class="col-md-12 col-xs-12 btn-danger btn no-padding btn-sm">
                            <span class="initial">M</span>
                            <span class="label-sm">5 Meeting Schedule</span>
                          </div>
                        </div>
                      </a>
                      <a href="#" class="product-title">
                        <div class="col-md-4 col-sm-4 col-xs-4 padding-btn-rl">
                          <div class="col-md-12 col-xs-12 btn-success btn no-padding btn-sm">
                            <span class="initial">A</span>
                            <span class="label-sm">3 Active Prospect</span>
                          </div>
                        </div>
                      </a>
                      <a href="#" class="product-title">
                        <div class="col-md-4 col-sm-4 col-xs-4 padding-btn-rl">
                          <div class="col-md-12 col-xs-12 btn-primary btn no-padding btn-sm">
                            <span class="initial">C</span>
                            <span class="label-sm">2/5 Closed</span>
                          </div>
                        </div>
                      </a>
                    </div>
                  </li>
                  <li class="item">
                    <div class="col-md-6 col-sm-6 col-xs-12 no-padding">
                      <div class="product-img">
                        <img src="../images/avatar6.jpg" alt="Zee">
                      </div>
                      <div class="product-info">
                        <div class="col-md-6 col-xs-12 no-padding">
                          <a href="staff-sales.html" class="product-title">Joko</a>
                          <span class="product-description">
                          Sales Manager
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 no-padding margin-top-med-and-down">
                      <a href="#" class="product-title">
                        <div class="col-md-4 col-sm-4 col-xs-4 padding-btn-rl">
                          <div class="col-md-12 col-xs-12 btn-danger btn no-padding btn-sm">
                            <span class="initial">M</span>
                            <span class="label-sm">4 Meeting Schedule</span>
                          </div>
                        </div>
                      </a>
                      <a href="#" class="product-title">
                        <div class="col-md-4 col-sm-4 col-xs-4 padding-btn-rl">
                          <div class="col-md-12 col-xs-12 btn-success btn no-padding btn-sm">
                            <span class="initial">A</span>
                            <span class="label-sm">0 Active Prospect</span>
                          </div>
                        </div>
                      </a>
                      <a href="#" class="product-title">
                        <div class="col-md-4 col-sm-4 col-xs-4 padding-btn-rl">
                          <div class="col-md-12 col-xs-12 btn-primary btn no-padding btn-sm">
                            <span class="initial">C</span>
                            <span class="label-sm">5/5 Closed</span>
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
            <a href="post-buy-lead" class="btn btn-orange btn-lg padding-transition no-border-radius">
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
