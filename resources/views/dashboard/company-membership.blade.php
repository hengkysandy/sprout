@extends('layouts.dashboard.app')

@section('content')
  @include('layouts.dashboard.navbar')

  <div class="container-fluid">
    <h1 class="main-title no-margin-top">Company Membership</h1>
    <div class="row">
      <div class="col-md-2">
        <div class="form-group">
          <label>Search Company ID</label>
          <input type="text" class="form-control" id="findCompanyID" placeholder="JKT-001">
        </div>
      </div>
      <div class="col-md-2">
        <div class="form-group">
          <label>Search Company Name</label>
          <input type="text" class="form-control" id="findCompanyName" placeholder="PT Citra Indah">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <h1 class="main-title no-margin-top">New Request</h1>
        <div class="table-responsive">
          <table id="companyMembershipTable" class="table table-bordered table-hover">
            <thead class="bg-white">
              <tr>
                <th>Company ID</th>
                <th>Company Name</th>
                <!-- Note:
                Untuk bagian business category, satu perusahaan dapat memiliki dua business category yang dimana bila sudah dipilihkan oleh internal sprout di pisahkan dengan koma saja
                -->
                <th>Business Category</th>
                <th>Package</th>
                <th>Duration</th>
                <th>Price</th>
                <th>Re-Activate Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($requestAddOn as $data)
              <tr>
                <td>{{$data->company_id}}</td>
                <td>{{$data->Company()->first()->name}}</td>
                <td>
                  @foreach($data->Company()->first()->CompanyBusinessCategory()->get() as $bcData)
                    {{$bcData->BusinessCategory()->first()->Section()->first()->section}},
                  @endforeach
                </td>
                <td>{{$data->AddOn()->first()->name}} * {{$data->quantity}} pcs</td>
                <td>{{$data->expired_date}}</td>
                <td>{{$data->AddOn()->first()->price}}</td>
                <td>
                  <a href="{{url('doChangeStatusCompanyAddOn?id='.$data->id.'&status=confirmed')}}" class="btn btn-sm btn-primary btn-approve">Approve</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-md-12 col-sm-12 col-xs-12">
        <h1 class="main-title no-margin-top">Re-Activate Request</h1>
        <div class="table-responsive">
          <table id="reactivateRequest" class="table table-bordered table-hover">
            <thead class="bg-white">
              <tr>
                <th>Company ID</th>
                <th>Company Name</th>
                <th>Business Category</th>
                <th>Package</th>
                <th>Duration</th>
                <th>Price</th>
                <th>Re-Activate Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($companyPackageData as $cpData)
              <tr>
                <td>{{$cpData->Company()->first()->id}}</td>
                <td><a href="{{url('member/'.$cpData->Company()->first()->id)}}">{{$cpData->Company()->first()->name}}</a></td>
                <td><a href="#" data-toggle="modal">ini ambil dari mana ya</a></td>
                <td>{{$cpData->Package()->first()->name}}</td>
                <td>{{$cpData->year_duration}} Year</td>
                <td>belum ada harga</td>
                <td>
                  <a href="{{url('doChangeStatusCompanyPackage?id='.$cpData->id.'&status=confirmed')}}" class="btn btn-sm btn-primary btn-approve">Approve</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-md-12 col-sm-12 col-xs-12">
        <h1 class="main-title no-margin-top">Company Database</h1>
        <div class="table-responsive">
          <table id="cpDatabase" class="table table-bordered table-hover">
            <thead class="bg-white">
              <tr>
                <th>Company ID</th>
                <th>Company Name</th>
                <th>Business Category</th>
              </tr>
            </thead>
            <tbody>
              @foreach($approvedCompany as $acData)
                <tr>
                <td>{{$acData->id}}</td>
                <td><a href="{{url('member/'.$acData->id)}}">{{$acData->name}}</a></td>
                <td>
                @if($acData->CompanyBusinessCategory()->first())
                  <a href="#bCategory" data-toggle="modal">{{$acData->CompanyBusinessCategory()->first()->Section()->first()->name}}</a>
                @else
                  There's no business category yet
                @endif
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="bCategory" tabindex="-1" role="dialog">
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
                    <a href="#division1" class="no-text-decoration" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="division1">Division 1 - Crop and animal production, hunting and related service activities</a>
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
                          <td>Growing of non-perennial crops</td>
                        </tr>
                        <tr>
                          <td>012</td>
                          <td>Growing of perennial crops</td>
                        </tr>
                        <tr>
                          <td>013</td>
                          <td>Plant propagation</td>
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
                          <td>Support activities to agriculture and post-harvest crop activities</td>
                        </tr>
                        <tr>
                          <td>017</td>
                          <td>Hunting, trapping and related service activities</td>
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
                        <tr>
                          <td>023</td>
                          <td>Gathering of non-wood forest products</td>
                        </tr>
                        <tr>
                          <td>024</td>
                          <td>Support services to forestry</td>
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

  @include('layouts.dashboard.menu-mobile')
@endsection
