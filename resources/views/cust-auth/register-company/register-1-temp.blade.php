@extends('layouts.user.app')

@section('content')
  @include('layouts.user.navbar-register')
  <form action="regis_2" method="post" enctype="multipart/form-data">
  {{csrf_field()}}
  <div class="container-fluid">
    <h1 class="main-title no-margin-top text-uppercase">
      <strong>Register your company profile</strong>
    </h1>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8 col-sm-12">
          <form class="form-horizontal">

            <div class="form-group">
              <div class="row">

                <label class="col-md-3 col-sm-3 control-label">Company Name <small class="text-danger">(required)</small></label>

                <div class="col-md-9 col-sm-9">
                  <input type="text" class="form-control" placeholder="Company Name" name="companyName" required>
                </div>

              </div>
            </div>

            <div class="form-group">
              <div class="row">

                <label class="col-md-3 col-sm-3 control-label">Business Entity <small class="text-danger">(required)</small></label>

                <div class="col-md-9 col-sm-9">
                  <input type="text" class="form-control" placeholder="Business Entity" name="businessEntity" required>
                </div>

              </div>
            </div>

            <div class="form-group">
              <div class="row">

                <label class="col-md-3 col-sm-3 control-label">Company Tagline <small>(optional)</small></label>

                <div class="col-md-9 col-sm-9">
                  <input type="text" class="form-control" placeholder="Company Tagline" name="companyTagline" required="">
                </div>

              </div>
            </div>

            <div class="form-group">
              <div class="row">

                <label class="col-md-3 col-sm-3 control-label">Company Logo <small>(optional)</small></label>

                <div class="col-md-9 col-sm-9">
                  <input type="file" name="companyLogoImg" required="">
                  <p class="help-block hide-on-med-and-down">Insert your logo company (.png or .svg, size)</p>
                </div>

              </div>
            </div>

            <div class="form-group">
              <div class="row">

                <label class="col-md-3 col-sm-3 control-label">Company Email <small class="text-danger">(required)</small></label>

                <div class="col-md-9 col-sm-9">
                  <input type="email" class="form-control" placeholder="Company Email" name="email" required="">
                </div>

              </div>
            </div>

            <div class="form-group">
              <div class="row">

                <label class="col-md-3 col-sm-3 col-xs-12 control-label">Address <small class="text-danger">(required)</small></label>

                <div class="col-md-9 col-sm-9 col-xs-12">
                  <textarea rows="6" class="form-control no-resize" placeholder="Address" id="address" name="address" required=""></textarea>
                </div>

              </div>
            </div>

            <div class="form-group">
              <div class="row">

                <label class="col-md-3 col-sm-3 col-xs-12 control-label">City <small class="text-danger">(required)</small></label>

                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control margin-bottom-register" name="city" required="">
                </div>

              </div>
            </div>

            <div class="form-group">
              <div class="row">

                <label class="col-md-3 col-sm-3 col-xs-12 control-label">Province <small class="text-danger">(required)</small></label>

                <div class="col-md-9 col-sm-9 col-xs-12">
                  <select class="form-control selectpicker margin-top-register" data-live-search="true" id="province" name="province">
                    <option value="0">Choose Province</option>
                    @foreach($provinceData as $provData)
                      <option value="{{$provData->id}}">{{$provData->name}}</option>
                    @endforeach
                  </select>
                </div>

              </div>
            </div>

            <div class="form-group">
              <div class="row">

                <label class="col-md-3 col-sm-3 col-xs-12 control-label">Phone Number <small class="text-danger">(required)</small></label>

                <div class="col-md-2 col-sm-2 col-xs-3">
                  <input type="text" id="numericWithPlusChar" class="form-control" placeholder="+62" name="phoneCode" required="">
                </div>

                <div class="col-md-7 col-sm-7 col-xs-9">
                  <input type="text" id="numeric" class="form-control" placeholder="809 073 295" name="phoneNumber" required="">
                </div>

              </div>
            </div>

            <div class="wrapperMainProduct">
              <div id="removeMainProduct" class="form-group">
                <div class="row">

                  <label class="col-md-3 col-sm-3 col-xs-12 control-label">Main Product <small class="text-danger">(required)</small></label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <input type="text" class="form-control" placeholder="Main Product" name="mainProduct" required="">
                  </div>

                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">

                <div class="col-md-9 col-md-offset-3 col-sm-9 col-sm-offset-3 col-xs-12">
                  <button id="addMainProduct" class="btn btn-primary">Add another main product</button>
                </div>

              </div>
            </div>

            <div class="form-group">
              <div class="row">

                <label class="col-md-3 col-sm-3 col-xs-12 control-label">Package <small class="text-danger">(required)</small></label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <select class="form-control" id="package" name="package">
                    <option value="0">Select your package</option>
                    @foreach($packageData as $packData)
                      <option value="{{$packData->id}}">{{$packData->name}}</option>
                    @endforeach
                  </select>
                </div>

              </div>
            </div>

            <div class="form-group">
              <div class="row">

                <label class="col-md-3 col-sm-3 col-xs-12 control-label">Password <small class="text-danger">(required)</small></label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="password" class="form-control" name="password" required="">
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">

                <label class="col-md-3 col-sm-3 col-xs-12 control-label">Re-Password <small class="text-danger">(required)</small></label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="password" class="form-control" name="confPass" required="">
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">

                <label class="col-md-3 col-sm-3 col-xs-12 control-label">Interested Program <small class="text-danger">(required)</small></label>
                <div class="col-md-2 col-sm-2 col-xs-3">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="interestProgram[]" value="1"> Selling
                    </label>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="interestProgram[]" value="2"> Buying
                    </label>
                  </div>
                </div>

              </div>
            </div>

            <div class="form-group">
              <div class="row">

                <div class="col-md-12 col-sm-12">
                  <div class="pull-left">
                    <a href="{{url('/')}}" class="btn-arrow">
                      <i class="fa fa-arrow-circle-left"></i>
                    </a>
                  </div>

                  <div class="pull-right">
                    <button type="submit" style="background-color: #f9f9f9; border:none">
                      <a class="btn-arrow saveDataCompanyRegis1">
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
  </form>
@endsection
