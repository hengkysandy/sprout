@extends('layouts.dashboard.app')

@section('content')
  @include('layouts.dashboard.navbar')

  <div class="container-fluid">
    <h1 class="main-title no-margin-top">RFQ / Buy Lead List</h1>
    <div class="row">
      <div class="col-md-2 col-sm-12 col-xs-12">
        <div class="form-group">
          <label>Search Company ID</label>
          <input type="text" id="findBuyCi" class="form-control">
        </div>
      </div>
      <div class="col-md-2 col-sm-12 col-xs-12">
        <div class="form-group">
          <label>Search Business Category</label>
          <input type="text" id="findBuyBc" class="form-control">
        </div>
      </div>
      <div class="col-md-12 col-sm-12 col-xs-12 margin-bottom">
        <div class="table-responsive">
          <table id="rfqTable" class="table table-middle table-hover table-bordered">
            <thead>
              <tr class="bg-white">
                <th>RFQ Number</th>
                <th>Company ID</th>
                <th>Item</th>
                <th>Amount</th>
                <th>Business Category</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($buyLead as $blData)
                <tr>
                  <td><a href="#post-buy-lead">{{$blData->id}}</a></td>
                  <td>{{$blData->buy_lead_code}}</td>
                  <td>{{$blData->item}}</td>
                  <td>{{$blData->amount}} {{$blData->Unit()->first()->name}}</td>
                  <td>
                    @if(!empty($blData->BuyLeadBusinessCategory()->get()))
                      @foreach( $blData->BuyLeadBusinessCategory()->get() as $d)
                        <span>{{$d->Section()->first()->section}},</span>
                      @endforeach
                    @else
                      There's no business category yet
                    @endif
                  </td>
                  <td>
                    <a href="#editRfq" data-value="{{$blData->id}}" data-toggle="modal" class="btn btn-primary btn-sm chooseEdit">Edit</a>
                    <!-- Note: Untuk tombol oke
                    Pada tombol oke ini nantinya setelah rfq yang sudah di cek saat di klik tombol oke nya akan menghilang (bukan terhapus) dari tabel RFQ List
                    -->
                    <a href="#" class="btn btn-default btn-sm">Oke</a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div id="editRfq" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Edit RFQ / Post Buy Lead</h4>
        </div>
        <form method="post" action="{{url('doAddBuyLeadBusinessCategoryAdmin')}}">
          {{csrf_field()}}
        <div class="modal-body">
            <input type="hidden" name="id_buylead" id="id_buylead">
            <div class="row">
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>RFQ Number</label>
                  <input type="text" id="rfq-number-buy-lead-id" class="form-control" disabled="">
                </div>
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>Company ID</label>
                  <input type="text" id="company-id" class="form-control"  disabled="">
                </div>
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>Item Description</label>
                  <input type="text" id="item" class="form-control" disabled="">
                </div>
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>Purchase Amount</label>
                  <div class="input-group">
                    <input type="number" id="amount-val" class="form-control"  min="0" disabled="">
                    <span class="input-group-addon unit-val"></span>
                  </div>
                </div>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>Business Category</label>
                  <select name="id_section" class="form-control">
                    @foreach($section as $sData)
                    <option value="{{$sData->id}}">{{$sData->section}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary edit-rfq">Save</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <div id="deleteRfq" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Are you sure want to delete this?</h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-danger delete-rfq" data-dismiss="modal">Delete</button>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="js/myscript/rfq.js"></script>

  @include('layouts.dashboard.menu-mobile')
@endsection
