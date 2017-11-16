@extends('layouts.user.app')

@section('content')
  @include('layouts.user.navbar-register')
  
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-9 col-sm-12 col-xs-12 padding margin-top">
        <div class="banner-slick" data-slick='{"slidesToShow": 1, "slidesToScroll": 1}'>
          <div class="slick">
            <img src="images/dummy-img.png" width="100%">
          </div>
          <div class="slick">
            <img src="images/dummy-img.png" width="100%">
          </div>
          <div class="slick">
            <img src="images/dummy-img.png" width="100%">
          </div>
          <div class="slick">
            <img src="images/dummy-img.png" width="100%">
          </div>
        </div>
      </div>

      <div class="col-md-3 col-sm-12 col-xs-12 long-margin-top">
        <div class="row">
          <form action="{{url('doLoginCompany')}}" method="post">
          {{csrf_field()}}
            <div class="col-md-12 col-xs-12">
              <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control">
              </div>
            </div>
            <div class="col-md-12 col-xs-12">
              <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
              </div>
            </div>
            <div class="col-md-12 col-xs-12">
              <div class="form-group">
                <button class="btn btn-orange" type="submit">
                  <i class="fa fa-sign-in"></i> Sign In
                </button>
              </div>
            </div>
            <div class="col-md-12 col-xs-12">
              <div class="form-group">
                <p><strong><em>Forget your credentials?</em></strong></p>
                <p><strong><em>Please contact us at +62 816627 7562</em></strong></p>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  @include('layouts.user.menu-mobile')
@endsection