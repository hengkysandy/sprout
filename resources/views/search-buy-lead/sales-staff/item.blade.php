@extends('search-buy-lead.item-master')
@section('item-content')

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
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      @if($buyleaduserassign)
        @if($buyleaduserassign->id_user = session()->get('userSession')[0]->id && $buyleaduserassign->status == "active" )
          <a href="#reviseQuote" data-toggle='modal' class="btn btn-sm btn-primary">Submit Quotation</a>
        @elseif($buyleaduserassign->id_user = session()->get('userSession')[0]->id && $buyleaduserassign->status == "inactive")
          <a href="#accBuyLead" data-toggle="modal" class="btn btn-sm btn-success">Accept Buy Lead</a>
          <a href="#rejectQuote" data-toggle="modal" class="btn btn-sm btn-danger">Reject Buy Lead</a>
        @endif
      @else
        @if($buyleaduserrequest)
          @if($buyleaduserrequest->status == "active")
          <a href="#reviseQuote" data-toggle='modal' class="btn btn-sm btn-primary">Submit Quotation</a>
          @elseif($buyleaduserrequest->status == "inactive")
          <a data-toggle="modal" class="btn btn-sm btn-primary" disabled>Request Job</a>
          @endif
        @else
          <a href="#reqBuyLead" data-toggle="modal" class="btn btn-sm btn-primary">Request Job</a>
        @endif
      @endif
    </div>
  </div>
</div>

@endsection


@section('item-modal')
<!-- Reject Confirmarion -->
<div class="modal fade" id="rejectOffer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Are you sure want to reject this quotation?</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger reject-offer" data-dismiss="modal">Reject</button>
      </div>
    </div>
  </div>
</div>

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

<!-- Add Meeting Schedule -->
<div class="modal fade" id="meetingReq" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
        <button type="button" class="btn btn-primary add-ms" data-dismiss="modal">Submit</button>
      </div>
    </div>
  </div>
</div>

<!-- Detail Quotation -->
<div class="modal fade" id="detailSbl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
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
            <td>Plate Material</td>
          </tr>
          <tr>
            <th>Amount</th>
            <td>:</td>
            <td>10 Ton</td>
          </tr>
          <tr>
            <th>Total Price</th>
            <td>:</td>
            <td>Rp50.000.000</td>
          </tr>
          <tr>
            <th>Payment Term</th>
            <td>:</td>
            <td>Down Payment 50%, Installment 6 Months</td>
          </tr>
          <tr>
            <th>City</th>
            <td>:</td>
            <td>Jakarta</td>
          </tr>
          <tr>
            <th>Province</th>
            <td>:</td>
            <td>DKI</td>
          </tr>
          <tr>
            <th>Shipping Term</th>
            <td>:</td>
            <td>EXW - Ex Works</td>
          </tr>
          <tr>
            <th>Area</th>
            <td>:</td>
            <td>Soekarno Hatta Airport</td>
          </tr>
          <tr>
            <th>Closed Date</th>
            <td>:</td>
            <td>11 April 2017</td>
          </tr>
          <tr>
            <th>Delivery Time</th>
            <td>:</td>
            <td>30 Days</td>
          </tr>
          <tr>
            <th>Assign to</th>
            <td>:</td>
            <td>Arifan</td>
          </tr>
          <tr>
            <th>Status</th>
            <td>:</td>
            <td><span class="text-danger"><strong>Not Yet Released</strong></span></td>
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

<!-- Reject Quotation -->
<div class="modal fade" id="rejectQuote" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Are you sure want to reject this buy lead?</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Yes</button>
      </div>
    </div>
  </div>
</div>

<div id="accBuyLead" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Are you sure want to accept this buy lead?</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
        <a href="{{url('/acceptBuyLead/'.$buylead[0]->id)}}" class="btn btn-success">Yes</a>
      </div>
    </div>
  </div>
</div>

<div id="reqBuyLead" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Are you sure want to request this buy lead?</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
        <a href="{{url('/requestBuyLead/'.$buylead[0]->id)}}" class="btn btn-success">Yes</a>
      </div>
    </div>
  </div>
</div>
@endsection 