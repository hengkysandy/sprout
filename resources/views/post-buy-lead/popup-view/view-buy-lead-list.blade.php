  <div class="table-responsive">
    <table id="bll" class="table table-middle table-bordered table-hover">
      <thead class="bg-white">
        <tr>
          <th>Section Name</th>
          <th>Division description</th>
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
        <?php $arrStatus = []; ?>
        @foreach($buyLeadList as $blKey => $blData)
          <tr>
            <td>{{$blData->BuyLeadBusinessCategory()->first()->BusinessCategory()->first()->Section->name}}</td>
            <td>{{$blData->BuyLeadBusinessCategory()->first()->BusinessCategory()->first()->Division->description}}</td>
            <td>{{$blData->buy_lead_code}}</td>
            <td>{{$blData->User->Company->name}}</td>
            <td>{{$blData->item}}</td>
            <td>{{$blData->delivery_day}} Days</td>
            <td>{{$blData->ShippingTerm->name}}</td>
            <td>Rp {{$blData->total_price}}</td>
            <td>
              <?php 
                $btnClass = "btn-default"; $title = "Available"; $icon = "fa-question";
                if( $blData->Quotation()->first() ){
                  $btnClass = "btn-success"; $title = "Approved"; $icon = "fa-check";
                }else if( $blData->BuyLeadUser()->first() ){

                  if( $blData->BuyLeadUser->first()->status == "inactive" ){

                    if( $blData->BuyLeadUser->first()->linked_for == "0" ){//assign job by manager

                      if( session()->get('userSession')[0]->role_id == 5 ){
                        $btnClass = "btn-warning"; $title = "Assigned Job"; $icon = "fa-clock-o";
                      }else if( session()->get('userSession')[0]->role_id == 6  && $blData->BuyLeadUser->first()->id_user == session()->get('userSession')[0]->id ){
                        $btnClass = "btn-primary"; $title = "Job Assigned"; $icon = "fa-handshake-o";
                      }

                    }else if( $blData->BuyLeadUser->first()->linked_for == "1" ){//req job by sales

                      if( session()->get('userSession')[0]->role_id == 5 ){
                        $btnClass = "btn-primary"; $title = "Request Job"; $icon = "fa-handshake-o";
                      }else if( session()->get('userSession')[0]->role_id == 6  && $blData->BuyLeadUser->first()->id_user == session()->get('userSession')[0]->id ){
                        $btnClass = "btn-warning"; $title = "Pending"; $icon = "fa-clock-o";
                      }

                    }

                    

                  }else if( $blData->BuyLeadUser->first()->status == "active" && ( $blData->BuyLeadUser->first()->id_user == session()->get('userSession')[0]->id || session()->get('userSession')[0]->role_id == 5 ) ){
                      $linkedType = $blData->BuyLeadUser->first()->linked_for == "1" ? "Request" : "Assign";
                      $btnClass = "btn-info"; $title = $linkedType." Accepted"; $icon = "fa-exclamation-circle";
                  }

                }
                
                if (!in_array($title, $arrStatus)) $arrStatus[] = $title;
               ?>
              <span class="btn btn-sm {{$btnClass}}" data-toggle="tooltip" data-placement="top" title="{{$title}}">
                <i class="fa {{$icon}}"></i>
              </span>
              <span style="display: none;">{{$title}}</span>
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
              <option value="">-</option>
              @foreach($sectionData as $sData)
                <option value="{{$sData->name}}">{{$sData->name}}</option>
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
            <select id="status-bl-list" class="form-control selectpicker" data-live-search="true">
              <option value="">-</option>
              @foreach($arrStatus as $arr)
                <option value="{{$arr}}">{{$arr}}</option>

              @endforeach
              <!-- <option value="Approved">Approved</option>
              <option value="Pending">Pending</option>
              <option value="Available">Available</option>
              <option value="Assigned Accepted">Assigned Accepted</option>
              <option value="Request Accepted">Request Accepted</option>
              <option value="Request Job">Request Job</option>
              <option value="Assigned Job">Assigned Job</option> -->
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