<div class="modal fade" id="manageStaff" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Manage Staff</h4>
      </div>
      <div class="modal-body">
        <a href="#addStaff" data-toggle="modal" class="btn btn-primary">Add Staff</a>
        <div class="table-responsive margin-top">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nama Staff</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($user as $key => $value)
              <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->first_name.' '.$value->last_name}}</td>
                <td>
                  <a href="#editStaff" data-toggle="modal" class="btn btn-primary btn-sm">Edit</a>
                  <a href="#deleteStaff" data-toggle="modal" class="btn btn-danger btn-sm">Delete</a>
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