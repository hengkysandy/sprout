@extends('layouts.user.app')

@section('content')
  @include('layouts.user.navbar')
  <div id="main" class="container-fluid">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <h1 class="main-title no-margin-top">Company Database</h1>
      </div>
      @if(session()->get('userSession')[0]->role_id == 2)
      <div class="col-md-9 col-sm-12 col-xs-12">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-justified" role="tablist">
          <li role="presentation" class="active"><a href="#purchasing_company_database" aria-controls="post_buy_lead" role="tab" data-toggle="tab">Purchasing Company Database</a></li>
          <li role="presentation"><a href="#sales_company_database" aria-controls="buy_lead_list" role="tab" data-toggle="tab">Sales Company Database</a></li>
        </ul>
      </div>
      @endif
      <div class="tab-content">
        @if(in_array(session()->get('userSession')[0]->role_id,[2,3,4]))
        <div role="tabpanel" class="tab-pane active" id="purchasing_company_database">
          <div class="col-md-9 col-sm-12 col-xs-12">
            <div class="row">
              <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="form-group">
                  <label>Search</label>
                  <input type="text" id="findCmpDbPurchase" class="form-control">
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <table id="cmpDbPurchase" class="table table-bordered table-hover table-middle">
                <thead class="bg-white">
                  <tr>
                    <th>Company Name</th>
                    <th>Business Category</th>
                    <th>Location</th>
                    <th>Status</th>
                    <th>Action</th>
                    <th>Vendor Assessment</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach($response as $key => $data)
                  <tr>
                    <td>{{$data['company']->name}}</td>
                    <td>{{$data['section']->name}}</td>
                    <td>{{$data['company_city']}}</td>

                    <td>
                      @if(count($data['company_status']) == 0 || in_array(5, $data['company_status_arr']))
                        <span class="text-muted no-text-decoration"><strong>Undecided</strong></span>
                      @elseif(in_array(6, $data['company_status_arr']))
                        <span class="text-success"><strong>Approved</strong></span>
                      @elseif(in_array(7, $data['company_status_arr']))
                        <span class="text-danger"><strong>Blacklisted</strong></span>
                      @endif
                    </td>

                    <td>
                      @if(count($data['company_status']) == 0 || in_array(5, $data['company_status_arr']))
                        <a href="{{url('doChangeCompanyStatus?id='.$data['company']->id.'&status=6&type=procurement')}}" data-toggle="modal" class="btn btn-sm btn-success"><strong>Approve</strong></a>
                        <a href="{{url('doChangeCompanyStatus?id='.$data['company']->id.'&status=7&type=procurement')}}" data-toggle="modal" class="btn btn-sm btn-danger"><strong>Blacklist</strong></a>
                      @elseif(in_array(6, $data['company_status_arr']))
                        <a href="{{url('doChangeCompanyStatus?id='.$data['company']->id.'&status=5&type=procurement')}}" data-toggle="modal" class="btn btn-sm btn-default">Cancel Approval</a>
                      @elseif(in_array(7, $data['company_status_arr']))
                        <a href="{{url('doChangeCompanyStatus?id='.$data['company']->id.'&status=5&type=procurement')}}" data-toggle="modal" class="btn btn-sm btn-default">Cancel Blacklist</a>
                      @endif
                    </td>

                    <td>
                      <a href="{{url('download/file?url=http://res.cloudinary.com/stts/image/upload/v1506604787/z2nuvqflbflfxdd9q2q8.jpg')}}" class="btn btn-sm btn-primary">Download Document</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            @include('post-buy-lead.layouts-view.view-filter-sec-div-fav-blacklist')
          </div>
        </div>
        @endif
        @if(in_array(session()->get('userSession')[0]->role_id,[2,5,6]))
        <div role="tabpanel" class="tab-pane" id="sales_company_database">
          <div class="col-md-9 col-sm-12 col-xs-12">
            <div class="row">
              <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="form-group">
                  <label>Search</label>
                  <input type="text" id="findCmpDbSales" class="form-control">
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <table id="cmpDbSales" class="table table-bordered table-hover table-middle">
                <thead class="bg-white">
                  <tr>
                    <th>Buyer Name</th>
                    <th>Business Category</th>
                    <th>Location</th>
                    <th>Frequent Buyer</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($response as $key => $data)
                  <tr>
                    <td>{{$data['company']->name}}</td>
                    <td>{{$data['section']->name}}</td>
                    <td>{{$data['company_city']}}</td>
                    <td>
                    @if(count($data['company_status']) == 0 || in_array(15, $data['company_status_arr']))
                      <a href="{{url('doChangeCompanyStatus?id='.$data['company']->id.'&status=4&type=sales')}}">
                        <span class="favourite favourite-false" title="not favourite"><i class="fa fa-star-o"></i></span>
                      </a>
                    @elseif(in_array(4, $data['company_status_arr']))
                      <a href="{{url('doChangeCompanyStatus?id='.$data['company']->id.'&status=15&type=sales')}}">
                        <span class="favourite favourite-true" title="favourite"><i class="fa fa-star yellow-icon"></i></span>
                      </a>
                    @elseif(count($data['company_status']) != 0 || !in_array(15, $data['company_status_arr']))
                      <a href="{{url('doChangeCompanyStatus?id='.$data['company']->id.'&status=4&type=sales')}}">
                        <span class="favourite favourite-false" title="not favourite"><i class="fa fa-star-o"></i></span>
                      </a>
                    @endif
                    </td>

                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <div class="row">
              <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="row">
                  <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <label>Filter By Section</label>
                      <select id="section-sales-cd" class="form-control selectpicker" data-live-search="true">
                        <option value="">-</option>
                        @foreach($sectionData as $sData)
                          <option value="{{$sData->name}}">{{$sData->name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <label>Filter By Division</label>
                      <select id="div-sales-cd" class="form-control selectpicker" data-live-search="true">
                        <option value="">-</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" value="favourite" id="favourite-cbx"> Filter company by frequent buyer
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endif
      </div>
      @include('layouts.user.side-nav')
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

   <div class="modal fade" id="approveVendor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Are you sure want to Approve this vendor?</h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-success" data-dismiss="modal">Approve</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="cancelApproval" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Are you sure want to cancel approval for this vendor?</h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel Approval</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="blacklistVendor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Are you sure want to blacklist this vendor?</h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Blacklist</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="cancelBlacklist" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Are you sure want to cancel blacklist for this vendor?</h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-success" data-dismiss="modal">Cancel Blacklist</button>
        </div>
      </div>
    </div>
  </div>

  
  @include('layouts.user.mobile-menu')
  @if(in_array(session()->get('userSession')[0]->role_id,[5,6]))
  <script type="text/javascript">
    $( ".tab-content > #sales_company_database" ).show();
  </script>
  @endif
@endsection
