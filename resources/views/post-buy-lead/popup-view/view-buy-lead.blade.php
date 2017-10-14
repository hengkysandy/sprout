<div class="table-responsive">
            <table id="Tablepbl" class="table table-middle table-bordered table-hover">
              <thead class="bg-white">
                <tr>
                  <th>No</th>
                  <th>Item</th>
                  <th>Amount</th>
                  <th>Total Price</th>
                  <th>Shipping Term</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($buyLeadData as $blKey => $blData)
                <tr>
                  <td>{{++$blKey}}</td>
                  <td>{{$blData->item}}</td>
                  <td>{{$blData->amount}}</td>
                  <td>Rp {{number_format($blData->total_price)}}</td>
                  <td>{{$blData->ShippingTerm()->first()->name}}</td>
                  @if($blData->BuyLeadStatus()->first()->Status()->first()->name == "pending")
                  <td>
                    <span class="btn btn-warning btn-sm" alt="Pending">
                      <i class="fa fa-clock-o"></i>
                    </span>
                    <span style="display: none;"></span>
                  </td>
                  <td>
                    <a href="item/{{$blData->id}}" class="btn btn-default btn-sm">Detail</a>

                    @if(session()->get('userSession')[0]->role_id == 3)
                    <button value="{{$blData->id}}|2" data-target="#confirmRelease" class="btn btn-default btn-sm chooseConfirmation" data-toggle="modal">Release</button>
                    <br><br>
                    @endif
                    
                    <button data-target="#editPbl" data-toggle="modal" class="btn btn-primary btn-sm">Modify</button>
                    <button value="{{$blData->id}}|9" data-target="#confirmRelease" data-toggle="modal" class="btn btn-danger btn-sm chooseConfirmation">Cancel</button>
                  </td>
                  @elseif($blData->BuyLeadStatus()->first()->Status()->first()->name == "rejected")
                    <td>
                      <span class="btn btn-danger btn-sm" alt="rejected">
                        <i class="fa fa-times"></i>
                      </span>
                      <span style="display: none;">Done</span>
                    </td>
                    <td>
                      <a href="item/{{$blData->id}}" class="btn btn-default btn-sm">Detail</a>
                      <a href="#" class="btn btn-default btn-sm" disabled="disabled">Approved</a>
                    </td>
                  @else
                    <td>
                      <span class="btn btn-success btn-sm" alt="Done">
                        <i class="fa fa-check"></i>
                      </span>
                      <span style="display: none;">Done</span>
                    </td>
                    <td>
                      <a href="item/{{$blData->id}}" class="btn btn-default btn-sm">Detail</a>
                      <a href="#" class="btn btn-default btn-sm" disabled="disabled">Approved</a>
                    </td>
                  @endif
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>