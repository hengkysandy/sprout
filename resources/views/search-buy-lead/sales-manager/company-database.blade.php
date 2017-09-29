@extends('layouts.user.app')

@section('content')
  @include('layouts.user.navbar')
    <div id="main" class="container-fluid">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <h1 class="main-title no-margin-top">Company Database</h1>
        </div>
        <div class="col-md-9 col-sm-12 col-xs-12">
          <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-12">
              <div class="form-group">
                <label>Search</label>
                <input type="text" id="findCmpDb" class="form-control">
              </div>
            </div>
          </div>
          <div class="table-responsive">
            <table id="cmpDb" class="table table-bordered table-hover table-middle">
              <thead class="bg-white">
                <tr>
                  <th>Buyer Name</th>
                  <th>Business Category</th>
                  <th>Location</th>
                  <th>Frequent Buyer</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Argomas Internusa</td>
                  <td>Agriculture, forestry and fishing</td>
                  <td>Jakarta</td>
                  <td><span class="favourite favourite-true"><i class="fa fa-star yellow-icon"></i></span></td>
                </tr>
                <tr>
                  <td>Fresh Fish Indonesia</td>
                  <td>Agriculture, forestry and fishing</td>
                  <td>Banten</td>
                  <td><span class="favourite favourite-true"><i class="fa fa-star yellow-icon"></i></span></td>
                </tr>
                <tr>
                  <td>Malindo Sentosa</td>
                  <td>Agriculture, forestry and fishing</td>
                  <td>Jawa Tengah</td>
                  <td><span class="favourite favourite-false"><i class="fa fa-star-o"></i></span></td>
                </tr>
                <tr>
                  <td>Peronda Jaya</td>
                  <td>Agriculture, forestry and fishing</td>
                  <td>Sumatra Utara</td>
                  <td><span class="favourite favourite-false"><i class="fa fa-star-o"></i></span></td>
                </tr>
                <tr>
                  <td>Peronda Jaya</td>
                  <td>Agriculture, forestry and fishing</td>
                  <td>Sumatra Utara</td>
                  <td><span class="favourite favourite-false"><i class="fa fa-star-o"></i></span></td>
                </tr>
                <tr>
                  <td>Peronda Jaya</td>
                  <td>Agriculture, forestry and fishing</td>
                  <td>Sumatra Utara</td>
                  <td><span class="favourite favourite-false"><i class="fa fa-star-o"></i></span></td>
                </tr>
                <tr>
                  <td>Peronda Jaya</td>
                  <td>Agriculture, forestry and fishing</td>
                  <td>Sumatra Utara</td>
                  <td><span class="favourite favourite-false"><i class="fa fa-star-o"></i></span></td>
                </tr>
                <tr>
                  <td>Peronda Jaya</td>
                  <td>Agriculture, forestry and fishing</td>
                  <td>Sumatra Utara</td>
                  <td><span class="favourite favourite-false"><i class="fa fa-star-o"></i></span></td>
                </tr>
                <tr>
                  <td>Peronda Jaya</td>
                  <td>Agriculture, forestry and fishing</td>
                  <td>Sumatra Utara</td>
                  <td><span class="favourite favourite-false"><i class="fa fa-star-o"></i></span></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-12">
              <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Filter By Section</label>
                    <select class="form-control selectpicker" data-live-search="true">
                      <option value="">Africulture, foresty, and fishing</option>
                      <option value="1" selected="">Mining and quarrying</option>
                      <option value="2">Manufacturing</option>
                      <option value="3">Electricity, gas, steam, and air conditioner supply</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Filter By Division</label>
                    <select class="form-control selectpicker" data-live-search="true">
                      <option value="">Crop and animal production, hunting and related service activities</option>
                      <option value="1" selected="">Manufacture of food products</option>
                      <option value="2">Forestry and logging</option>
                      <option value="3">Fishing and aquaculture</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> Filter company by frequent buyer
                    </label>
                  </div>
                </div>
                <!--<div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> Filter company only for blacklist vendor
                    </label>
                  </div>
                </div>-->
              </div>
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
              <a href="buy-lead-list.html" class="btn btn-orange btn-lg padding-transition no-border-radius">
                <i class="pull-left fa fa-pencil-square padding-top-2px padding-right-8px"></i> <span>Buy Lead List</span>
              </a>
            </li>
            <li>
              <a href="company-database.html" class="btn btn-orange btn-lg active-orange padding-transition no-border-radius">
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
