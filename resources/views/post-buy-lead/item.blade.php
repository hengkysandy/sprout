@extends('layouts.user.app')

@section('content')
  @include('layouts.user.navbar')
    <div id="main" class="container-fluid">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 ">
          <h1 class="main-title no-margin-top"><strong>{{$buyLead->item}} - Rp{{number_format($buyLead->total_price)}}</strong></h1>
          <div class="no-margin-top">
            <h4><strong>Delivery Time: {{$buyLead->delivery_day}} Days</strong></h4>
            <h4><strong>Shipping Term: {{$buyLead->ShippingTerm()->first()->name}} at {{$buyLead->City()->first()->name}}</strong></h4>
          </div>
          <br>
          <h4>Quotation :</h4>
        </div>
        <!--<div class="col-md-12 col-sm-12 col-xs-12 margin-bottom">
          <a href="#addPbl" data-toggle="modal" class="btn btn-primary">Add Post Buy Lead</a>
          <a href="#addUw" data-toggle="modal" class="btn btn-primary">Add Unit</a>
        </div>-->
        <div class="col-md-9 col-sm-12 col-xs-12">
          <div class="table-responsive">
            <!-- <table id="quotation"  class="table table-bordered table-hover table-middle"> kalo dipake js quotation responsive di mobile jadi jelek, tapi jadi gak bisa di sort -->
            <!--<table id="listQuote" class="table responsive dt-responsive table-bordered table-middle" cellspacing="0" width="100%">-->
            <table id="tableItemQuotation" class="table responsive dt-responsive table-bordered table-middle">
              <thead class="bg-white">
                <tr>
                  <th>Quotation ID</th>
                  <th>Business Category</th>
                  <th>Company Status</th>
                  <th>Company Name</th>
                  <th>Delivery Time</th>
                  <th>Shipping Term</th>
                  <th>Quote</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($quotation as $qData)
                <tr>
                  <td>{{$qData->BuyLead()->first()->buy_lead_code}}</td>

                  <td>
                    @if( $qData->User->Company->CompanyBusinessCategory->first() )
                      {{$qData->User->Company->CompanyBusinessCategory->first()->BusinessCategory->Section->name}}
                    @else
                      No Category
                    @endif
                  </td>

                  <td>
                    @if( $qData->User->Company->CompanyStatusFor->where('id_company_by',session()->get('companySession')[0]->id)->whereIn('id_status',[6,7])->first() )
                      {{$qData->User->Company->CompanyStatusFor->where('id_company_by',session()->get('companySession')[0]->id)->whereIn('id_status',[6,7])->first()->Status->name}}
                    @else
                      undecided
                    @endif
                  </td>

                  <td>{{$qData->User->Company->name}}</td>
                  <td>{{$qData->delivery_day}} Days</td>
                  <td>{{$qData->ShippingTerm()->first()->name}}</td>
                  <td>Rp {{number_format($qData->total_price)}}</td>
                  <td>
                    <a href="{{url('detailItem/'.$qData->id)}}" class="btn btn-default btn-sm">Detail</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          @include('post-buy-lead.layouts-view.view-filter-sec-div-fav-blacklist')
        </div>
        @include('post-buy-lead.popup-view.side-nav-buy-lead')

      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <a class="btn btn-warning btn-sm" href="{{url('post-buy-lead')}}"><i class="fa fa-arrow-left"></i> Back</a>
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
                <th>Estimated Budget</th>
                <td>:</td>
                <td>Rp50.000.000</td>
              </tr>
              <tr>
                <th>Payment Term</th>
                <td>:</td>
                <td>Down Payment 50%, Installment 6 Months</td>
              </tr>
              <tr>
                <th>Shipping Term</th>
                <td>:</td>
                <td>FOB at Jakarta</td>
              </tr>
              <tr>
                <th>Province</th>
                <td>:</td>
                <td>Banten</td>
              </tr>
              <tr>
                <th>City</th>
                <td>:</td>
                <td>Serang</td>
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
                <th>Area</th>
                <td>:</td>
                <td>Soekarno Hatta Airport</td>
              </tr>
              <tr>
                <th>Status</th>
                <td>:</td>
                <td><span class="text-danger"><strong>Not Yet Released</strong></span></td>
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

    <!-- Broadcasted List -->
    <div class="modal fade" id="broadcastComp" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Broadcasted Company</h4>
          </div>
          <div class="modal-body">
            <div class="table-responsive">
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
