@extends('layouts.dashboard.app')

@section('content')
  @include('layouts.dashboard.navbar')

  <ul class="dash-menu">
    <li><a href="{{url('company_membership')}}"><i class="fa fa-group cm"></i>Company Membership</a></li>
    <li><a href="{{url('rfq')}}"><i class="fa fa-list-alt rfq"></i>RFQ / Buy Lead List</a></li>
    <li><a href="{{url('business_category')}}"><i class="fa fa-briefcase bc"></i>Business Category</a></li>
    <li><a href="{{url('new_member_request')}}"><i class="fa fa-address-card nmr"></i>New Member Request</a></li>
    <li><a href="{{url('shipping_term')}}"><i class="fa fa-archive st"></i>Shipping Term</a></li>
    <li><a href="{{url('city_area')}}"><i class="fa fa-plane ac"></i>Area</a></li>
  </ul>

  <div class="fixed-action-btn-right">
    <a href="logout" class="btn btn-fab"><i class="fa fa-power-off"></i></a>
  </div>
@endsection
