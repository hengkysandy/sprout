@extends('layouts.dashboard.app')

@section('content')
  @include('layouts.dashboard.navbar')

  <div class="container-fluid">
    <h1 class="main-title no-margin-top">Shipping Term</h1>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12 margin-bottom">
        <a href="#addShippingTerm" data-toggle="modal" class="btn btn-primary">Add Shipping Term</a>
      </div>
      <div class="col-md-2 col-sm-12 col-xs-12">
        <div class="form-group">
          <label>Search Shipping Term</label>
          <input type="text" id="findShipping" class="form-control">
        </div>
      </div>
      <div class="col-md-2 col-sm-12 col-xs-12">
        <div class="form-group">
          <label>Search Description</label>
          <input type="text" id="findShippingDesc" class="form-control">
        </div>
      </div>
      <div class="col-md-12 col-sm-12 col-xs-12 margin-bottom">
        <div class="table-responsive">
          <table id="shippingTerm" class="table table-middle table-hover table-bordered">
            <thead>
              <tr class="bg-white">
                <th>Shipping Term</th>
                <th>Description</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($shippingTermData as $sData)
              <tr>
                <td>{{$sData->name}}</td>
                <td>{{$sData->description}}</td>
                <td>
                  <button value="{{$sData->id}}" data-target="#editShippingTerm" data-toggle="modal" class="btn btn-primary btn-sm chooseEdit">Edit</button>
                  <button value="{{$sData->id}}" data-target="#deleteShippingTerm" data-toggle="modal" class="btn btn-danger btn-sm chooseDelete">Delete</button>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div id="addShippingTerm" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Add Shipping Term</h4>
        </div>
        <form action="{{url('doInsertShippingTerm')}}" method="post">
        {{csrf_field()}}
        <div class="modal-body">
            <div class="form-group">
              <label>Shipping Term</label>
              <input type="text" name="name" class="form-control" required="">
            </div>
            <div class="form-group">
              <label>Description</label>
              <textarea type="text" name="description" class="form-control no-resize" rows="6" required=""></textarea>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary add-shipping-term">Add</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <div id="editShippingTerm" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Edit Shipping Term</h4>
        </div>
        <form id="inputForm" method="post">
        {{csrf_field()}}
          <div class="modal-body">
              <div class="form-group">
                <label>Shipping Term</label>
                <input type="text" required="" id="title" name="name" class="form-control">
              </div>
              <div class="form-group">
                <label>Description</label>
                <textarea type="text" required="" id="description" name="description" class="form-control no-resize" rows="6"></textarea>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary edit-shipping-term">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div id="deleteShippingTerm" class="modal fade" tabindex="-1" role="dialog">
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

  <script type="text/javascript" src="js/myscript/shipping-term.js"></script>
  @include('layouts.dashboard.menu-mobile')
@endsection
