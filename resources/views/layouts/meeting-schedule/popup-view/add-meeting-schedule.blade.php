<div class="modal fade" id="addMs" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <form id="form-add-meeting" action="" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Add Meeting Schedule</h4>
        </div>
        <div class="modal-body">
          @php
            $roleid = Session::get('userSession')[0]->role_id;  
          @endphp
          <form>
            <div class="row">
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>Meeting Type</label>
                  <div>
                    <label class="radio-inline">
                      <input id="internal" type="radio" value="0" name="meeting_type" onchange="meetingTypeChange(1)">Internal Meeting
                    </label>
                    @if($roleid == 3 || $roleid == 5) 
                    <label class="radio-inline">
                      <input id="external" type="radio" value="1" name="meeting_type" onchange="meetingTypeChange(0)">External Meeting
                    </label>
                    @endif
                  </div>
                </div>
              </div>
              @if($roleid == 3 || $roleid == 5)
              <div class="col-md-6 col-sm-12 col-xs-12" id="recipient-div">
                <div class="form-group">
                  <label>Receipent Role</label>
                  <select class="form-control" style="display:block !important" name="recipient" data-live-search="true">
                    <option value="0" selected>Procurement</option>
                    <option value="1">Sales</option>
                  </select>
                </div>
              </div>
              @endif
            </div>
            <div class="row ">
                <div class="col-md-12 col-sm-12 col-xs-12 append-send-to-company">
                    <label>Send To</label>
                    <div class="send-to-company-Ms send-to-company" style="margin-bottom:10px">
                        <select id="send-to-company-1" class="selectpicker" data-live-search="true" name="sendto[]">
                            <option value="0">Select Company</option>
                            @foreach($companyData as $row => $value)
                            <option value="{{$value->id}}">{{$value->name}}</option>
                            @endforeach
                        </select>
                        {{-- <input id="send-to-company-1" type="text" class="form-control inline-input"> --}}
                        <a class="btn btn-danger btn-remove-send-to-company" style="float: right;  visibility: hidden" ><i class="fa fa-minus"></i></a>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 append-send-to-user">
                    <label>Send To</label>
                    <div class="send-to-user-Ms send-to-user" style="margin-bottom:10px">
                        <select id="send-to-user-1" class="selectpicker" data-live-search="true" name="sendtouser[]">
                            <option value="0">Select User</option>
                            @foreach($companyUserList as $row => $value)
                            <option value="{{$value['id']}}">{{$value['first_name']}} {{$value['last_name']}}</option>
                            @endforeach
                        </select>
                        {{-- <input id="send-to-user-1" type="text" class="form-control inline-input"> --}}
                        <a class="btn btn-danger btn-remove-send-to-user" style="float: right;  visibility: hidden" ><i class="fa fa-minus"></i></a>
                    </div>
                </div>
            </div>
              <div class="row">
                  <div class="col-md-6 col-sm-12">
                      <a class="btn btn-default btn-add-send-to-company" >Add More</a>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-6 col-sm-12">
                      <a class="btn btn-default btn-add-send-to-user" >Add More</a>
                  </div>
              </div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>Subject</label>
                  <input type="text" name="subject" class="form-control">
                </div>
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>Date</label>
                  <input type="text" id="ac" class="form-control">
                  <input type="text" id="ac-value" name="date" hidden>
                </div>
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>Time</label>
                  <input type="text" id="tc" class="form-control">
                  <input type="text" id="tc-value" name="time" hidden>
                </div>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>Place</label>
                  <textarea rows="7" name="place" class="form-control"></textarea>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary add-ms">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>