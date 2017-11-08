<div class="container-fluid padding">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 margin-top">
      <div class="table-responsive">
        <table class="table table-middle table-bordered table-hover">
          <thead>
            <tr>
              <th>Section</th>
              <th>Section Name</th>
              <th>Division</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($thisCompany->CompanyBusinessCategory()->get() as $sVal)
            <tr>
              <td>{{$sVal->Section()->first()->section}}</td>
              <td>{{$sVal->Section()->first()->name}}</td>
              <td>
              @foreach($sVal->Section()->first()->Division()->get() as $dVal)
                {{$dVal->name}},
              @endforeach
              </td>
              <td>
                <a href="#detailBc" data-toggle="modal" class="btn btn-orange btn-sm">Detail</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

    <div class="col-md-12 col-sm-6 col-xs-12">
      <div class="row">
        <div class="col-md-10 col-sm-12 col-xs-12">
          <div class="form-group">
            <label class="block">Package</label>
            <div class="col-md-8 col-sm-8 col-xs-12 no-padding-left">
              <input type="text" class="form-control" disabled value="{{$thisCompany->CompanyPackage()->latest('created_at')->first()->Package()->first()->name}}">
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <a href="#" class="inline-block"><i class="fa fa-question-circle"></i> Package Information</a>
            </div>
          </div>
        </div>

        <br><br><br><br>

        <div class="col-md-10 col-sm-12 col-xs-12">
          <div class="col-md-8 col-sm-12 col-xs-12 no-padding-left">
            <div class="form-group">
              <label>Account Duration</label>
              <input type="text" class="form-control"  value="{{date('d F Y', strtotime($thisCompany->CompanyPackage()->where('status','confirmed')->latest('created_at')->first()->expired_date)) }}" disabled>
            </div>
          </div>
          @if(session()->get('userSession')[0]->role_id == 2)
          <div class="col-md-4 col-sm-12 col-xs-12 no-padding-left">
            <div class="col-md-6 col-sm-6 col-xs-6">
              <div class="wrapper-btn-bc">
                <a href="#reactivate" class="btn btn-primary" data-toggle="modal">Re-Activate</a>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
              <div class="wrapper-btn-bc">
                <a href="#requestAddon" class="btn btn-primary" data-toggle="modal">Request Add-On</a>
              </div>
            </div>
          </div>
          <div class="col-md-8 col-sm-12 col-xs-12 no-padding-left">
            <div class="form-group">
              <label>Add-On Duration</label>
              <input type="text" class="form-control"  value="10 November 2018" disabled>
            </div>
          </div>
          <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="wrapper-btn-bc">
              <a href="#reactivateAddon" class="btn btn-primary" data-toggle="modal">Re-Activate Add-On</a>
            </div>
          </div>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>