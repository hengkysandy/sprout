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
              <tr>
                <td><a href="post-buy-lead.html">xx-123-xx</a></td>
                <td>JKT-001</td>
                <td>Pupuk</td>
                <td>100 Kg</td>
                <td>Agriculture, forestry and fishing</td>
                <td>
                  <a href="#editRfq" data-toggle="modal" class="btn btn-primary btn-sm">Edit</a>
                  <!-- Note: Untuk tombol oke
                  Pada tombol oke ini nantinya setelah rfq yang sudah di cek saat di klik tombol oke nya akan menghilang (bukan terhapus) dari tabel RFQ List
                  -->
                  <a href="#" class="btn btn-default btn-sm">Oke</a>
                </td>
              </tr>
              <tr>
                <td><a href="post-buy-lead.html">xx-123-xx</a></td>
                <td>SUB-001</td>
                <td>Batu Bara</td>
                <td>10 Ton</td>
                <td>Mining and quarrying</td>
                <td>
                  <a href="#editRfq" data-toggle="modal" class="btn btn-primary btn-sm">Edit</a>
                  <!-- Note: Untuk tombol oke
                  Pada tombol oke ini nantinya setelah rfq yang sudah di cek saat di klik tombol oke nya akan menghilang (bukan terhapus) dari tabel RFQ List
                  -->
                  <a href="#" class="btn btn-default btn-sm">Oke</a>
                </td>
              </tr>
              <tr>
                <td><a href="post-buy-lead.html">xx-123-xx</a></td>
                <td>TGS-012</td>
                <td>Kain Wol</td>
                <td>3 Ton</td>
                <td>Manufacturing</td>
                <td>
                  <a href="#editRfq" data-toggle="modal" class="btn btn-primary btn-sm">Edit</a>
                  <!-- Note: Untuk tombol oke
                  Pada tombol oke ini nantinya setelah rfq yang sudah di cek saat di klik tombol oke nya akan menghilang (bukan terhapus) dari tabel RFQ List
                  -->
                  <a href="#" class="btn btn-default btn-sm">Oke</a>
                </td>
              </tr>
              <tr>
                <td><a href="post-buy-lead.html">xx-123-xx</a></td>
                <td>BJR-201</td>
                <td>Kabel Tuvur</td>
                <td>1 Ton</td>
                <td>Electricity, gas, steam and air conditioning supply</td>
                <td>
                  <a href="#editRfq" data-toggle="modal" class="btn btn-primary btn-sm">Edit</a>
                  <!-- Note: Untuk tombol oke
                  Pada tombol oke ini nantinya setelah rfq yang sudah di cek saat di klik tombol oke nya akan menghilang (bukan terhapus) dari tabel RFQ List
                  -->
                  <a href="#" class="btn btn-default btn-sm">Oke</a>
                </td>
              </tr>
              <tr>
                <td><a href="post-buy-lead.html">xx-123-xx</a></td>
                <td>TGR-002</td>
                <td>Gas Bumi</td>
                <td>2 Ton</td>
                <td>Electricity, gas, steam and air conditioning supply</td>
                <td>
                  <a href="#editRfq" data-toggle="modal" class="btn btn-primary btn-sm">Edit</a>
                  <!-- Note: Untuk tombol oke
                  Pada tombol oke ini nantinya setelah rfq yang sudah di cek saat di klik tombol oke nya akan menghilang (bukan terhapus) dari tabel RFQ List
                  -->
                  <a href="#" class="btn btn-default btn-sm">Oke</a>
                </td>
              </tr>
              <tr>
                <td><a href="post-buy-lead.html">xx-123-xx</a></td>
                <td>BDG-041</td>
                <td>Mesin Jahit Otomatis</td>
                <td>2000 Buah</td>
                <td>Manufacture of special-purpose machinery</td>
                <td>
                  <a href="#editRfq" data-toggle="modal" class="btn btn-primary btn-sm">Edit</a>
                  <!-- Note: Untuk tombol oke
                  Pada tombol oke ini nantinya setelah rfq yang sudah di cek saat di klik tombol oke nya akan menghilang (bukan terhapus) dari tabel RFQ List
                  -->
                  <a href="#" class="btn btn-default btn-sm">Oke</a>
                </td>
              </tr>
              <tr>
                <td><a href="post-buy-lead.html">xx-123-xx</a></td>
                <td>JKT-051</td>
                <td>Tripod Leg</td>
                <td>2500 Buah</td>
                <td>Manufacture of optical instruments and photographic equipment</td>
                <td>
                  <a href="#editRfq" data-toggle="modal" class="btn btn-primary btn-sm">Edit</a>
                  <!-- Note: Untuk tombol oke
                  Pada tombol oke ini nantinya setelah rfq yang sudah di cek saat di klik tombol oke nya akan menghilang (bukan terhapus) dari tabel RFQ List
                  -->
                  <a href="#" class="btn btn-default btn-sm">Oke</a>
                </td>
              </tr>
              <tr>
                <td><a href="post-buy-lead.html">xx-123-xx</a></td>
                <td>TGR-091</td>
                <td>Plat</td>
                <td>5400 Buah</td>
                <td>Manufacture of basic iron and steel</td>
                <td>
                  <a href="#editRfq" data-toggle="modal" class="btn btn-primary btn-sm">Edit</a>
                  <!-- Note: Untuk tombol oke
                  Pada tombol oke ini nantinya setelah rfq yang sudah di cek saat di klik tombol oke nya akan menghilang (bukan terhapus) dari tabel RFQ List
                  -->
                  <a href="#" class="btn btn-default btn-sm">Oke</a>
                </td>
              </tr>
              <tr>
                <td><a href="post-buy-lead.html">xx-123-xx</a></td>
                <td>GRG-021</td>
                <td>Natrium Karbonat for Mirror Production</td>
                <td>100 Kg</td>
                <td>Manufacture of glass and glass products</td>
                <td>
                  <a href="#editRfq" data-toggle="modal" class="btn btn-primary btn-sm">Edit</a>
                  <!-- Note: Untuk tombol oke
                  Pada tombol oke ini nantinya setelah rfq yang sudah di cek saat di klik tombol oke nya akan menghilang (bukan terhapus) dari tabel RFQ List
                  -->
                  <a href="#" class="btn btn-default btn-sm">Oke</a>
                </td>
              </tr>
              <tr>
                <td><a href="post-buy-lead.html">xx-123-xx</a></td>
                <td>BMS-036</td>
                <td>Hard Plastic Appearance</td>
                <td>2000 Buah</td>
                <td>Manufacture of rubber products</td>
                <td>
                  <a href="#editRfq" data-toggle="modal" class="btn btn-primary btn-sm">Edit</a>
                  <!-- Note: Untuk tombol oke
                  Pada tombol oke ini nantinya setelah rfq yang sudah di cek saat di klik tombol oke nya akan menghilang (bukan terhapus) dari tabel RFQ List
                  -->
                  <a href="#" class="btn btn-default btn-sm">Oke</a>
                </td>
              </tr>
              <tr>
                <td><a href="post-buy-lead.html">xx-123-xx</a></td>
                <td>BMS-039</td>
                <td>Penimbang Zat</td>
                <td>2500 Buah</td>
                <td>Manufacture of other chemical products</td>
                <td>
                  <a href="#editRfq" data-toggle="modal" class="btn btn-primary btn-sm">Edit</a>
                  <!-- Note: Untuk tombol oke
                  Pada tombol oke ini nantinya setelah rfq yang sudah di cek saat di klik tombol oke nya akan menghilang (bukan terhapus) dari tabel RFQ List
                  -->
                  <a href="#" class="btn btn-default btn-sm">Oke</a>
                </td>
              </tr>
              <tr>
                <td><a href="post-buy-lead.html">xx-123-xx</a></td>
                <td>BMS-040</td>
                <td>Avtur</td>
                <td>52 Ton</td>
                <td>Manufacture of refined petroleum products</td>
                <td>
                  <a href="#editRfq" data-toggle="modal" class="btn btn-primary btn-sm">Edit</a>
                  <!-- Note: Untuk tombol oke
                  Pada tombol oke ini nantinya setelah rfq yang sudah di cek saat di klik tombol oke nya akan menghilang (bukan terhapus) dari tabel RFQ List
                  -->
                  <a href="#" class="btn btn-default btn-sm">Oke</a>
                </td>
              </tr>
              <tr>
                <td><a href="post-buy-lead.html">xx-123-xx</a></td>
                <td>BMS-041</td>
                <td>Batubara</td>
                <td>10 Ton</td>
                <td>Manufacture of coke oven products</td>
                <td>
                  <a href="#editRfq" data-toggle="modal" class="btn btn-primary btn-sm">Edit</a>
                  <!-- Note: Untuk tombol oke
                  Pada tombol oke ini nantinya setelah rfq yang sudah di cek saat di klik tombol oke nya akan menghilang (bukan terhapus) dari tabel RFQ List
                  -->
                  <a href="#" class="btn btn-default btn-sm">Oke</a>
                </td>
              </tr>
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
