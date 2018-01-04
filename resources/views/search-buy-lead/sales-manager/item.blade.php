@extends('search-buy-lead.item-master')
@section('item-content')
@php $active = false; $req = ''; @endphp
@foreach($buyleaduserrequest as $key => $value)
    @if($value->status == "active")
      @php $active = true; $req = $value->first_name; @endphp
    @endif
  @endforeach
<div class="table-responsive">
  <table class="table responsive dt-responsive table-bordered table-middle" cellspacing="0" width="100%">
    <thead class="bg-white">
      <tr>
        <th>Buy Lead ID</th>
        <th>Buyer Name</th>
        <th>Delivery Time</th>
        <th>Shipping Term</th>
        <th>City</th>
        <th>Total Price</th>
        <th>Assign To</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($buylead as $key => $value)
      <tr>
        <td>{{$value->buy_lead_code}}</td>
        <td>{{$value->c_name}}</td>
        <td>{{$value->delivery_day}} Days</td>
        <td>{{$value->st_name}}</td>
        <td>{{$value->city_name}}</td>
        <td>Rp {{number_format($value->total_price)}}</td>
        <td>
          @if($buyleaduserassign)
          {{$buyleaduserassign->first_name}}
          @elseif($active == true)
          {{$req}}
          @else
          -
          @endif
        </td>
        <td>
          <div>
            <a href="#detailSbl" data-toggle="modal" class="btn btn-default btn-sm">Detail</a>
          </div>
        </td>
      </tr>  
      @endforeach
    </tbody>
  </table>
</div>
<div class="margin-bottom">
  @if($active == false)
  <a href="#reviseQuote" data-toggle="modal" class="btn btn-sm btn-primary">Submit Quotation</a>
  <a href="#assignTo" data-toggle="modal" class="btn btn-sm btn-success">Assign To</a>
  <a href="#viewAllRequest" data-toggle="modal" class="btn btn-sm btn-default">View All Request</a>
  @endif
</div>
@endsection 

@section('item-modal')
<!-- Revise Quote -->
<div class="modal fade" id="reviseQuote" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <form action="{{url('/createQuotation')}}" method="post" enctype="multipart/form-data">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Submit Quotation</h4>
        </div>
        <div class="modal-body">
          {{csrf_field()}}
          <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <label>Item</label>
                <input type="text" name="buylead" value="{{$buylead[0]->id}}" hidden>
                <input type="text" class="form-control" value="{{$buylead[0]->item}}" disabled>
              </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <label>Amount</label>
                <input type="text" name="amount" class="form-control" value="{{$buylead[0]->amount}}">
              </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <label>Total Price</label>
                <div class="input-group">
                  <span class="input-group-addon">Rp</span>
                  <input type="number" name="totalPrice" class="form-control" min="0" value="{{$buylead[0]->total_price}}">
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <label>Payment Term</label>
                <input type="text" name="paymentTerm" class="form-control" value="{{$buylead[0]->payment_term}}">
              </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <label>Province</label>
                <select class="form-control selectpicker" disabled="">
                  <option selected>{{$buylead[0]->province_name}}</option>
                </select>
              </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <label>City</label>
                <select class="form-control" name="city" selectpicker" readonly>
                  <option value="{{$buylead[0]->city_name}}" selected>{{$buylead[0]->city_name}}</option>
                </select>
              </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <label>Shipping Term</label>
                <select class="form-control selectpicker" name="shippingTerm" data-live-search="true">
                  @foreach($shippingterm as $key => $value)
                  <option value="{{$value->id}}">{{$value->name}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <label>Area (Airport, Seaport, &amp; Terminal)</label>
                <select class="form-control selectpicker" name="area" data-live-search="true">
                  <option value="">Select Area</option>
                  @foreach($area as $key => $value)
                  <option value="{{$value->id}}" @if($buylead[0]->id_area == $value->id) selected @endif>{{$value->name}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <label>Closed Date</label>
                <input type="text" id="Editcd" class="form-control" value="{{$buylead[0]->closed_date}}" disabled>
              </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <label>Delivery Time</label>
                <div class="input-group">
                  <input type="number"  name="deliveryDays" class="form-control" value="{{$buylead[0]->delivery_day}}">
                  <span class="input-group-addon">Days</span>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="form-group">
                <label class="btn btn-primary btn-file">
                  Upload Quotation <input type="file" name="document" class="hidden">
                </label>
                <p class="help-block">Format document .docs, .xls, and .pdf</p>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary send-quote">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div id="viewAllRequest" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Request Job Staff</h4>
      </div>
      <div class="modal-body">
        <table id="reqJobStaff" class="table table-bordered">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nama</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($buyleaduserrequest as $key => $value)
            <tr class="user-row">
              <td class="user-id">{{$value->id_user}}</td>
              <td class="user-name">{{$value->first_name.' '.$value->last_name}}</td>
              <td><a href="#acceptRequest" data-toggle="modal" class="btn btn-sm btn-primary accept-request">Accept Request</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Detail Item -->
<div class="modal fade" id="detailSbl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Detail Quotation</h4>
      </div>
      <div class="modal-body">
        <table class="table table-condensed no-border-table table-middle">
          <tr>
            <th>Item</th>
            <td>:</td>
            <td>{{$buylead[0]->item}}</td>
          </tr>
          <tr>
            <th>Amount</th>
            <td>:</td>
            <td>{{$buylead[0]->amount}} {{$buylead[0]->unit}}</td>
          </tr>
          <tr>
            <th>Total Price</th>
            <td>:</td>
            <td>Rp. {{number_format($buylead[0]->total_price)}}</td>
          </tr>
          <tr>
            <th>Payment Term</th>
            <td>:</td>
            <td>{{$buylead[0]->payment_term}}</td>
          </tr>
          <tr>
            <th>City</th>
            <td>:</td>
            <td>{{$buylead[0]->city_name}}</td>
          </tr>
          <tr>
            <th>Province</th>
            <td>:</td>
            <td>{{$buylead[0]->province_name}}</td>
          </tr>
          <tr>
            <th>Shipping Term</th>
            <td>:</td>
            <td>{{$buylead[0]->st_name}}</td>
          </tr>
          <tr>
            <th>Area</th>
            <td>:</td>
            <td>{{$buylead[0]->a_name}}</td>
          </tr>
          <tr>
            <th>Closed Date</th>
            <td>:</td>
            <td>{{$buylead[0]->closed_date}}</td>
          </tr>
          <tr>
            <th>Delivery Time</th>
            <td>:</td>
            <td>{{$buylead[0]->delivery_day}} Days</td>
          </tr>
          <tr>
            <th>Assign to</th>
            <td>:</td>
            <td>-</td>
          </tr>
          <tr>
            <th>Document</th>
            <td>:</td>
            <td>
              <a href="../../storage/sample.pdf" class="btn btn-primary btn-sm">Open Document</a>
            </td>
          </tr>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="assignTo" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <form action="{{url('/assignUser/'.$buylead[0]->id)}}" method="post">
      {{csrf_field()}}
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Assign To</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Assign To</label>
                <select class="form-control selectpicker" name="assign[]" data-live-search="true">
                  <option value="" selected>-</option>
                  @foreach($user as $key => $value)
                  <option value="{{$value->id}}">{{$value->first_name.' '.$value->last_name}}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Assign</button>
        </div>
      </div>
    </form>
  </div>
</div>

<div id="acceptRequest" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Are you sure want to Accept <span id="user-req"></span> request for buy lead?</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
        <a id="req-link" href="{{url('/acceptRequest/'.$buylead[0]->id)}}" class="btn btn-success">Yes</a>
      </div>
    </div>
  </div>
</div>
@endsection