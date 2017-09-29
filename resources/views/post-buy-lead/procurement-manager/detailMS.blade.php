@extends('layouts.user.app')

@section('content')
  @include('layouts.user.navbar')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Detail Meeting Schedule</h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-9 col-sm-12 col-xs-12">
          <div class="box box-primary">
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-border-table">
                  <tr>
                    <th>Meeting Type</th>
                    <td>:</td>
                    <td>Internal Meeting</td>
                  </tr>
                  <tr>
                    <th>Recipient</th>
                    <td>:</td>
                    <td>Budiman; Chris; Edy; Fabrice; Fendy</td>
                  </tr>
                  <tr>
                    <th>Status</th>
                    <td>:</td>
                    <td>Assigned To <span>Kevin</span></td>
                  </tr>
                  <tr>
                    <th>Subject</th>
                    <td>:</td>
                    <td>Promote Our Product (Nuclear)</td>
                  </tr>
                  <tr>
                    <th>Meeting Date</th>
                    <td>:</td>
                    <td>31 Juni 2017</td>
                  </tr>
                  <tr>
                    <th>Meeting Time</th>
                    <td>:</td>
                    <td>15:00 PM</td>
                  </tr>
                  <tr>
                    <th>Place</th>
                    <td>:</td>
                    <td>Jl Rasunasaid No 53</td>
                  </tr>
                </table>
              </div>
            </div>
            <div class="box-footer">
              <a href="meeting-schedule.html" class="btn btn-default"><i class="fa fa-arrow-left"></i> Back</a>
              <a href="#receipent" data-toggle="modal" class="btn btn-default"><i class="fa fa-group"></i> Receipent Status</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-12 col-xs-12 hide-on-med-and-down">
          <ul class="no-ul-style menu-wrapper">
            <li>
              <a href="home.html" class="btn btn-orange btn-lg padding-transition no-border-radius">
                <i class="pull-left fa fa-home padding-top-2px padding-right-8px"></i> <span>Home</span>
              </a>
            </li>
            <li>
              <a href="post-buy-lead.html" class="btn btn-orange btn-lg padding-transition no-border-radius">
                <i class="pull-left fa fa-pencil-square padding-top-2px padding-right-8px"></i> <span>Post Buy Lead</span>
              </a>
            </li>
            <li>
              <a href="company-database.html" class="btn btn-orange btn-lg padding-transition no-border-radius">
                <i class="pull-left fa fa-building padding-top-2px padding-right-8px"></i> <span>Company Database</span>
              </a>
            </li>
            <li>
              <a href="meeting-schedule.html" class="btn btn-orange btn-lg padding-transition no-border-radius">
                <i class="pull-left fa fa-calendar padding-top-2px padding-right-8px"></i> <span>Meeting Schedule</span>
              </a>
            </li>
            <li>
              <a href="profile.html" class="btn btn-orange btn-lg padding-transition no-border-radius">
                <i class="pull-left fa fa-gear padding-top-2px padding-right-8px"></i> <span>Profile</span>
              </a>
            </li>
            <li>
              <a href="../home-login.html" class="btn btn-orange btn-lg padding-transition no-border-radius">
                <i class="pull-left fa fa-power-off padding-top-2px padding-right-8px"></i> <span>Logout</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <div class="modal fade" id="receipent" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Receipent Status</h4>
          </div>
          <div class="modal-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Name</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Budiman</td>
                  <td>
                    <span class="btn btn-xs btn-success">Attend</span>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Chris</td>
                  <td>
                    <span class="btn btn-xs btn-danger">Not Attend</span>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Edy</td>
                  <td>
                    <span class="btn btn-xs btn-success">Attend</span>
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Fabrice</td>
                  <td>
                    <span class="btn btn-xs btn-success">Attend</span>
                  </td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Fendy</td>
                  <td>
                    <span class="btn btn-xs btn-success">Attend</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
        <a href="post-buy-lead.html">
          <i class="fa fa-pencil-square"></i> Post Buy Lead
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
