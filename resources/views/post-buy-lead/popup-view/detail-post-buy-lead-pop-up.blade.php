<!-- Detail Post Buy Lead -->
    <div class="modal fade" id="detailPbl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Detail Post Buy Lead</h4>
          </div>
          <div class="modal-body">
            <table class="table table-condensed no-border-table table-middle">
              <tr>
                <th>Item</th>
                <td>:</td>
                <td>{{$buyLead->item}}</td>
              </tr>
              <tr>
                <th>Amount</th>
                <td>:</td>
                <td>{{$buyLead->amount}} {{$buyLead->Unit()->first()->name}}</td>
              </tr>
              <tr>
                <th>Broadcasted</th>
                <td>:</td>
                <td>
                  <a href="#broadcastComp" data-toggle="modal" class="btn btn-primary btn-xs">View List</a>
                </td>
              </tr>
              <tr>
                <th>Short Description</th>
                <td>:</td>
                <td>{{$buyLead->short_description}}</td>
              </tr>
              @foreach($buyLead->BuyLeadBusinessCategory()->get() as $key => $blBC)
              <?php $idx = ++$key; ?>
                <tr>
                  <th>Business Category {{$idx}}</th>
                  <td>:</td>
                  <td><a href="#bc{{$idx}}" data-toggle="modal" class="btn btn-primary btn-xs">View List</a></td>
                </tr>
              @endforeach
              
              <tr>
                <th>Unit</th>
                <td>:</td>
                <td>{{$buyLead->Unit()->first()->name}}</td>
              </tr>
              <tr>
                <th>Total Price</th>
                <td>:</td>
                <td>Rp {{number_format($buyLead->total_price)}}</td>
              </tr>
              <tr>
                <th>Payment Term</th>
                <td>:</td>
                <td>{{$buyLead->payment_term}}</td>
              </tr>
              <tr>
                <th>Shipping Term</th>
                <td>:</td>
                <td>{{$buyLead->ShippingTerm()->first()->name}} at {{$buyLead->City()->first()->name}}</td>
              </tr>
              <tr>
                <th>Province</th>
                <td>:</td>
                <td>{{$buyLead->Province()->first()->name}}</td>
              </tr>
              <tr>
                <th>City</th>
                <td>:</td>
                <td>{{$buyLead->City()->first()->name}}</td>
              </tr>
              <tr>
                <th>Closed Date</th>
                <td>:</td>
                <td>{{$buyLead->closed_date}}</td>
              </tr>
              <tr>
                <th>Delivery Time</th>
                <td>:</td>
                <td>{{$buyLead->delivery_day}} Days</td>
              </tr>
              <tr>
                <th>Area</th>
                <td>:</td>
                <td>{{$buyLead->Area()->first()->name}}</td>
              </tr>
              <tr>
                <th>Status</th>
                <td>:</td>
                <td><span class="text-success"><strong>{{$buyLead->BuyLeadStatus()->first()->Status()->first()->name}}</strong></span></td>
              </tr>
              <tr>
                <th>Document</th>
                <td>:</td>
                <td><a target="_blank" href="{{url('download/file?url='.$buyLead->document)}}" class="btn btn-primary btn-xs">Download Document</a></td>
              </tr>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>