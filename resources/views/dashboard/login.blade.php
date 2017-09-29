@extends('layouts.dashboard.app')

@section('content')
  <div class="container-fluid">
    <div class="db-logo">
      <img src="images/logo.png" alt="Sprout" class="img-responsive">
      <div class="panel panel-default panel-hover">
        <div class="panel-body">
          <form action="doLoginAdmin" method="post">
          {{csrf_field()}}
            <div class="form-group">
              <label>Username</label>
              <input type="text" name="name" class="form-control" placeholder="Username">
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
              <a href="#forgetPassword" data-toggle="modal">Forget Password?</a>
            </div>
            <div class="form-group">
              <a class="btn btn-orange" onclick="$(this).closest('form').submit()"><i class="fa fa-sign-in"></i>Sign In</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="forgetPassword" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Reset Password</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="recipient-name" class="control-label">Email:</label>
            <input type="text" class="form-control">
            <p class="help-block"><small class="text-danger">Make sure your email are registered match</small></p>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Send</button>
        </div>
      </div>
    </div>
  </div>


@endsection