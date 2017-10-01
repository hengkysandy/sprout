@extends('search-buy-lead.bl-list-master')

@section('bl-content')
<tbody>
  @foreach($buylead as $key => $value)
  <tr>
    <td>{{$value->buy_lead_code}}</td>
    <td>{{$value->c_entity.' '.$value->c_name}}</td>
    <td>{{$value->item}}</td>
    <td>{{$value->delivery_day}} Days</td>
    <td>{{$value->st_name}}</td>
    <td>Rp. {{number_format($value->total_price)}}</td>
    <td>
      @if($value->name == 'submitted')
      <span class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="Approved">
        <i class="fa fa-check"></i>
      </span>
      <span style="display: none;">Approved</span>
      @elseif($value->user_assign == session()->get('userSession')[0]->id && $value->assign_status =="inactive")
      <span class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Assigned Job">
        <i class="fa fa-handshake-o"></i>
      </span>
      <span style="display: none;">Assigned Job</span>
      @elseif($value->user_assign == session()->get('userSession')[0]->id && $value->assign_status =="active")
      <span class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="Assign Accepted">
        <i class="fa fa-exclamation-circle"></i>
      </span>
      <span style="display: none;">Assign Accepted</span>
      @elseif($value->request_status == "active")
      <span class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="Request Accepted">
        <i class="fa fa-exclamation-circle"></i>
      </span>
      <span style="display: none;">Request Accepted</span>
      @elseif($value->count == 1)
      <span class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Pending">
        <i class="fa fa-clock-o"></i>
      </span>
      <span style="display: none;">Pending</span>
      @else
      <span class="btn btn-sm btn-default" data-toggle="tooltip" data-placement="top" title="Available">
        <i class="fa fa-question"></i>
      </span>
      <span style="display: none;">Available</span>
      @endif
    </td>
    <td>
      <a href="item/{{$value->id}}" class="btn btn-sm btn-default">Detail</a>
    </td>
  </tr>
  @endforeach
</tbody>
@endsection
