@extends('layouts.dashboard.app')

@section('content')
  @include('layouts.dashboard.navbar')

  <div id="main" class="container-fluid">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12 margin-bottom">
        <h1 class="main-title no-margin-top no-margin-bottom">PT. Citra Tubindo Tbk</h1>
      </div>
      <!--<div class="col-md-12 col-sm-12 col-xs-12 margin-top margin-bottom">
        <a href="#addPbl" data-toggle="modal" class="btn btn-primary">Add Post Buy Lead</a>
        <a href="#addUw" data-toggle="modal" class="btn btn-primary">Add Unit Weight</a>
      </div>-->
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
          <table class="table table-middle table-bordered table-hover">
            <thead class="bg-white">
              <tr>
                <th>No</th>
                <th>Item</th>
                <th>Amount</th>
                <th>Total Price</th>
                <th>Shipping Term</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <!-- Note: Untuk bagian post buy lead
              Di halaman ini sprout hanya melihat yang sudah released untuk statusnya
              -->
              <tr>
                <td>1</td>
                <td>Pupuk</td>
                <td>10 Ton</td>
                <td>Rp50.000.000</td>
                <td>FOB</td>
                <td><span class="text-success"><strong>Released</strong></span></td>
                <td>
                  <a href="#detailPbl" data-toggle="modal" class="btn btn-default btn-sm">Detail</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- Detail Post Buy Lead -->
  <div class="modal fade" id="detailPbl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Detail Post Buy Lead</h4>
        </div>
        <div class="modal-body">
          <table class="table table-condensed no-border-table">
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
              <th>Unit Weight</th>
              <td>:</td>
              <td>Ton</td>
            </tr>
            <tr>
              <th>Total Price</th>
              <td>:</td>
              <td>Rp50.000.000</td>
            </tr>
            <tr>
              <th>City</th>
              <td>:</td>
              <td>Tangerang</td>
            </tr>
            <tr>
              <th>Province</th>
              <td>:</td>
              <td>Banten</td>
            </tr>
            <tr>
              <th>Shipping Term</th>
              <td>:</td>
              <td>FOB</td>
            </tr>
            <tr>
              <th>Closed Date</th>
              <td>:</td>
              <td>11 April 2017</td>
            </tr>
            <tr>
              <th>Delivery Time</th>
              <td>:</td>
              <td>30 Hari</td>
            </tr>
            <tr>
              <th>Area</th>
              <td>:</td>
              <td>Soekarno Hatta Airport</td>
            </tr>
            <tr>
              <th>Status</th>
              <td>:</td>
              <td class="text-success"><strong>Released</strong></td>
            </tr>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  @include('layouts.dashboard.menu-mobile')
@endsection
