@extends('layouts.user.app')

@section('content')
  @include('layouts.user.navbar')
  
  <div id="main" class="container-fluid">
    <div class="row">
      <div class="col-md-9 col-sm-12 col-xs-12">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-justified" role="tablist">
          <li role="presentation" class="active"><a href="#post_buy_lead" aria-controls="post_buy_lead" role="tab" data-toggle="tab">Post Buy Lead</a></li>
          <li role="presentation"><a href="#buy_lead_list" aria-controls="buy_lead_list" role="tab" data-toggle="tab">Buy Lead List</a></li>
        </ul>
      </div>
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="post_buy_lead">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <h1 class="main-title no-margin-top">Post Buy Lead</h1>
          </div>
          <div class="col-md-4 col-sm-12 col-xs-12 margin-bottom">
            <a href="#addPbl" data-toggle="modal" class="btn btn-primary btn-responsive">Post Buy Lead</a>
            <a href="#addUw" data-toggle="modal" class="btn btn-primary btn-responsive">Add Unit</a>
            <a href="history-rfq.html" class="btn btn-primary btn-responsive">Buy Lead History</a>
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label>Search Item</label>
                  <input type="text" id="searchItem" class="form-control">
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label>Search User</label>
                  <input type="text" id="searchStaff" class="form-control">
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label>Filter User</label>
                  <select class="form-control">
                    <option value="">Select staff</option>
                    <option value="">Sule</option>
                    <option value="">Maman</option>
                    <option value="">Andika</option>
                    <option value="">Julaeha</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-9 col-sm-12 col-xs-12">
            <div class="table-responsive">
              <table id="Tablepbl" class="table table-middle table-bordered table-hover">
                <thead class="bg-white">
                  <tr>
                    <th>No</th>
                    <th>Item</th>
                    <th>User</th>
                    <th>Amount</th>
                    <th>Total Price</th>
                    <th>Shipping Term</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Biji Kedelai</td>
                    <td>Arifan</td>
                    <td>10 Ton</td>
                    <td>Rp 45.000.000</td>
                    <td>DDP</td>
                    <td>
                      <span class="btn btn-warning btn-sm">
                        <i class="fa fa-clock-o"></i>
                      </span>
                      <span style="display: none;">Pending</span>
                    </td>
                    <td>
                      <a href="procurement-item.html" class="btn btn-default btn-sm">Detail</a>
                      <a href="#confirmRelease" class="btn btn-default btn-sm" data-toggle="modal">Release</a>
                      <br><br>
                      <a href="#editPbl" data-toggle="modal" class="btn btn-primary btn-sm">Modify</a>
                      <a href="#deletePbl" data-toggle="modal" class="btn btn-danger btn-sm">Cancel</a>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Pupuk Organik</td>
                    <td>Lusi</td>
                    <td>7 Ton</td>
                    <td>Rp 35.000.000</td>
                    <td>DES</td>
                    <td>
                      <span class="btn btn-warning btn-sm">
                        <i class="fa fa-clock-o"></i>
                      </span>
                      <span style="display: none;">Pending</span>
                    </td>
                    <td>
                      <a href="procurement-item.html" class="btn btn-default btn-sm">Detail</a>
                      <a href="#confirmRelease" class="btn btn-default btn-sm" data-toggle="modal">Release</a>
                      <br><br>
                      <a href="#editPbl" data-toggle="modal" class="btn btn-primary btn-sm">Modify</a>
                      <a href="#deletePbl" data-toggle="modal" class="btn btn-danger btn-sm">Cancel</a>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Bibit Padi</td>
                    <td>Wiranto</td>
                    <td>13 Ton</td>
                    <td>Rp 88.000.000</td>
                    <td>FAS</td>
                    <td>
                      <span class="btn btn-warning btn-sm">
                        <i class="fa fa-clock-o"></i>
                      </span>
                      <span style="display: none;">Pending</span>
                    </td>
                    <td>
                      <a href="procurement-item.html" class="btn btn-default btn-sm">Detail</a>
                      <a href="#confirmRelease" class="btn btn-default btn-sm" data-toggle="modal">Release</a>
                      <br><br>
                      <a href="#editPbl" data-toggle="modal" class="btn btn-primary btn-sm">Modify</a>
                      <a href="#deletePbl" data-toggle="modal" class="btn btn-danger btn-sm">Cancel</a>
                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Pupuk Kandang</td>
                    <td>Andhika</td>
                    <td>6.5 Ton</td>
                    <td>Rp 35.000.000</td>
                    <td>CIF</td>
                    <td>
                      <span class="btn btn-warning btn-sm">
                        <i class="fa fa-clock-o"></i>
                      </span>
                      <span style="display: none;">Pending</span>
                    </td>
                    <td>
                      <a href="procurement-item.html" class="btn btn-default btn-sm">Detail</a>
                      <a href="#confirmRelease" class="btn btn-default btn-sm" data-toggle="modal">Release</a>
                      <br><br>
                      <a href="#editPbl" data-toggle="modal" class="btn btn-primary btn-sm">Modify</a>
                      <a href="#deletePbl" data-toggle="modal" class="btn btn-danger btn-sm">Cancel</a>
                    </td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Bibit Teh</td>
                    <td>Arifan</td>
                    <td>10 Ton</td>
                    <td>Rp 100.000.000</td>
                    <td>CPT</td>
                    <td>
                      <span class="btn btn-warning btn-sm">
                        <i class="fa fa-clock-o"></i>
                      </span>
                      <span style="display: none;">Pending</span>
                    </td>
                    <td>
                      <a href="procurement-item.html" data-toggle="modal" class="btn btn-default btn-sm">Detail</a>
                      <a href="#confirmRelease" class="btn btn-default btn-sm" data-toggle="modal">Release</a>
                      <br><br>
                      <a href="#editPbl" data-toggle="modal" class="btn btn-primary btn-sm">Modify</a>
                      <a href="#deletePbl" data-toggle="modal" class="btn btn-danger btn-sm">Cancel</a>
                    </td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Beras Kualitas Terbaik</td>
                    <td>Fiki</td>
                    <td>10 Ton</td>
                    <td>Rp 500.000.000</td>
                    <td>CFR</td>
                    <td>
                      <span class="btn btn-warning btn-sm">
                        <i class="fa fa-clock-o"></i>
                      </span>
                      <span style="display: none;">Pending</span>
                    </td>
                    <td>
                      <a href="procurement-item.html" class="btn btn-default btn-sm">Detail</a>
                      <a href="#confirmRelease" class="btn btn-default btn-sm" data-toggle="modal">Release</a>
                      <br><br>
                      <a href="#editPbl" data-toggle="modal" class="btn btn-primary btn-sm">Modify</a>
                      <a href="#deletePbl" data-toggle="modal" class="btn btn-danger btn-sm">Cancel</a>
                    </td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>Plate Material</td>
                    <td>Arifan</td>
                    <td>2 Ton</td>
                    <td>Rp 20.000.000</td>
                    <td>FOB</td>
                    <td>
                      <span class="btn btn-success btn-sm">
                        <i class="fa fa-check"></i>
                      </span>
                      <span style="display: none;">Done</span>
                    </td>
                    <td>
                      <a href="procurement-item.html" class="btn btn-default btn-sm">Detail</a>
                      <a href="#" class="btn btn-default btn-sm" disabled>Approved</a>
                    </td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>Pupuk Anorganik</td>
                    <td>Diki</td>
                    <td>8 Ton</td>
                    <td>Rp 31.000.000</td>
                    <td>DES</td>
                    <td>
                      <span class="btn btn-success btn-sm">
                        <i class="fa fa-check"></i>
                      </span>
                      <span style="display: none;">Done</span>
                    </td>
                    <td>
                      <a href="procurement-item.html" class="btn btn-default btn-sm">Detail</a>
                      <a href="#" class="btn btn-default btn-sm" disabled="disabled">Approved</a>
                    </td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>Biji Kelapa</td>
                    <td>Maki</td>
                    <td>3 Ton</td>
                    <td>Rp 26.000.000</td>
                    <td>DDU</td>
                    <td>
                      <span class="btn btn-success btn-sm">
                        <i class="fa fa-check"></i>
                      </span>
                      <span style="display: none;">Done</span>
                    </td>
                    <td>
                      <a href="procurement-item.html" class="btn btn-default btn-sm">Detail</a>
                      <a href="#" class="btn btn-default btn-sm" disabled>Approved</a>
                    </td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>Pupuk High Class</td>
                    <td>Joko</td>
                    <td>9 Ton</td>
                    <td>Rp 38.000.000</td>
                    <td>FCA</td>
                    <td>
                      <span class="btn btn-success btn-sm">
                        <i class="fa fa-check"></i>
                      </span>
                      <span style="display: none;">Done</span>
                    </td>
                    <td>
                      <a href="procurement-item.html" class="btn btn-default btn-sm">Detail</a>
                      <a href="#" class="btn btn-default btn-sm" disabled>Approved</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12 margin-top">
                <div class="table-responsive">
                  <table id="unitPbl" class="table table-middle table-bordered table-hover">
                    <thead class="bg-white">
                      <tr>
                        <th>No</th>
                        <th>Unit</th>
                        <th>Description</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Kg</td>
                        <td>Kilogram</td>
                        <td>
                          <a href="#editUw" data-toggle="modal" class="btn btn-primary btn-sm">Edit</a>
                          <a href="#deleteUw" data-toggle="modal" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>L</td>
                        <td>Liter</td>
                        <td>
                          <a href="#editUw" data-toggle="modal" class="btn btn-primary btn-sm">Edit</a>
                          <a href="#deleteUw" data-toggle="modal" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>T</td>
                        <td>Ton</td>
                        <td>
                          <a href="#editUw" data-toggle="modal" class="btn btn-primary btn-sm">Edit</a>
                          <a href="#deleteUw" data-toggle="modal" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Truck</td>
                        <td>Truck</td>
                        <td>
                          <a href="#editUw" data-toggle="modal" class="btn btn-primary btn-sm">Edit</a>
                          <a href="#deleteUw" data-toggle="modal" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td>M</td>
                        <td>Meter</td>
                        <td>
                          <a href="#editUw" data-toggle="modal" class="btn btn-primary btn-sm">Edit</a>
                          <a href="#deleteUw" data-toggle="modal" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                      </tr>
                      <tr>
                        <td>6</td>
                        <td>Cm</td>
                        <td>Centimeter</td>
                        <td>
                          <a href="#editUw" data-toggle="modal" class="btn btn-primary btn-sm">Edit</a>
                          <a href="#deleteUw" data-toggle="modal" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                      </tr>
                      <tr>
                        <td>7</td>
                        <td>Mm</td>
                        <td>Milimeter</td>
                        <td>
                          <a href="#editUw" data-toggle="modal" class="btn btn-primary btn-sm">Edit</a>
                          <a href="#deleteUw" data-toggle="modal" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                      </tr>
                      <tr>
                        <td>8</td>
                        <td>Dm</td>
                        <td>Desimeter</td>
                        <td>
                          <a href="#editUw" data-toggle="modal" class="btn btn-primary btn-sm">Edit</a>
                          <a href="#deleteUw" data-toggle="modal" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                      </tr>
                      <tr>
                        <td>9</td>
                        <td>Gr</td>
                        <td>Gram</td>
                        <td>
                          <a href="#editUw" data-toggle="modal" class="btn btn-primary btn-sm">Edit</a>
                          <a href="#deleteUw" data-toggle="modal" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                      </tr>
                      <tr>
                        <td>10</td>
                        <td>Biji</td>
                        <td>Biji</td>
                        <td>
                          <a href="#editUw" data-toggle="modal" class="btn btn-primary btn-sm">Edit</a>
                          <a href="#deleteUw" data-toggle="modal" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div role="tabpanel" class="tab-pane" id="buy_lead_list">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <h1 class="main-title no-margin-top">Buy Lead List</h1>
          </div>

          <div class="col-md-12 col-sm-12 col-xs-12">
            <a href="history-rfq.html" class="btn btn-primary margin-bottom">Buy Lead History</a>
          </div>

          <div class="col-md-9 col-sm-12 col-xs-12">
            <div class="table-responsive">
              <table id="bll" class="table table-middle table-bordered table-hover">
                <thead class="bg-white">
                  <tr>
                    <th>Buy Lead ID</th>
                    <th>Buyer Name</th>
                    <th>Item</th>
                    <th>Delivery Time</th>
                    <th>Shipping Term</th>
                    <th>Total Price</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Jak-00101</td>
                    <td>PT Total Indonesia</td>
                    <td>Biji Kedelai</td>
                    <td>30 Days</td>
                    <td>DDP</td>
                    <td>Rp 45.000.000</td>
                    <td>
                      <span class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Success Job">
                        <i class="fa fa-handshake-o"></i>
                      </span>
                      <span style="display: none;">Success Job</span>
                    </td>
                    <td>
                      <a href="sales-item.html" class="btn btn-sm btn-default">Detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>Jak-00102</td>
                    <td>PT Salam Sehat Sejahtera</td>
                    <td>Pupuk Organik</td>
                    <td>30 Days</td>
                    <td>DES</td>
                    <td>Rp 35.000.000</td>
                    <td>
                      <span class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="Approved">
                        <i class="fa fa-check"></i>
                      </span>
                      <span style="display: none;">Approved</span>
                    </td>
                    <td>
                      <a href="sales-item.html" class="btn btn-sm btn-default">Detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>Jak-00122</td>
                    <td>PT Panca Karya</td>
                    <td>Bibit Padi</td>
                    <td>10 Days</td>
                    <td>FAS</td>
                    <td>Rp 88.000.000</td>
                    <td>
                      <span class="btn btn-sm btn-default" data-toggle="tooltip" data-placement="top" title="Waiting approve">
                        <i class="fa fa-question"></i>
                      </span>
                      <span style="display: none;">Waiting approve</span>
                    </td>
                    <td>
                      <a href="sales-item.html" class="btn btn-sm btn-default">Detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>Jak-00133</td>
                    <td>PT Kebun Makmur</td>
                    <td>Pupuk Kandang</td>
                    <td>20 Days</td>
                    <td>CIF</td>
                    <td>Rp 35.000.000</td>
                    <td>
                      <span class="btn btn-sm btn-default" data-toggle="tooltip" data-placement="top" title="Waiting approve">
                        <i class="fa fa-question"></i>
                      </span>
                      <span style="display: none;">Waiting approve</span>
                    </td>
                    <td>
                      <a href="sales-item.html" class="btn btn-sm btn-default">Detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>Jak-00144</td>
                    <td>PT Sayur Hijau</td>
                    <td>Bibit Teh</td>
                    <td>15 Days</td>
                    <td>CPT</td>
                    <td>Rp 100.000.000</td>
                    <td>
                      <span class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Pending">
                        <i class="fa fa-clock-o"></i>
                      </span>
                      <span style="display: none;">Pending</span>
                    </td>
                    <td>
                      <a href="sales-item.html" class="btn btn-sm btn-default">Detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>Jak-00155</td>
                    <td>PT Diffusion</td>
                    <td>Beras Terbaik</td>
                    <td>20 Days</td>
                    <td>CFR</td>
                    <td>Rp 500.000.000</td>
                    <td>
                      <span class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Pending">
                        <i class="fa fa-clock-o"></i>
                      </span>
                      <span style="display: none;">Pending</span>
                    </td>
                    <td>
                      <a href="sales-item.html" class="btn btn-sm btn-default">Detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>Jak-00155</td>
                    <td>PT Rakyat Sentosa</td>
                    <td>Plate Material</td>
                    <td>20 Days</td>
                    <td>FOB</td>
                    <td>Rp 20.000.000</td>
                    <td>
                      <span class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Pending">
                        <i class="fa fa-clock-o"></i>
                      </span>
                      <span style="display: none;">Pending</span>
                    </td>
                    <td>
                      <a href="sales-item.html" class="btn btn-sm btn-default">Detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>Jak-00155</td>
                    <td>PT Mari Berbenah</td>
                    <td>Pupuk Anorganik</td>
                    <td>20 Days</td>
                    <td>DES</td>
                    <td>Rp 31.000.000</td>
                    <td>
                      <span class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Already taken">
                        <i class="fa fa-times"></i>
                      </span>
                      <span style="display: none;">Already taken</span>
                    </td>
                    <td>
                      <a href="sales-item.html" class="btn btn-sm btn-default">Detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>Jak-00155</td>
                    <td>PT Rakyat Sentosa</td>
                    <td>Biji Kelapa</td>
                    <td>20 Days</td>
                    <td>DDU</td>
                    <td>Rp 26.000.000</td>
                    <td>
                      <span class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Already taken">
                        <i class="fa fa-times"></i>
                      </span>
                      <span style="display: none;">Already taken</span>
                    </td>
                    <td>
                      <a href="sales-item.html" class="btn btn-sm btn-default">Detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>Jak-00155</td>
                    <td>PT Makmur Sentosa</td>
                    <td>Pupuk Kandang</td>
                    <td>20 Days</td>
                    <td>FCA</td>
                    <td>Rp 38.000.000</td>
                    <td>
                      <span class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Already taken">
                        <i class="fa fa-times"></i>
                      </span>
                      <span style="display: none;">Already taken</span>
                    </td>
                    <td>
                      <a href="sales-item.html" class="btn btn-sm btn-default">Detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>Jak-00155</td>
                    <td>PT Cahaya Makmur</td>
                    <td>Biji Kedelai</td>
                    <td>20 Days</td>
                    <td>DDP</td>
                    <td>Rp 38.000.000</td>
                    <td>
                      <span class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Already taken">
                        <i class="fa fa-times"></i>
                      </span>
                      <span style="display: none;">Already taken</span>
                    </td>
                    <td>
                      <a href="sales-item.html" class="btn btn-sm btn-default">Detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>Jak-00155</td>
                    <td>PT Rakyat Sentosa</td>
                    <td>Pupuk Organik</td>
                    <td>20 Days</td>
                    <td>DES</td>
                    <td>Rp 45.000.000</td>
                    <td>
                      <span class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Already taken">
                        <i class="fa fa-times"></i>
                      </span>
                      <span style="display: none;">Already taken</span>
                    </td>
                    <td>
                      <a href="sales-item.html" class="btn btn-sm btn-default">Detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>Jak-00155</td>
                    <td>PT Suka Makmur</td>
                    <td>Bibit Padi</td>
                    <td>20 Days</td>
                    <td>FAS</td>
                    <td>Rp 88.000.000</td>
                    <td>
                      <span class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Already taken">
                        <i class="fa fa-times"></i>
                      </span>
                      <span style="display: none;">Already taken</span>
                    </td>
                    <td>
                      <a href="sales-item.html" class="btn btn-sm btn-default">Detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>Jak-00155</td>
                    <td>PT Jaya Abadi</td>
                    <td>Bibit Teh</td>
                    <td>20 Days</td>
                    <td>CIF</td>
                    <td>Rp 20.000.000</td>
                    <td>
                      <span class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Already taken">
                        <i class="fa fa-times"></i>
                      </span>
                      <span style="display: none;">Already taken</span>
                    </td>
                    <td>
                      <a href="sales-item.html" data-toggle="modal" class="btn btn-sm btn-default">Detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>Jak-00155</td>
                    <td>PT Sawit Mekar</td>
                    <td>Biji Kelapa</td>
                    <td>20 Days</td>
                    <td>CPT</td>
                    <td>Rp 31.000.000</td>
                    <td>
                      <span class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Already taken">
                        <i class="fa fa-times"></i>
                      </span>
                      <span style="display: none;">Already taken</span>
                    </td>
                    <td>
                      <a href="sales-item.html" class="btn btn-sm btn-default">Detail</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="row">
              <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="row">
                  <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <label>Filter Section</label>
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
                      <label>Filter Division</label>
                      <select class="form-control selectpicker" data-live-search="true">
                        <option value="">Crop and animal production, hunting and related service activities</option>
                        <option value="1" selected="">Manufacture of food products</option>
                        <option value="2">Forestry and logging</option>
                        <option value="3">Fishing and aquaculture</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <label>Filter Status</label>
                      <select class="form-control selectpicker" multiple>
                        <option value="0">Pending</option>
                        <option value="1" selected="">Rejected</option>
                        <option value="2">Delayed</option>
                        <option value="3">Assigned</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Filter company by frequent buyer
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-sm-12 col-xs-12 hide-on-med-and-down">
        <ul class="no-ul-style menu-wrapper">
          <li>
            <a href="home.html" class="btn btn-orange btn-lg padding-transition no-border-radius">
              <i class="pull-left fa fa-home padding-top-2px padding-right-8px"></i> <span>Home</span>
            </a>
          </li>
          <li>
            <a href="post-buy-lead.html" class="btn btn-orange active-orange btn-lg padding-transition no-border-radius">
              <i class="pull-left fa fa-pencil-square padding-top-2px padding-right-8px"></i> <span>Buy Lead</span>
            </a>
          </li>
          <li>
            <a href="company-database.html" class="btn btn-orange btn-lg padding-transition no-border-radius">
              <i class="pull-left fa fa-building padding-top-2px padding-right-8px"></i> <span>Company Database</span>
            </a>
          </li>
          <li>
            <a href="meeting-schedule.html" class="btn btn-orange btn-lg padding-transition no-border-radius">
              <i class="pull-left fa fa-calendar padding-top-2px padding-right-8px"></i> <span>Meeting Schedule</span>
            </a>
          </li>
          <li>
            <a href="profile.html" class="btn btn-orange btn-lg padding-transition no-border-radius">
              <i class="pull-left fa fa-gear padding-top-2px padding-right-8px"></i> <span>Profile</span>
            </a>
          </li>
          <li>
            <a href="../home-login.html" class="btn btn-orange btn-lg padding-transition no-border-radius">
              <i class="pull-left fa fa-power-off padding-top-2px padding-right-8px"></i> <span>Logout</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Post Buy Lead -->
  <div class="modal fade" id="addPbl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Buy Lead</h4>
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
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>ID</th>
                      <th>Company Name</th>
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
              <div class="col-md-12 col-sm-12 col-xs-12">
                <label class="text-center">Business Category</label>
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
                  <select class="form-control selectpicker" data-live-search="true">
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
                  <label>Closed Date</label>
                  <input type="text" id="Editcd" class="form-control">
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
                  <label>Area (Airport, Seaport, &amp; Terminal)</label>
                  <select class="form-control selectpicker" data-live-search="true">
                    <option value="">Select Area (Airport, Seaport, &amp; Terminal)</option>
                    <option value="seota">Soekarno Hatta Airport (CGK)</option>
                    <option value="ngurahrarai">Ngurah Rai Airport (DPS)</option>
                    <option value="cirebon_port">Cirebon Port</option>
                    <option value="tpk_palaran_samarinda">TPK Palaran Samarinda Port</option>
                  </select>
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
                      <input type="checkbox"> Approved Vendor Only
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary add-pbl" data-dismiss="modal">Add</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Edit Post Buy Lead -->
  <div class="modal fade" id="editPbl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Edit Post Buy Lead</h4>
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
                      <th>Company Name</th>
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
              <div class="col-md-12 col-sm-12 col-xs-12">
                <label class="text-center">Business Category</label>
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
                  <select class="form-control selectpicker" data-live-search="true">
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
                  <label>Closed Date</label>
                  <input type="text" id="Editcd" class="form-control">
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

  <!-- Detail Post Buy Lead -->
  <div class="modal fade" id="detailPbl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
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
              <th>Broadcasted</th>
              <td>:</td>
              <td>
                <a href="#broadcastComp" data-toggle="modal" class="btn btn-primary btn-sm">View List</a>
              </td>
            </tr>
            <tr>
              <th>Short Description</th>
              <td>:</td>
              <td>Ini barang harus berkualitas bagus</td>
            </tr>
            <tr>
              <th>Business Category 1</th>
              <td>:</td>
              <td><a href="#bc1" data-toggle="modal" class="btn btn-primary btn-sm">View List</a></td>
            </tr>
            <tr>
              <th>Business Category 2</th>
              <td>:</td>
              <td><a href="#bc2" data-toggle="modal" class="btn btn-primary btn-sm">View List</a></td>
            </tr>
            <tr>
              <th>Unit</th>
              <td>:</td>
              <td>Ton</td>
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
              <th>Shipping Term</th>
              <td>:</td>
              <td>FOB at Jakarta</td>
            </tr>
            <tr>
              <th>Province</th>
              <td>:</td>
              <td>Banten</td>
            </tr>
            <tr>
              <th>City</th>
              <td>:</td>
              <td>Serang</td>
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
              <th>Area</th>
              <td>:</td>
              <td>Soekarno Hatta Airport</td>
            </tr>
            <tr>
              <th>Status</th>
              <td>:</td>
              <td><span class="text-danger"><strong>Not Yet Released</strong></span></td>
            </tr>
            <tr>
              <th>Document</th>
              <td>:</td>
              <td><a href="../../storage/sample.pdf" class="btn btn-primary btn-sm">Open Document</a></td>
            </tr>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Cancel Post Buy Lead -->
  <div class="modal fade" id="deletePbl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Are you sure want to cancel this?</h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-danger delete-pbl" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Add Unit Wegith -->
  <div class="modal fade" id="addUw" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Add Unit</h4>
        </div>
        <div class="modal-body">
          <form>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>Unit</label>
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>Description</label>
                  <textarea rows="6" class="form-control"></textarea>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary add-uw" data-dismiss="modal">Add</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Edit Unit Wegith -->
  <div class="modal fade" id="editUw" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Edit Unit</h4>
        </div>
        <div class="modal-body">
          <form>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>Unit</label>
                  <input type="text" class="form-control" value="Kg">
                </div>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>Description</label>
                  <textarea rows="6" class="form-control"></textarea>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary edit-uw" data-dismiss="modal">Save</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Delete Unit -->
  <div class="modal fade" id="deleteUw" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Are you sure want to delete this?</h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-danger delete-uw" data-dismiss="modal">Delete</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="broadcast" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Broadcast Company</h4>
        </div>
        <div class="modal-body">
          <table id="tableBroadcast" class="table table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>ID</th>
                <th>Company Name</th>
                <th>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> Select all
                    </label>
                  </div>
                </th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>JKT-02</td>
                <td>Arjuna Sanjaya</td>
                <td>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox">
                    </label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>JKT-01</td>
                <td>Adijaya Abadi</td>
                <td>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox">
                    </label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>JKT-05</td>
                <td>Malik Sentosa Selalu</td>
                <td>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox">
                    </label>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="checkbox">
            <label>
              <input type="checkbox"> Approved Vendor Only
            </label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal">Add</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="broadcastComp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Broadcasted Company</h4>
        </div>
        <div class="modal-body">
          <table id="listBroadcast" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>ID</th>
                <th>Company Name</th>
                <th>Business Category</th>
                <th>Status Vendor</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>JKT-02</td>
                <td>Arjuna Sanjaya</td>
                <td>Agriculture, forestry and fishing</td>
                <td><span class="text-success"><strong>Approved</strong></span></td>
              </tr>
              <tr>
                <td>2</td>
                <td>JKT-01</td>
                <td>Adijaya Abadi</td>
                <td>Agriculture, forestry and fishing</td>
                <td><span class="text-success"><strong>Approved</strong></span></td>
              </tr>
              <tr>
                <td>3</td>
                <td>JKT-05</td>
                <td>Malik Sentosa Selalu</td>
                <td>Agriculture, forestry and fishing</td>
                <td><span class="text-success"><strong>Approved</strong></span></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Detail Business Category 1 -->
  <div class="modal fade" id="bc1" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Detail Business Category</h4>
        </div>
        <div class="modal-body">
          <h4><strong>Section A</strong></h4>
          <h5>Agriculture, forestry and fishing</h5>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <a href="#division1" class="no-text-decoration" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="division1">Division 1 - Crop and animal production, hunting, and related service activities</a>
                  </h3>
                </div>
                <div id="division1" class="panel-body collapse">
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
                          <td>011</td>
                          <td>Growing of non prennial crops</td>
                        </tr>
                        <tr>
                          <td>013</td>
                          <td>Plant porpagation</td>
                        </tr>
                        <tr>
                          <td>014</td>
                          <td>Animal production</td>
                        </tr>
                        <tr>
                          <td>015</td>
                          <td>Mixed farming</td>
                        </tr>
                        <tr>
                          <td>016</td>
                          <td>Support activities to agriculture and post harvest crop activities</td>
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
                    <a href="#division2" class="no-text-decoration" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="division2">Division 2 - Forestry and logging</a>
                  </h3>
                </div>
                <div id="division2" class="panel-body collapse">
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
                          <td>021</td>
                          <td>Silviculture and other forestry activities</td>
                        </tr>
                        <tr>
                          <td>022</td>
                          <td>Logging</td>
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

  <!-- Detail Business Category 2 -->
  <div class="modal fade" id="bc2" tabindex="-1" role="dialog">
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

  <div id="mySidenav" class="sidenav hide-on-large-only">
    <div class="menu-content">
      <a href="../home-login.html">
        <i class="fa fa-power-off"></i> Logout
      </a>
      <a href="profile.html">
        <i class="fa fa-gear"></i> Profile
      </a>
      <a href="meeting-schedule.html">
        <i class="fa fa-calendar"></i> Meeting Schedule
      </a>
      <a href="company-database.html">
        <i class="fa fa-building"></i> Company Database
      </a>
      <a href="post-buy-lead.html">
        <i class="fa fa-pencil-square"></i> Post Buy Lead
      </a>
      <a href="home.html">
        <i class="fa fa-home"></i> Home
      </a>
      <a href="javascript:void(0)" id="nav-btn-close" onclick="closeNav()"><i class="fa fa-close"></i></a>
    </div>

    <a href="javascript:void(0)">
      <div class="menu-btn-container" id="nav-btn-open" onclick="openNav()">
        <div class="menu-btn">
          <i class="fa fa-bars"></i>
        </div>
      </div>
    </a>
  </div>

  @include('layouts.user.mobile-menu')
@endsection
