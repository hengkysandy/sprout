<div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 margin-top">
              <div class="table-responsive">
                <table id="unitPbl" class="table table-middle table-bordered table-hover">
                  <thead class="bg-white">
                    <tr>
                      <th>No</th>
                      <th>Unit</th>
                      <th>Description</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($unitData as $uKey => $uData)
                    <tr>
                      <td>{{++$uKey}}</td>
                      <td>{{$uData->name}}</td>
                      <td>{{$uData->description}}</td>
                      <td>
                        <button value="{{$uData->id}}" data-target="#editUw"  data-toggle="modal" class="btn btn-primary btn-sm chooseEditUnit">Edit</button>
                        <button value="{{$uData->id}}" data-target="#deleteUw"  data-toggle="modal" class="btn btn-danger btn-sm chooseDeleteUnit">Delete</button>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>