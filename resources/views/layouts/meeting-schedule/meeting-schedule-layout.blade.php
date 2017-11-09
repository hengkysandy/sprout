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
            <ul class="nav nav-tabs nav-justified" role="tablist">
              <li role="presentation" class="active"><a href="#send" aria-controls="send" role="tab" data-toggle="tab">Send Meeting Request</a></li>
              <li role="presentation"><a href="#receive" aria-controls="receive" role="tab" data-toggle="tab">Receive Meeting Request</a></li>
            </ul>
            <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="send">
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
                  @foreach($companyMeetingData as $key => $value) 
                  <tr value="{{$value->id}}">
                    <td>
                      @php
                        $length= sizeof($value->recipient);
                      @endphp
                      @if($length<=2)
                        @for($i=0; $i<=$length-1; $i++)
                          {{$value->recipient[$i]}}
                        @if($i<$length-1)
                          {{','}}
                        @endif
                      @endfor
                      @else
                        @for($i=0; $i<=1; $i++)
                          {{$value->recipient[$i].','}}
                        @endfor
                        {{'etc'}}
                      @endif
                    </td>
                    <td>{{$value->subject}}</td>
                    <td>{{date('d F Y', strtotime($value->date))}}</td>
                    <td>{{date('H:i A', strtotime($value->time))}}</td>
                    @if(in_array('approved', $value->status))
                      <td>Approved</td>
                    @elseif(!in_array('approved', $value->status) && !in_array('created', $value->status))
                      <td>Rejected</td>
                    @else
                      <td>Not Yet Approved</td>
                    @endif
                    <td>
                      <a href="meeting-detail?{{'id='.$value->id}}" class="detail-meeting btn btn-sm btn-default">Detail</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="receive">
              <div class="table-responsive">
              <table class="table table-middle table-hover table-center">
                <thead class="bg-white">
                  <tr>
                    <th>Sender</th>
                    <th>Subject</th>
                    <th>Meeting Date</th>
                    <th>Meeting Time</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($companyRequest as $key => $value)
                  <tr value="{{$value->id}}">
                    <td>
                      {{$value->sender}}
                    </td>
                    <td>{{$value->subject}}</td>
                    <td>{{date('d F Y', strtotime($value->date))}}</td>
                    <td>{{date('H:i A', strtotime($value->time))}}</td>
                    @if($value->status == "created")
                    <td>Not Yet Decided</td>
                    @elseif($value->status == "approved")
                    <td>Approved</td>
                    @elseif($value->status == "rejected")
                    <td>Rejected</td>
                    @endif
                    <td>
                      <a href="meeting-detail?{{'id='.$value->id}}" class="detail-meeting btn btn-sm btn-default">Detail</a>
                      @if($value->status == 'created')
                      <button id="{{$value->id}}" class="btn btn-sm btn-primary btn-acc-meeting" data-toggle="modal" data-target="#acceptMeeting">Accept</button>
                      <a id="{{$value->id}}" href="#rejectMeeting btn-reject-meeting" data-toggle="modal" class="btn btn-sm btn-danger">Reject</a>
                      @endif
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              </div>
            </div>
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
    @include('layouts.user.side-nav')
  </div>
</div>
@include('layouts.meeting-schedule.popup-view.add-meeting-schedule')
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
        <button id="acc-confirm" type="button" class="btn btn-primary acc-meeting" data-dismiss="modal">Accept</button>
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
  function initcalendar(event){
    console.log(event);
      /*$('#calendar').fullCalendar({
        header: {
          left: 'prev,next today',
          center: 'title',
          right: 'month,agendaWeek,agendaDay,listWeek'
        },
        defaultDate: moment(),
        eventStartEditable:false,
        eventDurationEditable:false,
        navLinks: true, // can click day/week names to navigate views
        editable: true,
        eventLimit: true, // allow "more" link when too many events
        events : event,
      });*/
    }

  $(document).ready(function() {
    $('#ac').on('dp.change', function(){
      var tempdate = $('#ac').val();
      var date = moment(tempdate,'dddd, MMMM Do YYYY').format("Y-M-DD");
      $('#ac-value').val(date);
    });
    $('#tc').on('dp.change', function(){
      var temptime = $('#tc').val();
      var time = moment(temptime,'h:mm A').format("hh:mm");
      $('#tc-value').val(time);
    });
    
    // $('#accMeeting').on('click',function(event){
    //   event.preventDefault();
    //   var id = $(this).closest('tr').attr('value');
    //   $('#acc-confirm').attr('url','acceptMeeting'+id);
    //   // $('#acceptMeeting').modal();
    // });

    $('#acceptMeeting').on('show.bs.modal', function (e) {
      var id = e.relatedTarget.id;
      $(this).find('#acc-confirm').attr('url','acceptMeeting/'+id);
    });

    $('#acc-confirm').on('click', function(){
      alert('test');
      var url = $(this).attr('url');
      $.ajax({
        type:"GET",
        url:url,
        success:function(response){
          setTimeout(function(){// wait for 5 secs(2)
            location.reload(); // then reload the page.(3)
          }, 5000); 
        }
      });
    })

    $('#form-add-meeting').submit(function(event){
      event.preventDefault();
      var data = $("#form-add-meeting").serialize()
      console.log(data);
      $.ajax({
        type:"GET",
        url:"doInsertMeeting",
        data: data,
        success:function(response){
          setTimeout(function(){// wait for 5 secs(2)
            location.reload(); // then reload the page.(3)
          }, 1000)
        }
      });
    });

    var event; 
    $.ajax({
      type:"GET",
      url:"meeting-calendar",
      data:{},
      success:function(response){
        event = response;
      },
      complete:function(){
        $('#calendar').fullCalendar({
        header: {
          left: 'prev,next today',
          center: 'title',
          right: 'month,agendaWeek,agendaDay,listWeek'
        },
        defaultDate: moment(),
        eventStartEditable:false,
        eventDurationEditable:false,
        navLinks: true, // can click day/week names to navigate views
        editable: true,
        eventLimit: true, // allow "more" link when too many events
        events : event,
      });
      }
    });

      meetingTypeChange(2);
  });
  function meetingTypeChange(type){
      if(type===0){
          $('.append-send-to-company').show();
          $('.append-send-to-user').hide();
          $('.btn-add-send-to-user').hide();
          $('.btn-add-send-to-company').show();
      }else if(type==1){
          $('.append-send-to-company').hide();
          $('.append-send-to-user').show();
          $('.btn-add-send-to-user').show();
          $('.btn-add-send-to-company').hide();
      }else{
          $('.append-send-to-company').hide();
          $('.append-send-to-user').hide();
          $('.btn-add-send-to-user').hide();
          $('.btn-add-send-to-company').hide();
      }
  }
</script>
@endsection
