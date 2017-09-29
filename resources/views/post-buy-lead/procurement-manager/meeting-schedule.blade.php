@extends('layouts.user.app')

@section('content')
  @include('layouts.user.navbar')

    <div id="main" class="container-fluid">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <h1 class="main-title no-margin-top no-margin-bottom">Meeting Schedule</h1>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
          <a href="#addMs" data-toggle="modal" class="btn btn-primary margin-top">Add Meeting Schedule</a>
        </div>
        <div class="col-md-9 col-sm-12 col-xs-12 margin-top">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="box box-primary">
                <div class="table-responsive">
                  <table class="table table-middle table-hover table-center">
                    <thead class="bg-white">
                      <tr>
                        <th>Recipient</th>
                        <th>Subject</th>
                        <th>Meeting Date</th>
                        <th>Meeting Time</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Kim Jong Un</td>
                        <td>Promote Our Product (Nuclear)</td>
                        <td>31 Juni 2017</td>
                        <td>15:00 PM</td>
                        <td>Assigned To <span id="">Kevin</span></td>
                        <td>
                          <a href="detailMS.html" class="btn btn-sm btn-default">Detail</a>
                          <a href="#assignTo" data-toggle="modal" class="btn btn-sm btn-primary">Assign To</a>
                        </td>
                      </tr>
                      <tr>
                        <td>Donald Trump</td>
                        <td>Build Wall</td>
                        <td>32 Juni 2017</td>
                        <td>15:00 PM</td>
                        <td>Rejected</td>
                        <td>
                          <a href="detailMS.html" class="btn btn-sm btn-default">Detail</a>
                          <a href="#assignTo" data-toggle="modal" class="btn btn-sm btn-primary">Assign To</a>
                        </td>
                      </tr>
                     <tr>
                        <td>Joko Widodo</td>
                        <td>Promote Our Product</td>
                        <td>33 Juni 2017</td>
                        <td>18:00 PM</td>
                        <td>Pending</td>
                        <td>
                          <button class="btn btn-sm btn-primary" data-target="#acceptMeeting" data-toggle="modal">Accept</button>
                          <a href="#rejectMeeting" data-toggle="modal" class="btn btn-sm btn-danger">Reject</a>
                        </td>
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
                  <label>Search by buy lead</label>
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12">
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

    <!-- Add Meeting Schedule -->
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
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Meeting Type</label>
                    <div>
                      <label class="radio-inline">
                        <input id="internal" type="radio" name="meeting-type">Internal Meeting
                      </label>
                      <label class="radio-inline">
                        <input id="external" type="radio" name="meeting-type">External Meeting
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row ">
                <div class="col-md-12 col-sm-12 col-xs-12 append-send-to">
                  <label>Send To</label>
                  <div class="send-to-div send-to" >
                    <input id="send-to-1" type="text" class="form-control inline-input">
                    <a class="btn btn-danger btn-remove-send-to" ><i class="fa fa-minus"></i></a>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 col-sm-12">
                  <a class="btn btn-default btn-add-send-to" >Add More</a>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Receipent Role</label>
                    <select class="form-control" style="display:block !important" data-live-search="true">
                      <option value="" selected>Procurement</option>
                      <option value="">Sales</option>
                    </select>
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
            <button type="button" class="btn btn-primary add-ms" data-dismiss="modal">Submit</button>
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
            <button type="button" class="btn btn-primary edit-ms" data-dismiss="modal">Save</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Assign To -->
    <div class="modal fade" id="assignTo" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Assign To</h4>
          </div>
          <div class="modal-body">
            <form action="">
              <div class="row">
                <div class="col-md-12">
                  <div class="form form-group">
                    <label class="col-md-12">Assign To</label>
                      <div class="assign-row">
                        <div class="assignMeeting margin-bottom-10 col-md-10">
                          <select id="assign-to-1" class="form-control selectpicker" style="display:block !important" data-live-search="true">
                            <option value="" selected>-</option>
                            <option value="">Messi</option>
                            <option value="">Ronaldo</option>
                            <option value="">Higuain</option>
                            <option value="">Aguero</option>
                            <option value="">Costa</option>
                            <option value="">Sanchez</option>
                          </select>
                        </div>
                        <a class="btn btn-danger btn-remove-assign col-md-1 col-sm-1 col-xs-1" ><i class="fa fa-close"></i></a>
                      </div>
                      <div class="duplicate-assign"></div>
                    <div class="col-md-12"><a class="btn btn-default btn-add-assign">Add More</a></div>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal">Assign</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Accept Meeting -->
    <div class="modal fade" id="acceptMeeting" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Are you sure want to accept this meeting?</h4>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary acc-meeting" data-dismiss="modal">Accept</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Reject Meeting -->
    <div class="modal fade" id="rejectMeeting" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Are you sure want to reject this meeting?</h4>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Reject</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Detail Meeting Schedule -->
    <div class="modal fade" id="detailSchedule" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Detail Meeting Schedule</h4>
          </div>
          <div class="modal-body">
            <table class="table table-middle table-hover table-center">
              <thead class="bg-white">
                <tr>
                  <th>Recipient</th>
                  <th>Status</th>
                  <th>Subject</th>
                  <th>Meeting Date</th>
                  <th>Meeting Time</th>
                  <th>Place</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Kim Jong Un</td>
                  <td>Accept</td>
                  <td>Promote Our Product (Nuclear)</td>
                  <td>31 Juni 2017</td>
                  <td>15:00 PM</td>
                  <td>Jl Rasunasaid No 53</td>
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

  <script type="text/javascript">
    $(document).ready(function() {

      $('#calendar').fullCalendar({
        header: {
          left: 'prev,next today',
          center: 'title',
          right: 'month,agendaWeek,agendaDay,listWeek'
        },
        defaultDate: '2017-05-12',
        navLinks: true, // can click day/week names to navigate views
        editable: true,
        eventLimit: true, // allow "more" link when too many events
        events: [
          {
            title: 'Meeting Internal',
            url: 'detailMS.html',
            start: '2017-05-01'
          },
          {
            title: 'Demo untuk penjualan',
            url: 'detailMS.html',
            start: '2017-05-07',
            end: '2017-05-10'
          },
          {
            id: 999,
            title: 'Pembahasan Penjualan',
            url: 'detailMS.html',
            start: '2017-05-09T16:00:00'
          },
          {
            id: 999,
            title: 'Pembahasan Penjualan',
            url: 'detailMS.html',
            start: '2017-05-16T16:00:00'
          },
          {
            title: 'Birthday Company',
            url: 'detailMS.html',
            start: '2017-05-11',
            end: '2017-05-13'
          },
          {
            title: 'Meeting Director Company A',
            url: 'detailMS.html',
            start: '2017-05-12T10:30:00',
            end: '2017-05-12T12:30:00'
          },
          {
            title: 'Lunch All Employee',
            url: 'detailMS.html',
            start: '2017-05-12T12:00:00'
          },
          {
            title: 'Lunch Company B',
            url: 'detailMS.html',
            start: '2017-05-12T14:30:00'
          },
          {
            title: 'Happy Hour',
            url: 'detailMS.html',
            start: '2017-05-12T17:30:00'
          },
          {
            title: 'Dinner All Manager',
            url: 'detailMS.html',
            start: '2017-05-12T20:00:00'
          },
          {
            title: 'Pembicaraan Harga Pupuk',
            url: 'detailMS.html',
            start: '2017-05-13T07:00:00'
          },
          {
            title: 'Pembelian Pupuk',
            url: 'detailMS.html',
            start: '2017-05-28'
          }
        ]
      });

    });
  </script>
@endsection
