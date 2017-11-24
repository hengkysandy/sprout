  <div class="table-responsive">
    <table id="bll" class="table table-middle table-bordered table-hover">
      <thead class="bg-white">
        <tr>
          <th>Buy Lead ID</th>
          <th>Buyer Name</th>
          <th>Item</th>
          <th>Delivery Time</th>
          <th>Shipping Term</th>
          <th>Total Price</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($buyLeadList as $blData)
          <tr>
            <td>{{$blData->buy_lead_code}}</td>
            <td>{{$blData->User->Company->name}}</td>
            <td>{{$blData->item}}</td>
            <td>{{$blData->delivery_day}} Days</td>
            <td>{{$blData->ShippingTerm->name}}</td>
            <td>Rp {{$blData->total_price}}</td>
            <td>
              <span class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="Approved">
                <i class="fa fa-check"></i>
              </span>
              <span style="display: none;">Approved</span>
            </td>
            <td>
              <a href="{{url('item/'.$blData->id)}}" class="btn btn-sm btn-default">Detail</a>
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
            <label>Filter Section</label>
            <select id="section-bl-list" class="form-control selectpicker" data-live-search="true">
              @foreach($sectionData as $sData)
                <option value="{{$sData->id}}">{{$sData->name}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12">
          <div class="form-group">
            <label>Filter Division</label>
            <select id="divison-bl-list" class="form-control selectpicker" data-live-search="true">
              <option value="">-</option>
              
            </select>
          </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="form-group">
            <label>Filter Status</label>
            <select id="status-bl-list" class="form-control selectpicker" multiple>
              <option value="">Choose Status</option>
            </select>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="checkbox">
            <label>
              <input id="frequent-bl-list" type="checkbox"> Filter company by frequent buyer
            </label>
          </div>
        </div>
      </div>
    </div>
  </div>