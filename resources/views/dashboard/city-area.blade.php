@extends('layouts.dashboard.app')

@section('content')
  @include('layouts.dashboard.navbar')

  <div class="container-fluid">
    <h1 class="main-title no-margin-top">Area</h1>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12 margin-bottom">
        <a href="#addA" data-toggle="modal" class="btn btn-primary">Add Area</a>
      </div>
      <div class="col-md-6 col-sm-12 col-xs-12 margin-bottom">
        <div class="table-responsive">
          <table id="area" class="table table-hover table-bordered">
            <thead class="bg-white">
              <tr>
                <th>Area</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach($areaData as $aData)
              <tr>
                <td>{{$aData->name}}</td>
                <td>
                  <button value="{{$aData->id}}" data-target="#editA" data-toggle="modal" class="btn btn-primary btn-sm chooseEdit">Edit</button>
                  <button value="{{$aData->id}}" data-target="#deleteA" data-toggle="modal" class="btn btn-danger btn-sm chooseDelete">Delete</button>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div id="addP" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Add City</h4>
        </div>
        <div class="modal-body">
          <form>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>City</label>
                  <input type="text" class="form-control">
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary add-c" data-dismiss="modal">Add</button>
        </div>
      </div>
    </div>
  </div>

  <div id="editP" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Edit City</h4>
        </div>
        <div class="modal-body">
          <form>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>City</label>
                  <input type="text" class="form-control" value="Jakarta">
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary edit-c" data-dismiss="modal">Save</button>
        </div>
      </div>
    </div>
  </div>

  <div id="deleteP" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Are you sure want to delete this?</h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-danger delete-c" data-dismiss="modal">Delete</button>
        </div>
      </div>
    </div>
  </div>

  <div id="addA" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Add Area</h4>
        </div>
        <form action="{{url('doInsertArea')}}" method="post">
        {{csrf_field()}}
        <div class="modal-body">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>Area</label>
                  <input type="text" name="name" class="form-control">
                </div>
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary add-a">Add</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <div id="editA" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Edit Area</h4>
        </div>
        <form id="inputForm" method="post">
        {{csrf_field()}}
        <div class="modal-body">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>Area</label>
                  <input type="text" class="form-control" name="name" id="name">
                </div>
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary edit-a">Submit</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <div id="deleteA" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Are you sure want to delete this?</h4>
        </div>
        <div class="modal-footer">
          
          <div id="btn-confirmation"></div>
        </div>
      </div>
    </div>
  </div>

  <script src="js/myscript/area.js"></script>

  @include('layouts.dashboard.menu-mobile')
@endsection
