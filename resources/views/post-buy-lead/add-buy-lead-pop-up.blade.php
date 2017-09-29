<!-- Post Buy Lead -->
    <div class="modal fade" id="addPbl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Post Buy Lead</h4>
          </div>
          <form method="post" action="doInsertBuyLead" enctype="multipart/form-data">
            {{csrf_field()}}
          <div class="modal-body">
              <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Item</label>
                    <input type="text" name="item" class="form-control" value="Plate Material">
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Amount</label>
                    <input type="text" name="amount" class="form-control" value="11">
                  </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Broadcast To Company</label>
                    <br>
                    <a href="#broadcast" data-toggle="modal" class="btn btn-primary btn-sm">Broadcast</a>
                  </div>
                  <table class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>ID</th>
                        <th>Company Name</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>JKT-02</td>
                        <td>Jaya Abadi</td>
                        <td><a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>JKT-01</td>
                        <td>Abadi Isidah</td>
                        <td><a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a></td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>JKT-04</td>
                        <td>Maju Terus</td>
                        <td><a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Short Description</label>
                    <textarea rows="5" name="shortDescription" class="form-control no-resize">Ini harganya harus bisa murah dan kualitas bagus</textarea>
                  </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                  <label>Business Category</label>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Section 1</label>
                    <select name="section[]" class="form-control selectpicker" data-live-search="true">
                      @foreach($sectionData as $sData)
                        <option value="{{$sData->id}}">{{$sData->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Section 2</label>
                    <select name="section[]" class="form-control selectpicker" data-live-search="true">
                      @foreach($sectionData as $sData)
                        <option value="{{$sData->id}}">{{$sData->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Division 1</label>
                    <select name="division[]" class="form-control selectpicker" data-live-search="true">
                      @foreach($divisionData as $dData)
                        <option value="{{$dData->id}}">{{$dData->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Division 2</label>
                    <select name="division[]" class="form-control selectpicker" data-live-search="true">
                      @foreach($divisionData as $dData)
                        <option value="{{$dData->id}}">{{$dData->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Group 1</label>
                    <select name="group[]" class="form-control selectpicker" data-live-search="true">
                      @foreach($groupData as $gData)
                        <option value="{{$gData->id}}">{{$gData->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Group 2</label>
                    <select name="group[]" class="form-control selectpicker" data-live-search="true">
                      @foreach($groupData as $gData)
                        <option value="{{$gData->id}}">{{$gData->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Unit</label>
                    <select class="form-control selectpicker" name="unit" data-live-search="true">
                      @foreach($unitData as $uData)
                        <option value="{{$uData->id}}">{{$uData->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Total Price</label>
                    <div class="input-group">
                      <span class="input-group-addon">Rp</span>
                      <input type="number" name="totalPrice" class="form-control" min="0" value="50000000">
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Payment Term</label>
                    <input type="text" name="paymentTerm" class="form-control" value="Down Payment 50%, Installment 6 Months">
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Shipping Term</label>
                    <select name="shippingTerm" class="form-control selectpicker" data-live-search="true">
                      @foreach($shippingData as $sData)
                        <option value="{{$sData->id}}">{{$sData->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Province</label>
                    <select name="province" class="form-control selectpicker" data-live-search="true">
                      @foreach($provinceData as $pData)
                        <option value="{{$pData->id}}">{{$pData->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>City</label>
                    <select name="city" class="form-control selectpicker" data-live-search="true">
                      @foreach($cityData as $cData)
                        <option value="{{$cData->id}}">{{$cData->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Closed Date</label>
                    <input name="closedDate" type="date" id="Editcd" class="form-control datepicker">
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Delivery Time</label>
                    <div class="input-group">
                      <input name="deliveryDays" type="number" class="form-control">
                      <span class="input-group-addon">Days</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Area (Airport, Seaport, &amp; Terminal)</label>
                    <select name="area" class="form-control selectpicker" data-live-search="true">
                      @foreach($areaData as $aData)
                        <option value="{{$aData->id}}">{{$aData->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label class="btn btn-primary btn-file">
                      Upload Buy Lead <input name="document" type="file" class="hidden">
                    </label>
                    <p class="help-block">Format document .docs, .xls, and .pdf</p>
                  </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="vendorCbx"> Approved Vendor Only
                      </label>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary add-pbl">Add</button>
          </div>
          </form>
        </div>
      </div>
    </div>