<!-- Broadcsat to company -->
    <div class="modal fade" id="broadcast" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Broadcast Company</h4>
          </div>
          <form method="post" action="{{url('doAssignCompanyBuyLead')}}">
            {{csrf_field()}}
          <div class="modal-body">
            <table id="tableBroadcast" class="table table-bordered">
              <thead>
                <tr>
                  <th>No</th>
                  <th>ID</th>
                  <th>Company Name</th>
                  <th>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Select all
                      </label>
                    </div>
                  </th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach($anotherCompany as $acKey => $acData)
                  @if(empty($acData->CompanyStatusFor()->first()))
                    <tr>
                      <td>{{++$acKey}}</td>
                      <td>{{$acData->id}}</td>
                      <td>{{$acData->name}}</td>
                      <td>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"  name="listOfCompanyId[]" value="{{$acData->id}}">
                          </label>
                        </div>
                      </td>
                    </tr>
                  @endif
                @endforeach
              </tbody>
            </table>
            <div class="checkbox">
              <label>
                <input type="checkbox"> Approved Vendor Only
              </label>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submitt" class="btn btn-primary">Add</button>
          </div>
          </form>
        </div>
      </div>
    </div>