<div class="modal fade" id="requestAddon" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title add-on-title">Request Add-On</h4>
      </div>
      <form method="post" action="{{url('doRequestCompanyAddOn')}}">
      {{csrf_field()}}
      <input type="hidden" name="id_company" value="{{$thisCompany->id}}">
      <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Add On</label>
                <select id="addon-select" class="form-control selectpicker" name="addonId" data-live-search="true">
                  <option value="">Select Addon</option>
                  @foreach($addOnData as $aData)
                    <option value="{{$aData->id}}">{{$aData->name}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Quantity</label>
                <select id="addon-qty" class="form-control selectpicker" name="quantity" data-live-search="true">
                  <option value="0">Select Quantity</option>
                  <option value="1" selected>1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Expired Date</label>
                <input id="addon-expired" type="text" class="form-control" name="expired" disabled value="{{date('d F Y', strtotime($thisCompany->CompanyPackage()->where('status','confirmed')->latest('created_at')->first()->expired_date)) }}">
                <input type="hidden" name="expired" value="{{$thisCompany->CompanyPackage()->where('status','confirmed')->latest('created_at')->first()->expired_date}}">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Price</label>
                <input id="addon-price" type="text" class="form-control" name="price" disabled value="kosong">
              </div>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" data-target="#konfirmasiRequestAddon-tampung" class="btn btn-primary" data-toggle="modal">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>
<meta name="fullpath" content="{{ URL::to('') }}">
<script type="text/javascript" src="{{asset('js/myscript/request-add-on.js')}}"></script>
