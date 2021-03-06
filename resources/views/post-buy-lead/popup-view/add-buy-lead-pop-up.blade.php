<!-- Post Buy Lead -->
    <div class="modal fade" id="addPbl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Post Buy Lead</h4>
          </div>
          <form method="post" action="{{url('doInsertBuyLead')}}" enctype="multipart/form-data">
            {{csrf_field()}}
          <div class="modal-body">
              <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Item</label>
                    <input type="text" name="item" class="form-control">
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Amount</label>
                    <input type="text" name="amount" class="form-control">
                  </div>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Short Description</label>
                    <textarea rows="5" name="shortDescription" class="form-control no-resize"></textarea>
                  </div>
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Unit</label>
                    <select class="form-control selectpicker" name="unit" data-live-search="true">
                      @foreach($unitData as $uData)
                        <option value="{{$uData->id}}">{{$uData->name}}</option>
                      @endforeach
                      <option value="other">other</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12" id="other_unit">
                  <div class="form-group">
                    <label>Other Unit Name</label>
                    <input type="text" class="form-control" name="otherUnit">
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Estimated Budget</label>
                    <div class="input-group">
                      <span class="input-group-addon">Rp</span>
                      <input type="number" name="totalPrice" class="form-control" min="0">
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Payment Term <small>(optional)</small></label>
                    <input type="text" name="paymentTerm" class="form-control" placeholder="Down Payment 50%, Installment 6 Months" >
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Shipping Term <small>(optional)</small></label>
                    <select name="shippingTerm" class="form-control selectpicker" data-live-search="true">
                      <option value="">Choose Shipping Term</option>
                      @foreach($shippingData as $sData)
                        <option value="{{$sData->id}}">{{$sData->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Province</label>
                    <select id="groupProvince" name="province" class="form-control selectpicker" data-live-search="true">
                      <option value="">Choose Province</option>
                      @foreach($provinceData as $pData)
                        <option value="{{$pData->id}}">{{$pData->map_name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>City</label>
                    <select id="groupCity" name="city" class="form-control selectpicker" data-live-search="true">
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Closed Date</label>
                    <input name="closedDate" type="date" id="Editcdtemp" class="form-control datepicker">
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Delivery Time</label>
                    <div class="input-group">
                      <input name="deliveryDays" type="number" class="form-control" min="1">
                      <span class="input-group-addon">Days</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Area (Airport, Seaport, &amp; Terminal)  <small>(optional)</small></label>
                    <select name="area" class="form-control selectpicker" data-live-search="true">
                      <option value="">Choose Area</option>
                      @foreach($areaData as $aData)
                        <option value="{{$aData->id}}">{{$aData->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                  <label>Business Category</label>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Section 1 <small class="text-danger">(required)</small></label>
                    <select id="sectionOption1" name="section[]" class="form-control selectpicker" data-live-search="true">
                      <option value="">Choose Section</option>
                      @foreach($sectionData as $sData)
                        <option value="{{$sData->id}}">{{$sData->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Section 2 <small>(optional)</small></label>
                    <select id="sectionOption2" name="section[]" class="form-control selectpicker" data-live-search="true">
                      <option value="">Choose Section</option>
                      @foreach($sectionData as $sData)
                        <option value="{{$sData->id}}">{{$sData->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Division 1 <small>(optional)</small></label>
                    <select id="divisionOption1" name="division[]" class="form-control selectpicker" data-live-search="true">
                      
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Division 2 <small>(optional)</small></label>
                    <select id="divisionOption2" name="division[]" class="form-control selectpicker" data-live-search="true">
                      
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Group 1 <small>(optional)</small></label>
                    <select id="groupOption1" name="group[]" class="form-control selectpicker" data-live-search="true">
                      
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Group 2 <small>(optional)</small></label>
                    <select id="groupOption2" name="group[]" class="form-control selectpicker" data-live-search="true">
                      
                    </select>
                  </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Broadcast To Company</label>
                    <br>
                    <a id="broadcast-btn" href="#broadcast" data-toggle="modal" class="btn btn-primary btn-sm">Broadcast</a>
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
                    <tbody id="assigned-tbody">
                      @foreach($anotherCompany as $acKey => $acData)
                        @if( !empty($acData->CompanyStatusFor()->get()) )

                        @if($acData->CompanyStatusFor()->where('id_status',16)->first() && $acData->CompanyStatusFor()->where('id_company_by',session()->get('companySession')[0]->id)->first())
                          <tr>
                            <td>{{++$acKey}}</td>
                            <td>{{$acData->id}}</td>
                            <td>{{$acData->name}}</td>
                            <td><a href="{{url('doRemoveAssignedCompany?id='.$acData->id)}}" data-value="{{$acData->id}}" class="btn btn-sm btn-danger remove-assign"><i class="fa fa-trash"></i></a></td>
                          </tr>
                        @endif

                        @endif
                      @endforeach
                    </tbody>
                  </table>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label class="btn btn-primary btn-file">
                      Upload Buy Lead <input name="document" type="file" class="hidden">
                    </label>

                    <p class="help-block">Format document .docs, .xls, and .pdf <small>(optional)</small></p>
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