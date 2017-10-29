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
                    @if($blData->BuyLeadBusinessCategory()->first()->Section()->first())
                      {{$blData->BuyLeadBusinessCategory()->first()->Section()->first()->name}}
                    @else
                      There's no business category yet
                    @endif
                  </td>
                  <td>
                    <a href="#editRfq" data-toggle="modal" class="btn btn-primary btn-sm">Edit</a>
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
        <div class="modal-body">
          <form>
            <div class="row">
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>RFQ Number</label>
                  <input type="text" class="form-control" value="xxx-123-xxx" disabled="">
                </div>
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>Company ID</label>
                  <input type="text" class="form-control" value="JKT-001" disabled="">
                </div>
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>Item Description</label>
                  <input type="text" class="form-control" value="Pupuk" disabled="">
                </div>
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>Purchase Amount</label>
                  <div class="input-group">
                    <input type="number" class="form-control" value="100" min="0" disabled="">
                    <span class="input-group-addon">Kg</span>
                  </div>
                </div>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>Business Category</label>
                  <select class="form-control">
                    <option value="agriculture_forestry_and_fishing" selected="">Agriculture, forestry and fishing</option>
                    <option value="mining_and_quarrying">﻿Mining and quarrying</option>
                  </select>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary edit-rfq" data-dismiss="modal">Save</button>
        </div>
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

  @include('layouts.dashboard.menu-mobile')
@endsection
