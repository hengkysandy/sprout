@extends('layouts.user.app')

@section('content')
  @include('layouts.user.navbar')
    <div id="main" class="container-fluid">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 ">
          <h1 class="main-title no-margin-top"><strong>Buy Lead - {{$buyLead->item}}</strong></h1>
          <h4>Buy Lead:</h4>
        </div>
        <div class="col-md-9 col-sm-12 col-xs-12">
          <div class="table-responsive">
            <table class="table table-middle table-bordered table-hover">
              <thead class="bg-white">
                <tr>
                  <th>Buyer Name</th>
                  <th>Delivery Time</th>
                  <th>Shipping Term</th>
                  <th>City</th>
                  <th>Total Price</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>{{$buyLead->User()->first()->Company()->first()->name}}</td>
                  <td>{{$buyLead->delivery_day}} Days</td>
                  <td>{{$buyLead->ShippingTerm()->first()->name}}</td>
                  <td>{{$buyLead->city()->first()->name}}</td>
                  <td>Rp {{number_format($buyLead->total_price)}}</td>
                  <td>
                    <a href="#detailPbl" data-toggle="modal" class="btn btn-sm btn-default">Detail</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
          <h4>Quotation:</h4>
        </div>
        <div class="col-md-9 col-sm-12 col-xs-12">
          <div class="table-responsive">
            <!-- <table id="quotation"  class="table table-bordered table-hover table-middle"> kalo dipake js quotation responsive di mobile jadi jelek, tapi jadi gak bisa di sort -->
            <table class="table responsive dt-responsive table-bordered table-middle" cellspacing="0">
              <thead class="bg-white">
                <tr>
                  <th>Buyer Name</th>
                  <th>Delivery Time</th>
                  <th>Shipping Term</th>
                  <th>City</th>
                  <th>Total Price</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr class="bg-success">
                  <td>{{$quotation->User()->first()->Company()->first()->name}}</td>
                  <td>{{$quotation->delivery_day}} Days</td>
                  <td>{{$quotation->ShippingTerm()->first()->name}}</td>
                  <td>{{$quotation->city}}</td>
                  <td>Rp {{number_format($quotation->total_price)}}</td>
                  <td>
                    <a href="#detailQuotation" data-toggle="modal" class="btn btn-default btn-sm">Detail</a>
                    @if($quotation->QuotationStatus()->first()->id_status == 14)
                      <button value="{{$quotation->id}}" data-target="#confirmApprove" data-toggle="modal" class="btn btn-success btn-sm chooseApproveQuotation">Approve</button>
                    @endif
                    <a href="#addMs" data-toggle="modal" class="btn btn-primary btn-sm">Meeting Request</a>
                    <a href="#" class="btn btn-warning btn-sm">Download Quote</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="panel-group">
            <div class="panel panel-default">
              <a data-toggle="collapse" href="#collapse1">
                <div class="panel-heading panel-collapse">
                  <h4 class="panel-title">
                    <span>Quotation History</span>
                    <span class="chevron"><i class="fa fa-chevron-down"></i></span>
                  </h4>
                </div>
              </a>
              <div id="collapse1" class="panel-collapse collapse">
                <div class="panel-body">
                  <div class="table-responsive">
                    @if(count($revise) == 0)
                      <span>There's No Revise Yet.</span>
                    @else
                      <table class="table responsive dt-responsive table-bordered table-middle" cellspacing="0" width="100%">
                        <thead class="bg-white">
                          <tr>
                            <th>Revision</th>
                            <th>Buyer Name</th>
                            <th>Delivery Time</th>
                            <th>Shipping Term</th>
                            <th>City</th>
                            <th>Total Price</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($revise as $rKey => $rData)
                          <tr>
                            <td>{{++$rKey}}</td>
                            <td>{{$quotation->User()->first()->Company()->first()->name}}</td>
                            <td>{{$rData->ShippingTerm()->first()->name}}</td>
                            <td>{{$rData->delivery_day}} Days</td>
                            <td>{{$rData->city}}</td>
                            <td>Rp {{number_format($rData->total_price)}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    @endif
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-9 col-sm-12 col-xs-12">
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="btn-group">
                    <a href="#" class="btn btn-sm btn-default active">First Quotation</a>
                    <a href="#" class="btn btn-sm btn-default">Latest Quotation</a>
                    <!-- Need ask -->
                    <a href="{{url('companyProfile/'.$buyLead->User->Company->id)}}" class="btn btn-sm btn-default">Open Company Profile</a>
                  </div>
                </div>
              </div>
            </div>
            <br>
            <br>
            <div class="col-md-9 col-sm-12 col-xs-12">
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="btn-group">
                    @if(session()->get('userSession')[0]->role_id == 3 || session()->get('userSession')[0]->role_id == 4)

                    <a href="#uploadPO" data-toggle="modal" class="btn btn-sm btn-default">Upload Purchase Order</a>
                    <a href="#editPbl" data-toggle="modal" class="btn btn-sm btn-default">Revise Buy Lead</a>

                    @elseif(session()->get('userSession')[0]->role_id == 5 || session()->get('userSession')[0]->role_id == 6)

                    <a href="#" class="btn btn-sm btn-default">Download Purchase Order</a>
                    <button value="{{$quotation->id}}" data-target="#reviseQuote" data-toggle="modal" class="btn btn-sm btn-default chooseReviseQuote">Revise Quotation</button>
                    @include('revise-quotation-pop-up')

                    @endif
                    
                    <a href="{{url('meeting-summary?idQuo='.$quotation->id)}}" class="btn btn-sm btn-default">Meeting Summary</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="margin-top">


            <div class="panel panel-white post">

              @foreach($discussion as $data)
              <?php 
                  $userType = $data->User->id_company == $buyLead->User->id_company ? "(Seller)" : "(Buyer)";
               ?>
              <div class="post-heading col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-1 col-sm-2 col-xs-3 no-padding image">
                  <img src="{{$data->User->photo_image}}" class="img-circle avatar" alt="user profile image">
                </div>
                <div class="col-md-8 col-sm-8 col-xs-8 meta no-padding">
                  <div class="title h5">
                    <b>{{$data->User->Company->name}}</b> - {{$data->User->first_name . ' ' . $data->User->last_name}} {{$userType}}
                  </div>
                  <h6 class="text-muted time">{{$data->created_at->diffForHumans(CarBon\Carbon::now(), true)}}</h6>
                </div>
              </div>
              <div class="post-description">
                <p>{{$data->message}}</p>
              </div>
              <a data-value="{{$data->id}}" id="replyDiscussion" href="#replyMessage" class="no-text-decoration" data-toggle="modal">
                <div class="reply">
                  <i class="fa fa-reply"></i><span class="padding-btn-rl">reply</span>
                </div>
              </a>

              <div class="reply-box col-md-offset-1 col-sm-offset-1 col-xs-offset-1">

                <ul class="reply-list">
                  @foreach($data->DiscussionDetail()->get() as $dt)
                  <?php 
                      $userTypeDt = $dt->User->id_company == $buyLead->User->id_company ? "(Seller)" : "(Buyer)";
                   ?>
                  <li>
                    <div class="reply-heading">
                      <div class="no-padding image col-md-1 col-sm-2 col-xs-3">
                        <img src="{{$dt->User->photo_image}}" class="img-circle avatar" alt="user profile image">
                      </div>
                      <div>
                        <div class="title h5">
                          <b>{{$dt->User->Company->name}}</b> - {{$dt->User->first_name . ' ' . $dt->User->last_name}} {{$userTypeDt}}
                        </div>
                        <h6 class="text-muted time">{{$dt->created_at->diffForHumans(CarBon\Carbon::now(), true)}}</h6>
                      </div>
                    </div>
                    <div class="post-description">
                      <p>{{$dt->message}}</p>
                    </div>
                    <hr>
                  </li>
                  @endforeach

                </ul>
              </div>
              @endforeach

            </div>




            <form class="margin-top" action="{{url('createDiscussion')}}" method="post">
              {{csrf_field()}}
              <input type="hidden" name="idBuyLead" value="{{$buyLead->id}}">
              <h4>Add Discussion :</h4>
              <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12">
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label></label>
                        <textarea name="discussion" rows="6" class="form-control no-resize" placeholder="Your discussion..."></textarea>
                      </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary">Send</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        @include('layouts.user.side-nav')

      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 margin-top">
          <a class="btn btn-warning btn-sm" href="item.html"><i class="fa fa-arrow-left"></i> Back</a>
        </div>
      </div>
    </div>

    <!-- Revise Buy Lead -->
    <div class="modal fade" id="editPbl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Revise Buy Lead</h4>
          </div>
          <div class="modal-body">
            <form>
              <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Item</label>
                    <input type="text" class="form-control" value="Plate Material">
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Amount</label>
                    <input type="text" class="form-control" value="10">
                  </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Broadcast To Company</label>
                    <br>
                    <a href="#broadcast" data-toggle="modal" class="btn btn-primary btn-sm">Broadcast</a>
                  </div>
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>ID</th>
                        <th>Buyer Name</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>JKT-02</td>
                        <td>Jaya Abadi</td>
                        <td><a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>JKT-01</td>
                        <td>Abadi Isidah</td>
                        <td><a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a></td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>JKT-04</td>
                        <td>Maju Terus</td>
                        <td><a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Short Description</label>
                    <textarea rows="5" class="form-control no-resize">Ini harganya harus bisa murah dan kualitas bagus</textarea>
                  </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                  <label>Business Category</label>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Section 1</label>
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
                    <label>Section 2</label>
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
                    <label>Division 1</label>
                    <select class="form-control selectpicker" data-live-search="true">
                      <option value="">Crop and animal production, hunting and related service activities</option>
                      <option value="1" selected="">Manufacture of food products</option>
                      <option value="2">Forestry and logging</option>
                      <option value="3">Fishing and aquaculture</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Division 2</label>
                    <select class="form-control selectpicker" data-live-search="true">
                      <option value="">Crop and animal production, hunting and related service activities</option>
                      <option value="1" selected="">Manufacture of food products</option>
                      <option value="2">Forestry and logging</option>
                      <option value="3">Fishing and aquaculture</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Group 1</label>
                    <select class="form-control selectpicker" data-live-search="true">
                      <option value="">Select a group</option>
                      <option value="1" selected>Manufacture of food products</option>
                      <option value="2">Forestry and logging</option>
                      <option value="3">Fishing and aquaculture</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Group 2</label>
                    <select class="form-control selectpicker" data-live-search="true">
                      <option value="">Select a group</option>
                      <option value="1" selected>Manufacture of food products</option>
                      <option value="2">Forestry and logging</option>
                      <option value="3">Fishing and aquaculture</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Unit</label>
                    <select class="form-control selectpicker">
                      <option value="">Select Unit</option>
                      <option value="kg">Kg</option>
                      <option value="ton" selected="">Ton</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Total Price</label>
                    <div class="input-group">
                      <span class="input-group-addon">Rp</span>
                      <input type="number" class="form-control" min="0" value="50000000">
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Payment Term</label>
                    <input type="text" class="form-control" value="Down Payment 50%, Installment 6 Months">
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>City</label>
                    <select class="form-control selectpicker" data-live-search="true">
                      <option value="">Select City</option>
                      <option value="1">Tangerang</option>
                      <option value="2" selected="">Jakarta</option>
                      <option value="3">Tangerang Selatan</option>
                      <option value="4">Serang</option>
                      <option value="5">Pangkal Pinang</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Province</label>
                    <select class="form-control selectpicker" data-live-search="true">
                      <option value="">Select Province</option>
                      <option value="aceh">Aceh</option>
                      <option value="bali" selected="">Bali</option>
                      <option value="banten">Banten</option>
                      <option value="bengkulu">Bengkulu</option>
                      <option value="yogyakarta">DI Yogyakarta</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Shipping Term</label>
                    <select class="form-control selectpicker" data-live-search="true">
                      <option value="">Select Shipping Term</option>
                      <option value="exw" selected="">EXW – Ex Works</option>
                      <option value="fca">FCA – Free Carrier</option>
                      <option value="cpt">CPT – Carriage Paid To</option>
                      <option value="cip">CIP – Carriage and Insurance Paid to</option>
                      <option value="dat">DAT – Delivered At Terminal</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Area (Airport, Seaport, &amp; Terminal)</label>
                    <select class="form-control selectpicker" data-live-search="true">
                      <option value="">Select Area (Airport, Seaport, &amp; Terminal)</option>
                      <option value="seota" selected="">Soekarno Hatta Airport (CGK)</option>
                      <option value="ngurahrarai">Ngurah Rai Airport (DPS)</option>
                      <option value="cirebon_port">Cirebon Port</option>
                      <option value="tpk_palaran_samarinda">TPK Palaran Samarinda Port</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Closed Date</label>
                    <input type="text" id="Editcd" class="form-control" value="Tuesday, April 11th 2017">
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Delivery Time</label>
                    <div class="input-group">
                      <input type="number" class="form-control">
                      <span class="input-group-addon">Days</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label class="btn btn-primary btn-file">
                      Upload Quotation <input type="file" class="hidden">
                    </label>
                    <p class="help-block">Format document .docs, .xls, and .pdf</p>
                  </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" checked=""> Approved Vendor Only
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary edit-pbl" data-dismiss="modal">Save</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Reply Message -->
    <div class="modal fade" id="replyMessage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="MyModalLabel">Reply Messages</h4>
          </div>
          <form method="post" action="{{url('createDiscussionDetail')}}">
            {{csrf_field()}}
            <input type="hidden" name="currDiscussionId">
          <div class="modal-body">
              <div class="form">
                <textarea name="discussion" rows="6" class="form-control no-resize"></textarea>
              </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary submit-reply">Submit</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
          </div>
          </form>
        </div>
      </div>
    </div>

    @include('post-buy-lead.popup-view.detail-post-buy-lead-pop-up')

    @include('post-buy-lead.popup-view.detail-quotation-pop-up')
    

    <!-- Add Meeting Summary -->
    <div class="modal fade" id="addMs" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Add Meeting Schedule</h4>
          </div>
          <form method="post" action="{{url('insertMeetingSchedule')}}">
          {{csrf_field()}}
          <input type="hidden" name="idQuotation" value="{{$quotation->id}}">
          <input type="hidden" name="idCompanyAssign" value="{{session()->get('userSession')[0]->id_company == $buyLead->User->id_company ? $buyLead->User->id_company : $quotation->User->id_company}}">
          <div class="modal-body">
              <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Send To</label>
                    <input type="text" name="sendTo" class="form-control" value="{{session()->get('userSession')[0]->id_company == $buyLead->User->id_company ? $quotation->User->first_name.' '.$quotation->User->last_name : $buyLead->User->first_name.' '.$buyLead->User->last_name}}" disabled>
                    <input type="hidden" name="sendTo" value="{{session()->get('userSession')[0]->id_company == $buyLead->User->id_company ? $quotation->id_user : $buyLead->id_user}}">
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Subject</label>
                    <input type="text" name="subject" class="form-control" value="{{$buyLead->buy_lead_code}} - ">
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Date</label>
                    <input type="text" name="date" id="ac" class="form-control">
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Time</label>
                    <input type="text" name="time" id="tc" class="form-control">
                  </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Place</label>
                    <input type="text" name="place" class="form-control">
                  </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Description</label>
                    <textarea rows="7" name="description" class="form-control"></textarea>
                  </div>
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary add-ms">Send</button>
          </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Broadcasted List -->
    <div class="modal fade" id="broadcastComp" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Broadcasted Company</h4>
          </div>
          <div class="modal-body">
            <div class="table-responsive">
              <table id="listBroadcast" class="table table-hover table-bordered">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Buyer Name</th>
                    <th>Business Category</th>
                    <th>Status Vendor</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($broadcastCompany as $key => $data)
                    @if( !empty($data->CompanyStatusFor()->get()) )

                    @if($data->CompanyStatusFor()->where('id_status',16)->first() && $data->CompanyStatusFor()->where('id_company_by',session()->get('companySession')[0]->id)->first())
                      <tr>
                        <td>{{++$key}}</td>
                        <td>{{$data->id}}</td>
                        <td>{{$data->name}}</td>
                        <td>
                          @foreach($data->CompanyBusinessCategory()->get() as $bcData)
                            {{$bcData->BusinessCategory->Section->name}},
                          @endforeach
                        </td>
                        <td><span class="text-success"><strong>Approved</strong></span></td>
                      </tr>
                    @endif

                    @endif
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Detail Business Category 1 -->
    <?php $idx2 = 1; ?>
    @foreach($buyLead->BuyLeadBusinessCategory()->get() as $key => $blBC)
    <?php $idx = ++$key; ?>
      <div class="modal fade" id="bc{{$idx}}" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Detail Business Category</h4>
            </div>
            <div class="modal-body">
              <h4><strong>{{$blBC->BusinessCategory->Section->section}}</strong></h4>
              <h5>{{$blBC->BusinessCategory->Section->name}}</h5>

              <div class="row">
                @foreach($blBC->BusinessCategory->Division()->get() as $dKey => $divData)
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3 class="panel-title">
                        <a href="#division{{$idx2}}" class="no-text-decoration" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="division{{$idx2}}">{{$divData->name}} - {{$divData->description}}</a>
                      </h3>
                    </div>
                    <div id="division{{$idx2}}" class="panel-body collapse">
                      <div class="table-responsive">
                        <table class="table table-condensed">
                          <thead>
                            <tr>
                              <th>Group</th>
                              <th>Description</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($blBC->BusinessCategory->Group()->get() as $gKey => $gData)
                            <tr>
                              <td>{{$gData->name}}</td>
                              <td>{{$gData->description}}</td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                 <?php $idx2 += 1; ?>
                @endforeach

              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    @endforeach
    

    <!-- Detail Business Category 2 -->
    <div class="modal fade" id="bc2temp" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Detail Business Category</h4>
          </div>
          <div class="modal-body">
            <h4><strong>Section B</strong></h4>
            <h5>Mining and quarrying</h5>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">
                      <a href="#division3" class="no-text-decoration" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="division3">Division 5 - Mining of coal and lignite</a>
                    </h3>
                  </div>
                  <div id="division3" class="panel-body collapse">
                    <div class="table-responsive">
                      <table class="table table-condensed">
                        <thead>
                          <tr>
                            <th>Group</th>
                            <th>Description</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>051</td>
                            <td>Mining of hard coal</td>
                          </tr>
                          <tr>
                            <td>052</td>
                            <td>Mining of lignite</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">
                      <a href="#division4" class="no-text-decoration" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="division4">Division 6 - Extraction of crude petroleum and natural gas</a>
                    </h3>
                  </div>
                  <div id="division4" class="panel-body collapse">
                    <div class="table-responsive">
                      <table class="table table-condensed">
                        <thead>
                          <tr>
                            <th>Group</th>
                            <th>Description</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>061</td>
                            <td>Extraction of crude petroleum</td>
                          </tr>
                          <tr>
                            <td>062</td>
                            <td>Extraction of natural gas</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Reply Message -->
    <div class="modal fade" id="replyMessage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="MyModalLabel">Reply Messages</h4>
          </div>
          <div class="modal-body">
            <form>
              <div class="form">
                <textarea rows="6" class="form-control no-resize"></textarea>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary submit-reply" data-dismiss="modal">Submit</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Confirm Approve -->
    <div class="modal fade" id="confirmApprove" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Are you sure want to approve this?</h4>
          </div>
          <div class="modal-footer">
            <div id="btn-confirmation-approve"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Upload Purchase Order -->
    <div class="modal fade" id="uploadPO" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="MyModalLabel">Upload Purchase Order</h4>
          </div>
          <div class="modal-body">
            <form>
              <div class="row">
                <div class="col-md-6">
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="without" onclick="withDoc();" value="option1" checked>
                        Upload Document
                    </label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="with" onclick="withDoc();" value="option2">
                      Generate Document
                    </label>
                  </div>
                </div>
                <div id="withoutWith">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" disabled value="Purchase Order.docx">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <button id="disabledDoc" class="btn btn-primary">
                        Browse<input type="file" style="display: none;">
                      </button>
                    </div>
                  </div>
                </div>
                <!-- <div id="ifWith" style="display: none;">
                  <div class="col-md-6">
                    <div class="form-group">
                      <a href="#" class="btn btn-primary">Upload</a>
                    </div>
                  </div>
                </div> -->
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal">Upload</button>
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

    <meta name="base_url" content="{{ URL::to('/') }}">
    <script type="text/javascript">
      var quotation = {!! $quotation !!}
      var buyLead = {!! $buyLead !!}
    </script>
    <script type="text/javascript" src="{{asset('js/myscript/detail-item.js')}}"></script>
  @include('layouts.user.mobile-menu')
@endsection
