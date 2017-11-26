@extends('layouts.user.app')

@section('content')
  @include('layouts.user.navbar-used')

  <div class="container-fluid">
    <br><br><br>
    <div class="row">
      <div class="col-md-12">
        <h1>
          <strong>Congratulations!</strong>
        </h1>
        <br><br><br>
        <h2>
          <span class="text-danger"><strong>Welcome</strong></span> to the Biggest E-Marketplace in the world
        </h2>
        <div class="row">
          <div class="col-md-6">
            <h4>
              <strong>
                Your appliation has been submitted to our system. Our customer service will contact you within 24 hours after your registration.
              </strong>
            </h4>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Just keep this script only this page
    // var delay = 2000;
    // setTimeout(function(){ window.location = 'home-login.html'; }, delay);
  </script>
@endsection
