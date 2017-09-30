@extends('layouts.user.app')

@section('content')
@include('layouts.user.navbar')
<div id="main" class="container-fluid">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 ">
      <h1 class="main-title no-margin-top"><strong>Buy Lead - Plate Material</strong></h1>
    </div>
    <div class="col-md-9 col-sm-12 col-xs-12">
      @yield('item-content')
    </div>

    <div class="col-md-3 col-sm-12 col-xs-12 hide-on-med-and-down">
      @include('layouts.navbar-sales.navbar');
    </div>
  </div>
</div>

@yield('item-modal')

<div class="modal fade" id="replyMessage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="MyModalLabel">Reply Messages</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form">
            <textarea rows="6" class="form-control no-resize"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary submit-reply" data-dismiss="modal">Submit</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
<a href="javascript:void(0)" class="hide-on-large-only">
  <div class="menu-btn-container" id="nav-btn-open" onclick="openNav()">
    <div class="menu-btn">
      <i class="fa fa-bars"></i>
    </div>
  </div>
</a>

<div id="mySidenav" class="sidenav hide-on-large-only">
  <div class="menu-content">
    <a href="home.html">
      <i class="fa fa-home"></i> Home
    </a>
    <a href="buy-lead-list.html">
      <i class="fa fa-pencil-square"></i> Buy Lead List
    </a>
    <a href="company-database.html">
      <i class="fa fa-building"></i> Company Database
    </a>
    <a href="meeting-schedule.html">
      <i class="fa fa-calendar"></i> Meeting Schedule
    </a>
    <a href="profile.html">
      <i class="fa fa-gear"></i> Profile
    </a>
    <a href="../home-login.html">
      <i class="fa fa-power-off"></i> Logout
    </a>
    <a href="javascript:void(0)" id="nav-btn-close" onclick="closeNav()"><i class="fa fa-close"></i></a>
  </div>
</div>
@include('layouts.user.mobile-menu')
@endsection