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

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-10">
          <form class="form-horizontal" action="" method="POST">
            <div class="row">
              <div class="form-group">
                <!-- Note dari client untuk user type -->
                <!-- 
                  User type: master, manager buyer, manager sales, staff sales, staff buyer 1-5 (jika 1 sudah diambil tidak bisa di register ulang)
                  Untuk master user, reset harus menghubungi customer service Sprout. Email digunakan untuk reset password dan aktivasi user.
                -->
                <label class="col-md-2 control-label">User Type <small class="text-danger"><strong>(required)</strong></small></label>
                <div class="col-md-10">
                  <select class="form-control">
                    <option value="">Choose user type</option>
                    <option value="master_procurement_manager">Master Procurement Manager</option>
                    <option value="master_sales_manager">Master Sales Manager</option>
                    <option value="procurement_manager">Procurement Manager</option>
                    <option value="procurement_staff">Procurement Staff</option>
                    <option value="sales_manager">Sales Manager</option>
                    <option value="sales_staff">Sales Staff</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-2 control-label">Email <small class="text-danger"><strong>(required)</strong></small></label>
                <div class="col-md-10">
                  <input type="text" class="form-control" placeholder="Email">
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-2 control-label">First Name <small class="text-danger"><strong>(required)</strong></small></label>
                <div class="col-md-10">
                  <input type="text" class="form-control" placeholder="First Name">
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-2 control-label">Last Name <small class="text-danger"><strong>(required)</strong></small></label>
                <div class="col-md-10">
                  <input type="text" class="form-control" placeholder="Last Name">
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-2 control-label">Username <small class="text-danger"><strong>(required)</strong></small></label>
                <div class="col-md-10">
                  <input type="text" class="form-control" placeholder="Username">
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-2 control-label">Job Title <small class="text-danger"><strong>(required)</strong></small></label>
                <div class="col-md-10">
                  <input type="text" class="form-control" placeholder="Job Title">
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-2 control-label">Upload Photo <small class="text-muted"><strong>(optional)</strong></small></label>
                <div class="col-md-10">
                  <input type="file">
                  <p class="help-block">Insert your photo as profile picture</p>
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-2 control-label">Password <small class="text-danger"><strong>(required)</strong></small></label>
                <div class="col-md-10">
                  <input type="password" class="form-control" placeholder="Password">
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-2 control-label">Confirm Password <small class="text-danger"><strong>(required)</strong></small></label>
                <div class="col-md-10">
                  <input type="password" class="form-control" placeholder="Confirm Password">
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-6 col-md-offset-2">
                  <a href="procurement-staff/home.html" class="btn btn-primary">Create User</a>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection