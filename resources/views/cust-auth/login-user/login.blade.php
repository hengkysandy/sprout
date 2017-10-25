@extends('layouts.user.app')

@section('content')
  @include('layouts.user.navbar')


  
  <div class="container-fluid">
    <div class="text-center">
      <h2 class="main-title">
        <strong>
          <span class="text-uppercase text-danger">Welcome</span> PT. Citra Tubindo Tbk
        </strong>
      </h2>
    </div>

    <br>

    <form action="doLoginUser" method="POST">
    {{csrf_field()}}
      <div class="row">

        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-12">
          <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control">
          </div>
        </div>

        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-12">
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control">
            <p class="help-block">
              <a href="#forgetPassword" data-toggle="modal">Forget your password?</a>
            </p>
          </div>
        </div>

        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-12">
          <div class="form-group">
          <button type="submit" class="btn btn-primary">Sign In</button>
          </div>
        </div>

      </div>
    </form>
  </div>

  <div class="modal fade" id="forgetPassword" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
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

  <div class="fixed-action-btn-right">
    <a href="logoutCompany" class="btn btn-fab"><i class="fa fa-power-off"></i></a>
  </div>
@endsection