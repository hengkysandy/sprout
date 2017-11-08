<div class="modal fade" id="manageEmployee" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Manage Employee</h4>
      </div>
      <div class="modal-body">
        <a href="#addEmployee" data-toggle="modal" class="btn btn-primary">Add Employee</a>
        <br><br>
        <h4><label class="label label-success">Manager Quota Left: not yet</label> - <label class="label label-warning">Staff Quota Left: not yet</label></h4>
        <div class="table-responsive margin-top">
          <table class="table table-hover table-middle">
            <thead>
              <tr>
                <th>ID</th>
                <th>Position</th>
                <th>Name</th>
                <th>Status</th>
                <th>Head Manager</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($user as $key => $value)
              <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->role_name}}</td>
                <td>{{$value->first_name.' '.$value->last_name}}</td>
                <td>
                  @if($value->status == "Active")
                  <label class="btn btn-success btn-sm">
                    <i class="fa fa-check"></i>
                  </label>
                  @else
                  <label class="btn btn-danger btn-sm">
                    <i class="fa fa-close"></i>
                  </label>
                  @endif
                </td>
                <td>
                  @if($value->is_head == "0")
                  <a href="{{url('doSetUserHeadStatus?id_user='.$value->id.'&status=1')}}" class="btn btn-primary btn-sm">Set as head</a>
                  @else
                  <a href="{{url('doSetUserHeadStatus?id_user='.$value->id.'&status=0')}}" class="btn btn-warning btn-sm">Cancel as head</a>
                  @endif
                </td>
                <td>
                <a href="#editEmployee" data-value="" data-toggle="modal" class="btn btn-primary btn-sm">Edit</a>
                  <a href="{{url('doDeleteUser?id='.$value->id)}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure want to delete this?');">Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>