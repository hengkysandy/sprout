@extends('layouts.user.app')

@section('content')
  @include('layouts.user.navbar-register')

  <div class="container-fluid">
    <h1 class="main-title no-margin-top text-uppercase">
      <strong>Register Master User</strong>
    </h1>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8 col-sm-12 col-xs-12">
          <form action="doRegis3" method="post" class="form-horizontal margin-top" enctype="multipart/form-data">
          {{csrf_field()}}
            <div class="row">
              <div class="form-group">
                <!-- Note dari client untuk user type -->
                <!--
                  User type: master, manager buyer, manager sales, staff sales, staff buyer 1-5 (jika 1 sudah diambil tidak bisa di register ulang)
                  Untuk master user, reset harus menghubungi customer service Sprout. Email digunakan untuk reset password dan aktivasi user.
                -->
                <label class="col-md-2 col-sm-12 col-xs-12 control-label">User Type <small class="text-danger"><strong>(required)</strong></small></label>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <select class="form-control" name="userRoleId">
                    <option value="2">Master User</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-2 col-sm-12 col-xs-12 control-label">Email <small class="text-danger"><strong>(required)</strong></small></label>
                <div class="col-md-10 col-sm-12 col-xs-12">
                  <input type="text" name="email" class="form-control" placeholder="Email">
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-2 col-sm-12 col-xs-12 control-label">First Name <small class="text-danger"><strong>(required)</strong></small></label>
                <div class="col-md-10 col-sm-12 col-xs-12">
                  <input type="text" name="firstName" class="form-control" placeholder="First Name">
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-2 col-sm-12 col-xs-12 control-label">Last Name <small class="text-danger"><strong>(required)</strong></small></label>
                <div class="col-md-10 col-sm-12 col-xs-12">
                  <input type="text" name="lastName" class="form-control" placeholder="Last Name">
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-2 col-sm-12 col-xs-12 control-label">Username <small class="text-danger"><strong>(required)</strong></small></label>
                <div class="col-md-10 col-sm-12 col-xs-12">
                  <input type="text" name="username" class="form-control" placeholder="Username">
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-2 col-sm-12 col-xs-12 control-label">Job Title <small class="text-danger"><strong>(required)</strong></small></label>
                <div class="col-md-10 col-sm-12 col-xs-12">
                  <input type="text" name="jobTitle" class="form-control" placeholder="Job Title">
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-2 col-sm-12 col-xs-12 control-label">Upload Photo <small class="text-muted"><strong>(optional)</strong></small></label>
                <div class="col-md-10 col-sm-12 col-xs-12">
                  <img src="{{asset('images/avatar.jpg')}}" alt="Avatar" width="150" height="150">
                  <input type="file" name="photoImage">
                  <p class="help-block">Insert your photo as profile picture</p>
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-2 col-sm-12 col-xs-12 control-label">New Password <small class="text-danger"><strong>(required)</strong></small></label>
                <div class="col-md-10 col-sm-12 col-xs-12">
                  <input type="password" name="password" class="form-control" placeholder="New Password">
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-2 col-sm-12 col-xs-12 control-label">Re-Password <small class="text-danger"><strong>(required)</strong></small></label>
                <div class="col-md-10 col-sm-12 col-xs-12">
                  <input type="password" name="confPassword" class="form-control" placeholder="Re-Password">
                </div>
              </div>

              <div class="form-group">

                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="pull-left">
                    <a href="register-2.html" class="btn-arrow">
                      <i class="fa fa-arrow-circle-left"></i>
                    </a>
                  </div>

                  <div class="pull-right">
                  <button type="submit" style="background-color: #f9f9f9; border:none">
                    <a href="register-success.html" class="btn-arrow saveDataCompanyRegis3">
                      <i class="fa fa-arrow-circle-right"></i>
                    </a>
                  </button>
                  </div>

                </div>

              </div>

            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
@endsection