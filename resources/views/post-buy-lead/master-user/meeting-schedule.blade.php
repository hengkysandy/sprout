@extends('layouts.user.app')

@section('content')
  @include('layouts.user.navbar')
  
  <div id="main" class="container-fluid">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <h1 class="main-title no-margin-top no-margin-bottom">Meeting Schedule</h1>
      </div>
      <div class="col-md-12 col-sm-12 col-xs-12">
        <a href="#addMs" data-toggle="modal" class="btn btn-primary margin-top" disabled>Add Meeting Schedule</a>
      </div>
      <div class="col-md-9 col-sm-12 col-xs-12 margin-top">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="box box-primary">
              <div class="table-responsive">
                <table class="table table-middle table-hover table-center">
                  <thead class="bg-white">
                    <tr>
                      <th>Sender</th>
                      <th>Purpose</th>
                      <th>Meeting Date</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Kim Jong Un</td>
                      <td>Promote Our Product (Nuclear)</td>
                      <td>31 Juni 2017</td>
                      <td>Assigned To <span id="">Kevin</span></td>
                    </tr>
                    <tr>
                      <td>Donald Trump</td>
                      <td>Build Wall</td>
                      <td>32 Juni 2017</td>
                      <td>Accepted</td>
                    </tr>
                   <tr>
                      <td>Joko Widodo</td>
                      <td>Promote Our Product</td>
                      <td>33 Juni 2017</td>
                      <td>Not Yet Decided</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="box-footer text-center clearfix">
                <h4>Meeting List</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="box box-primary">
          <div class="row margin-top container-fluid">
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="form-group">
                <label>Search by time</label>
                <input type="text" class="form-control" id="sbt">
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="form-group">
                <label>Choose Role</label>
                <select class="form-control">
                  <option value="">Choose Role</option>
                  <option value="">Procurement Manager</option>
                  <option value="">Procurement Staff</option>
                </select>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="form-group">
                <label>Choose Staff Name</label>
                <select class="form-control">
                  <option value="">Choose Staff Name</option>
                  <option value="">Arifan</option>
                  <option value="">Mahmud</option>
                  <option value="">Zulkifli</option>
                  <option value="">Matias</option>
                  <option value="">Ridho</option>
                  <option value="">Kurniawan</option>
                </select>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="form-group">
                <a href="#" class="btn btn-primary btn-sm">Search</a>
              </div>
            </div>
          </div>
          <div id="calendar"></div>
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
            <a href="meeting-schedule.html" class="btn btn-orange active-orange btn-lg padding-transition no-border-radius">
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

  <div class="modal fade" id="addMs" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Add Meeting Schedule</h4>
        </div>
        <div class="modal-body">
          <form>
            <div class="row">
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>Send To</label>
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>Subject</label>
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>Date</label>
                  <input type="text" id="ac" class="form-control">
                </div>
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>Time</label>
                  <input type="text" id="tc" class="form-control">
                </div>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>Place</label>
                  <textarea rows="7" class="form-control"></textarea>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary add-ms" data-dismiss="modal">Send</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Note: Back-End
  Yang edit saya belum tau gimana kalu di Front-End nya
  -->
  <div class="modal fade" id="editMs" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Edit Meeting Schedule</h4>
        </div>
        <div class="modal-body">
          <form>
            <div class="row">
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>Send To</label>
                  <input type="text" class="form-control" value="Gunawan Fabrikatama">
                </div>
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>Subject</label>
                  <input type="text" class="form-control" value="Delivery Time and Price Negotiation">
                </div>
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>Calendar</label>
                  <input type="text" id="ace" class="form-control" value="Sunday, April 23rd 2017">
                </div>
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>Time</label>
                  <input type="text" id="tce" class="form-control" value="12:30 PM">
                </div>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>Place</label>
                  <textarea rows="7" class="form-control">Air plant tofu 90's austin try-hard prism PBR&amp;B. Waistcoat banjo echo park four loko, irony affogato hashtag selvage viral skateboard chartreuse artisan. Roof party keytar four dollar</textarea>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary edit-ms" data-dismiss="modal">Edit</button>
        </div>
      </div>
    </div>
  </div>

  <div id="mySidenav" class="sidenav hide-on-large-only">
    <div class="menu-content">
      <a href="../home-login.html">
        <i class="fa fa-power-off"></i> Logout
      </a>
      <a href="profile.html">
        <i class="fa fa-gear"></i> Profile
      </a>
      <a href="meeting-schedule.html">
        <i class="fa fa-calendar"></i> Meeting Schedule
      </a>
      <a href="company-database.html">
        <i class="fa fa-building"></i> Company Database
      </a>
      <a href="post-buy-lead.html">
        <i class="fa fa-pencil-square"></i> Post Buy Lead
      </a>
      <a href="home.html">
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

  @include('layouts.user.mobile-menu')

  <script>
    $(document).ready(function() {

      $('#calendar').fullCalendar({
        header: {
          left: 'prev,next today',
          center: 'title',
          right: 'listDay,listWeek,month'
        },
        views: {
          listDay: { buttonText: 'list day' },
          listWeek: { buttonText: 'list week' }
        },
        defaultView: 'listWeek',
        defaultDate: '2017-05-12',
        navLinks: true, // can click day/week names to navigate views
        editable: true,
        eventLimit: true, // allow "more" link when too many events
        events: [
          {
            title: 'All Day Event',
            start: '2017-05-01'
          },
          {
            title: 'Long Event',
            start: '2017-05-07',
            end: '2017-05-10'
          },
          {
            id: 999,
            title: 'Repeating Event',
            start: '2017-05-09T16:00:00'
          },
          {
            id: 999,
            title: 'Repeating Event',
            start: '2017-05-16T16:00:00'
          },
          {
            title: 'Conference',
            start: '2017-05-11',
            end: '2017-05-13'
          },
          {
            title: 'Meeting',
            start: '2017-05-12T10:30:00',
            end: '2017-05-12T12:30:00'
          },
          {
            title: 'Lunch',
            start: '2017-05-12T12:00:00'
          },
          {
            title: 'Meeting',
            start: '2017-05-12T14:30:00'
          },
          {
            title: 'Happy Hour',
            start: '2017-05-12T17:30:00'
          },
          {
            title: 'Dinner',
            start: '2017-05-12T20:00:00'
          },
          {
            title: 'Birthday Party',
            start: '2017-05-13T07:00:00'
          },
          {
            title: 'Click for Google',
            url: 'http://google.com/',
            start: '2017-05-28'
          },
          {
            title: 'Meeting for discuss product and price',
            start: '2017-05-22'
          },
          {
            title: 'Meeting discuss for price',
            start: '2017-05-27'
          },
        ]
      });

    });
  </script>
@endsection
