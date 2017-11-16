<div class="col-md-9 col-sm-12 col-xs-12">
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