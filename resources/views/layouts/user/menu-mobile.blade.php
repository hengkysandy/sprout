<div id="mySidenav" class="sidenav hide-on-large-only">
  <div class="menu-content">  
    <a href="{{url('logoutUser')}}">
      <i class="fa fa-power-off"></i> Logout
    </a>
    <a href="{{url('profile')}}">
      <i class="fa fa-gear"></i> Profile
    </a>
    <a href="{{url('meeting-schedule')}}">
      <i class="fa fa-calendar"></i> Meeting Schedule
    </a>
    <a href="{{url('company-database')}}">
      <i class="fa fa-building"></i> Company Database
    </a>
    <a href="{{url('post-buy-lead')}}">
      <i class="fa fa-pencil-square"></i> Post Buy Lead
    </a>
    <a href="{{url('home')}}">
      <i class="fa fa-home"></i> Home
    </a>
    <a href="javascript:void(0)" id="nav-btn-close" onclick="closeNav()"><i class="fa fa-close"></i></a>
  </div>

  <a href="javascript:void(0)">
    <div class="menu-btn-container" id="nav-btn-open" onclick="openNav()">
      <div class="menu-btn">
        <i class="fa fa-bars"></i>
      </div>
    </div>
  </a>
</div>