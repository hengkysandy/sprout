<!-- Detail Quotation -->
    <div class="modal fade" id="detailQuotation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Detail Quotation</h4>
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
                <td>{{$quotation->amount}} no unit in table quotation</td>
              </tr>
              <tr>
                <th>Unit</th>
                <td>:</td>
                <td>no unit in table quotation</td>
              </tr>
              <tr>
                <th>Estimated Budget</th>
                <td>:</td>
                <td>Rp {{$quotation->total_price}}</td>
              </tr>
              <tr>
                <th>City</th>
                <td>:</td>
                <td>{{$quotation->city}}</td>
              </tr>
              <tr>
                <th>Shipping Term</th>
                <td>:</td>
                <td>{{$quotation->ShippingTerm()->first()->name}} at {{$quotation->city}}</td>
              </tr>
              <tr>
                <th>Delivery Time</th>
                <td>:</td>
                <td>{{$quotation->delivery_day}} Days</td>
              </tr>
              <tr>
                <th>Area</th>
                <td>:</td>
                <td>{{$quotation->Area()->first()->name}}</td>
              </tr>
              <tr>
                <th>Payment Term</th>
                <td>:</td>
                <td>{{$quotation->payment_term}}</td>
              </tr>
              <tr>
                <th>Document</th>
                <td>:</td>
                <td><a href="../../storage/sample.pdf" class="btn btn-primary btn-xs">Download Document</a></td>
              </tr>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>