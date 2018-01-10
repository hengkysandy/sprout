@extends('layouts.user.app')

@section('content')
  @include('layouts.user.navbar')

  <div id="main" class="container-fluid">
    <div class="row">
      @if($currUser->UserRole()->first()->role_id == 2)
      <div class="col-md-8 col-sm-12 col-xs-12 margin-top">
        <ul class="nav nav-tabs nav-justified" role="tablist">
          <li role="presentation" class="active"><a href="#PM" aria-controls="PM" role="tab" data-toggle="tab">Procurement Manager</a></li>
          <li role="presentation"><a href="#SM" aria-controls="SM" role="tab" data-toggle="tab">Sales Manager</a></li>
        </ul>
      </div>
      @endif
      <div class="col-md-8 col-sm-12 col-xs-12">
        <div class="tab-content margin-bottom">
          @if(in_array($currUser->UserRole()->first()->role_id,[2,3,4]))
          <div role="tabpanel" class="tab-pane bg-white active border-tab-pane" id="PM">
            <!-- Note: Untuk notification yang muncul pada halaman ini dibuat yang tampil per 6 baris saja, nanti diberi batas waktu per berapa hari akan hilang dan di gantikan dengan notifikasi yang baru di buat, kurang lebih permintaan fitur klien seperti itu. Nanti di discuss saja dengan klien nya.
            -->
            <div class="box box-primary margin-top">
              <div class="box-header with-border">
                <h3 class="box-title">Recently Added Buy Lead</h3>
              </div>

              <!-- /.box-header -->
              @if($currUser->UserRole()->first()->role_id == 4)
                  <div class="box-body">
                    <ul class="products-list product-list-in-box">
                      @foreach($buyLeadUser as $data)
                      <li class="item">
                        <div class="col-md-6 col-sm-6 col-xs-12 no-padding">
                          <div class="product-img">
                            <img src="{{$data->photo_image}}" alt="gambar">
                          </div>
                          <div class="product-info">
                            <div class="col-md-6 col-xs-12 no-padding">
                              <a href="#" class="product-title">{{$data->item}}</a>
                              <span class="product-description">
                              {{$data->description}}
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 no-padding margin-top-med-and-down">
                          <a href="meeting-schedule.html" class="product-title">
                            <div class="col-md-4 col-sm-4 col-xs-4 padding-btn-rl">
                              <div class="col-md-12 col-xs-12 btn-danger btn no-padding btn-sm">
                                <span class="initial">M</span>
                                <span class="label-sm">0 Meeting Schedule belum bisa</span>
                              </div>
                            </div>
                          </a>
                          <a href="staff-procurement.html" class="product-title">
                            <div class="col-md-4 col-sm-4 col-xs-4 padding-btn-rl">
                              <div class="col-md-12 col-xs-12 btn-success btn no-padding btn-sm">
                                <span class="initial">A</span>
                                <span class="label-sm">0 Active Buy Lead belum bisa</span>
                              </div>
                            </div>
                          </a>
                          <a href="history-rfq.html" class="product-title">
                            <div class="col-md-4 col-sm-4 col-xs-4 padding-btn-rl">
                              <div class="col-md-12 col-xs-12 btn-primary btn no-padding btn-sm">
                                <span class="initial">C</span>
                                <span class="label-sm">0/0 Closed belum bisa</span>
                              </div>
                            </div>
                          </a>
                        </div>
                      </li>
                      @endforeach
                    </ul>
                  </div>
              @else
                  <div class="box-body">
                    <ul class="products-list product-list-in-box">
                      @foreach($companyUser as $data)
                      @if( ($currUser->UserRole()->first()->role_id == 2 && $data->UserRole()->where('role_id',3)->first()) || ($currUser->UserRole()->first()->role_id == 3 && $data->created_by == $currUser->id) )
                      <li class="item">
                        <div class="col-md-6 col-sm-6 col-xs-12 no-padding">
                          <div class="product-img">
                            <img src="{{$data->photo_image}}" alt="gambar">
                          </div>
                          <div class="product-info">
                            <div class="col-md-6 col-xs-12 no-padding">
                              <a href="{{url('home?id='.$data->id)}}" class="product-title">{{$data->first_name}} {{$data->last_name}}</a>
                              <span class="product-description">
                              {{$data->UserRole()->first()->Role()->first()->name}}
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 no-padding margin-top-med-and-down">
                          <a href="meeting-schedule.html" class="product-title">
                            <div class="col-md-4 col-sm-4 col-xs-4 padding-btn-rl">
                              <div class="col-md-12 col-xs-12 btn-danger btn no-padding btn-sm">
                                <span class="initial">M</span>
                                <span class="label-sm">0 Meeting Schedule belum bisa</span>
                              </div>
                            </div>
                          </a>
                          <a href="staff-procurement.html" class="product-title">
                            <div class="col-md-4 col-sm-4 col-xs-4 padding-btn-rl">
                              <div class="col-md-12 col-xs-12 btn-success btn no-padding btn-sm">
                                <span class="initial">A</span>
                                <span class="label-sm">0 Active Buy Lead belum bisa</span>
                              </div>
                            </div>
                          </a>
                          <a href="history-rfq.html" class="product-title">
                            <div class="col-md-4 col-sm-4 col-xs-4 padding-btn-rl">
                              <div class="col-md-12 col-xs-12 btn-primary btn no-padding btn-sm">
                                <span class="initial">C</span>
                                <span class="label-sm">0/0 Closed belum bisa</span>
                              </div>
                            </div>
                          </a>
                        </div>
                      </li>
                      @endif
                      @endforeach
                    </ul>
                  </div>
              @endif
              

            </div>
          </div>
          @endif
          @if(in_array($currUser->UserRole()->first()->role_id,[2,5,6]))
          <div role="tabpanel" class="tab-pane bg-white border-tab-pane" id="SM">
            <div class="box box-primary margin-top">
              <div class="box-header with-border">
                <h3 class="box-title">Recently Added Quotation</h3>
              </div>
              <div class="box-body">
                <ul class="products-list product-list-in-box">
                  @foreach($companyUser as $data)
                  @if( ($currUser->UserRole()->first()->role_id == 2 && $data->UserRole()->where('role_id',5)->first()) || ($currUser->UserRole()->first()->role_id == 5 && $data->created_by == $currUser->id) || ($currUser->UserRole()->first()->role_id == 6 && $data->id == $currUser->id) )
                  <li class="item">
                    <div class="col-md-6 col-sm-6 col-xs-12 no-padding">
                      <div class="product-img">
                        <img src="{{$data->photo_image}}" alt="">
                      </div>
                      <div class="product-info">
                        <div class="col-md-6 col-xs-12 no-padding">
                          <a href="{{url('home?id='.$data->id)}}" class="product-title">{{$data->first_name}} {{$data->last_name}}</a>
                          <span class="product-description">
                          {{$data->UserRole()->first()->Role()->first()->name}}
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 no-padding margin-top-med-and-down">
                      <a href="meeting-schedule.html" class="product-title">
                        <div class="col-md-4 col-sm-4 col-xs-4 padding-btn-rl">
                          <div class="col-md-12 col-xs-12 btn-danger btn no-padding btn-sm">
                            <span class="initial">M</span>
                            <span class="label-sm">0 Meeting Schedule</span>
                          </div>
                        </div>
                      </a>
                      <a href="staff-sales.html" class="product-title">
                        <div class="col-md-4 col-sm-4 col-xs-4 padding-btn-rl">
                          <div class="col-md-12 col-xs-12 btn-success btn no-padding btn-sm">
                            <span class="initial">A</span>
                            <span class="label-sm">0 Active Prospect</span>
                          </div>
                        </div>
                      </a>
                      <a href="history-rfq.html" class="product-title">
                        <div class="col-md-4 col-sm-4 col-xs-4 padding-btn-rl">
                          <div class="col-md-12 col-xs-12 btn-primary btn no-padding btn-sm">
                            <span class="initial">C</span>
                            <span class="label-sm">0/0 Closed</span>
                          </div>
                        </div>
                      </a>
                    </div>
                  </li>
                  @endif
                  @endforeach
                </ul>
              </div>
              <!-- /.box-body -->
              <!--<div class="box-footer text-center">
                <a href="javascript:void(0)" class="uppercase">View All Products</a>
              </div>-->
              <!-- /.box-footer -->
            </div>
          </div>
          @endif
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
  @if(in_array(session()->get('userSession')[0]->role_id,[5,6]))
  <script type="text/javascript">
    $( ".tab-content > .tab-pane" ).show();
  </script>
  @endif
  @include('layouts.user.mobile-menu')
@endsection
