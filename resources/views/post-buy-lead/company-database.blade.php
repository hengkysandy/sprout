@extends('layouts.user.app')

@section('content')
  @include('layouts.user.navbar')

    <div id="main" class="container-fluid">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <h1 class="main-title no-margin-top">Company Database</h1>
        </div>
        <div class="col-md-9 col-sm-12 col-xs-12">
          <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-12">
              <div class="form-group">
                <label>Search</label>
                <input type="text" id="findCmpDb" class="form-control">
              </div>
            </div>
          </div>
          <div class="table-responsive">
            <table id="cmpDb" class="table table-bordered table-hover table-middle">
              <thead class="bg-white">
                <tr>
                  <th>Company Name</th>
                  <th>Business Category</th>
                  <th>Location</th>
                  @if(in_array(session()->get('userSession')[0]->role_id,[3,4]))
                    <th>Status</th>
                  @endif
                  @if(session()->get('userSession')[0]->role_id == 3)
                    <th>Action</th>
                  @endif
                  @if(in_array(session()->get('userSession')[0]->role_id,[5,6]))
                    <th>Frequent Buyer</th>
                  @else
                    <th>Vendor Assessment</th>
                  @endif
                  
                </tr>
              </thead>
              <tbody>

                @foreach($response as $key => $data)
                <tr>

                  <td>{{$data['company']->name}}</td>
                  <td>{{$data['section']->name}}</td>
                  <td>{{$data['company_city']}}</td>

                  @if(in_array(session()->get('userSession')[0]->role_id,[3,4]))
                    <td>
                      @if(count($data['company_status']) == 0 || $data['company_status']->id_status == 5)
                        <span class="text-muted no-text-decoration"><strong>Undecided</strong></span>
                      @elseif($data['company_status']->id_status == 6)
                        <span class="text-success"><strong>Approved</strong></span>
                      @elseif($data['company_status']->id_status == 7)
                        <span class="text-danger"><strong>Blacklisted</strong></span>
                      @endif
                    </td>
                  @endif
                  

                  @if(session()->get('userSession')[0]->role_id == 3)
                  <td>
                    @if(count($data['company_status']) == 0 || $data['company_status']->id_status == 5)
                      <a href="{{url('doChangeCompanyStatus?id='.$data['company']->id.'&status=6')}}" data-toggle="modal" class="btn btn-sm btn-success"><strong>Approve</strong></a>
                      <a href="{{url('doChangeCompanyStatus?id='.$data['company']->id.'&status=7')}}" data-toggle="modal" class="btn btn-sm btn-danger"><strong>Blacklist</strong></a>
                    @elseif($data['company_status']->id_status == 6)
                      <a href="{{url('doChangeCompanyStatus?id='.$data['company']->id.'&status=5')}}" data-toggle="modal" class="btn btn-sm btn-default">Cancel Approval</a>
                    @elseif($data['company_status']->id_status == 7)
                      <a href="{{url('doChangeCompanyStatus?id='.$data['company']->id.'&status=5')}}" data-toggle="modal" class="btn btn-sm btn-default">Cancel Blacklist</a>
                    @endif
                  </td>
                  @endif

                  <td>
                    @if(in_array(session()->get('userSession')[0]->role_id,[5,6]))

                      @if(count($data['company_status']) == 0 || $data['company_status']->id_status == 15)
                        <a href="{{url('doChangeCompanyStatus?id='.$data['company']->id.'&status=4')}}">
                          <span class="favourite favourite-false"><i class="fa fa-star-o"></i></span>
                        </a>
                      @elseif($data['company_status']->id_status == 4)
                        <a href="{{url('doChangeCompanyStatus?id='.$data['company']->id.'&status=15')}}">
                          <span class="favourite favourite-true"><i class="fa fa-star yellow-icon"></i></span>
                        </a>
                      @endif
                      
                    @else
                      <a href="{{url('download/file?url=http://res.cloudinary.com/stts/image/upload/v1506604787/z2nuvqflbflfxdd9q2q8.jpg')}}" class="btn btn-sm btn-primary">Download Document</a>
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
                    <select class="form-control selectpicker" data-live-search="true">
                      <option value="">Choose section</option>
                      <option value="1" selected="">Mining and quarrying</option>
                      <option value="2">Manufacturing</option>
                      <option value="3">Electricity, gas, steam, and air conditioner supply</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Filter By Division</label>
                    <select class="form-control selectpicker" data-live-search="true">
                      <option value="">Choose divison</option>
                      <option value="1" selected="">Manufacture of food products</option>
                      <option value="2">Forestry and logging</option>
                      <option value="3">Fishing and aquaculture</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> Filter company only for approved vendor
                    </label>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> Filter company only for blacklist vendor
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @include('layouts.user.side-nav')
      </div>
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
@endsection
