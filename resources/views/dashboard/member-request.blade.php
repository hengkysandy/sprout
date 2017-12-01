@extends('layouts.dashboard.app')

@section('content')
  @include('layouts.dashboard.navbar')

  <div class="container-fluid">
    <h1 class="main-title no-margin-top">New Member Request</h1>
    <div class="row">
      <div class="col-md-2">
        <div class="form-group">
          <label>Search Company ID</label>
          <input type="text" class="form-control" id="findCompanyIDMemberRequest" placeholder="JKT-001">
        </div>
      </div>
      <div class="col-md-2">
        <div class="form-group">
          <label>Search Company Name</label>
          <input type="text" class="form-control" id="findCompanyNameMemberRequest" placeholder="PT Citra Indah">
        </div>
      </div>
    </div>
    <div class="table-responsive">
      <table id="newMemberRequest" class="table table-middle table-bordered table-hover">
        <thead class="bg-white">
          <tr>
            <th>Company ID</th>
            <th>Company Name</th>
            <th>Membership Package</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($newCompany as $ncData)
          <tr>
            <td>{{$ncData->id}}</td>
            <td><a href="{{url('member/'.$ncData->id)}}">{{$ncData->name}}</a></td>
            <td>{{$ncData->name}}</td>
            <td>
              <button type="button" value="{{$ncData->id}}|approve" data-target="#popup" data-toggle="modal" class="btn btn-success btn-sm chooseAction">Approve</button>
              <button type="button" value="{{$ncData->id}}|reject" data-target="#popup" data-toggle="modal" class="btn btn-danger btn-sm chooseAction">Reject</button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

  <div class="modal fade" id="popup" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Are you sure want to ?</h4>
        </div>
        <div class="modal-footer">
          <div id="btn-confirmation"></div>
        </div>
      </div>
    </div>
  </div>

  <script src="{{asset('js/myscript/new-member-request.js')}}"></script>

  @include('layouts.dashboard.menu-mobile')
@endsection
