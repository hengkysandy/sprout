<!-- Revise Quotation -->
    <div class="modal fade" id="reviseQuote" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Revise Quotation</h4>
          </div>
          <form method="post" action="{{url('doCreateRevise')}}" enctype="multipart/form-data">
            {{csrf_field()}}
          <input type="hidden" name="quotation_id" id="quotation_id" value="">
          <div class="modal-body">
              <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Item</label>
                    <input id="itemQuo" type="text" name="item" class="form-control" disabled>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Amount</label>
                    <input id="amountQuo" type="text" name="amount" class="form-control">
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Unit</label>
                    <select id="unitQuo" name="unit" class="form-control" disabled>
                      <option value="">Select Unit</option>
                      
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Estimated Budget</label>
                    <div class="input-group">
                      <span class="input-group-addon">Rp</span>
                      <input id="totalPriceQuo" name="totalPrice" type="text" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>City</label>
                    <select id="cityQuo" name="city" class="form-control selectpicker" data-live-search="true">
                      @foreach($city as $cData)
                      <option value="{{$cData->name}}">{{$cData->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Shipping Term <small>(optional)</small></label>
                    <select id="shippingTermQuo" name="shippingTerm" class="form-control selectpicker" data-live-search="true">
                      @foreach($shippingTerm as $sData)
                      <option value="{{$sData->id}}">{{$sData->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Delivery Time</label>
                    <div class="input-group">
                      <input id="delivery_dayQuo" name="delivery_day" type="number" class="form-control" min="1">
                      <span class="input-group-addon">Days</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Area (Airport, Seaport, &amp; Terminal) <small>(optional)</small></label>
                    <select id="areaQuo" name="area" class="form-control selectpicker" data-live-search="true">
                      @foreach($area as $aData)
                      <option value="{{$aData->id}}">{{$aData->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Payment Term <small>(optional)</small></label>
                    <input id="paymentTermQuo" name="paymentTerm" type="text" class="form-control">
                  </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label class="btn btn-primary btn-file">
                      Upload Quotation <input name="quotationDocument" type="file" class="hidden">
                    </label>
                    <p class="help-block">Format document .docs, .xls, and .pdf</p>
                  </div>
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary send-quote">Send</button>
          </div>
          </form>
        </div>
      </div>
    </div>