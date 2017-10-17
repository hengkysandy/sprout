@extends('layouts.user.app')

@section('content')

@include('layouts.user.navbar')

<section class="content-header">
  <h1>
    Detail Meeting Schedule
  </h1>
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
                <td>{{$meetingType}}</td>
              </tr>
              <tr>
                <th>Recipient</th>
                <td>:</td>
                <td>
                  @for($i=0; $i<=sizeof($detailRecipient)-1; $i++)
                    {{$detailRecipient[$i]['name']}}
                    @if($i < sizeof($detailRecipient)-1)
                    {{','}}
                    @endif
                  @endfor
                </td>
              </tr>
              <tr>
                <th>Status</th>
                <td>:</td>
                <td>{{$meetingData->status}}</td>
              </tr>
              <tr>
                <th>Subject</th>
                <td>:</td>
                <td>{{$meetingData->subject}}</td>
              </tr>
              <tr>
                <th>Meeting Date</th>
                <td>:</td>
                <td>{{date('d F Y',strtotime($meetingData->date))}}</td>
              </tr>
              <tr>
                <th>Meeting Time</th>
                <td>:</td>
                <td>{{date('H:i A',strtotime($meetingData->time))}}</td>
              </tr>
              <tr>
                <th>Place</th>
                <td>:</td>
                <td>{{$meetingData->place}}</td>
              </tr>
            </table>
          </div>
        </div>
        <div class="box-footer">
          <a href="{{url()->previous()}}" class="btn btn-default"><i class="fa fa-arrow-left"></i> Back</a>
          <a href="#receipent" data-toggle="modal" class="btn btn-default"><i class="fa fa-group"></i> Receipent Status</a>
        </div>
      </div>
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
            @for($i=0; $i<=sizeof($detailRecipient)-1; $i++)
            <tr>
              <td>{{$i+1}}</td>
              <td>{{$detailRecipient[$i]['name']}}</td>
              <td>
                @if($detailRecipient[$i]['status'] == "created")
                  <span class="btn btn-xs btn-warning">Not Yet Decided</span>
                @elseif($detailRecipient[$i]['status'] == "approved")
                  <span class="btn btn-xs btn-success">Attend</span>
                @else
                  <span class="btn btn-xs btn-danger">Not Attend</span>
                @endif
              </td>
            </tr>
            @endfor
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@include('layouts.user.mobile-menu')



<script>

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

        }

        ]

      });
  });

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

  $('#form-add-meeting').submit(function(event){
    event.preventDefault();
    var data = $("#form-add-meeting").serialize()
   
    console.log(data);
    $.ajax({
      type:"GET",
      url:"doInsertMeeting",
      data: data,
      success:function(response){

      }
    });
  });

  /*$('#form-add-meeting').submit(function(event){
    event.stopPropagation();

    $.ajax({
      type:"GET",
      url:"business_category_modal",
      data:{
        id:id,
      },
      success:function(response){
        toastr.success("Sukses Menjalankan Perintah");
        setTimeout(function(){ $('#buttonSearch').click(); getTransaksiData(transaksiId) }, 3000);
      }
    });

  });*/

</script>

@endsection

