@extends('layouts.user.app')

@section('content')
  @include('layouts.user.navbar')
  
  <div id="main" class="container-fluid">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12 ">
        <h1 class="main-title no-margin-top"><strong>Plate Material - Rp50.000.000</strong></h1>
        <h4>Quotation :</h4>
      </div>
      <!--<div class="col-md-12 col-sm-12 col-xs-12 margin-bottom">
        <a href="#addPbl" data-toggle="modal" class="btn btn-primary">Add Post Buy Lead</a>
        <a href="#addUw" data-toggle="modal" class="btn btn-primary">Add Unit</a>
      </div>-->
      <div class="col-md-9 col-sm-12 col-xs-12">
        <div class="table-responsive">
          <!-- <table id="quotation"  class="table table-bordered table-hover table-middle"> kalo dipake js quotation responsive di mobile jadi jelek, tapi jadi gak bisa di sort -->
          <!--<table id="listQuote" class="table responsive dt-responsive table-bordered table-middle" cellspacing="0" width="100%">-->
          <table id="tableItemQuotation" class="table responsive dt-responsive table-bordered table-middle">
            <thead class="bg-white">
              <tr>
                <th>Company Name</th>
                <th>Delivery Time</th>
                <th>Shipping Term</th>
                <th>Quote</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>PT Agung Aja</td>
                <td>20 Hari</td>
                <td>FOB</td>
                <td>Rp59.000.000</td>
                <td>
                  <a href="#detailPbl" data-toggle="modal" class="btn btn-default btn-sm">Detail</a>
                </td>
              </tr>
              <tr>
                <td>PT Guna Sejahtera</td>
                <td>20 Hari</td>
                <td>FOB</td>
                <td>Rp56.000.000</td>
                <td>
                  <a href="#detailPbl" data-toggle="modal" class="btn btn-default btn-sm">Detail</a>
                </td>
              </tr>
              <tr>
                <td>PT Aku Kau Dan Kua</td>
                <td>20 Hari</td>
                <td>FOB</td>
                <td>Rp55.900.000</td>
                <td>
                  <a href="#detailPbl" data-toggle="modal" class="btn btn-default btn-sm">Detail</a>
                </td>
              </tr>
              <tr>
                <td>PT Suka Makan</td>
                <td>20 Hari</td>
                <td>FOB</td>
                <td>Rp55.800.000</td>
                <td>
                  <a href="#detailPbl" data-toggle="modal" class="btn btn-default btn-sm">Detail</a>
                </td>
              </tr>
              <tr>
                <td>PT Cinta Damai</td>
                <td>20 Hari</td>
                <td>FOB</td>
                <td>Rp55.700.000</td>
                <td>
                  <a href="#detailPbl" data-toggle="modal" class="btn btn-default btn-sm">Detail</a>
                </td>
              </tr>
              <tr>
                <td>PT Sejahtera Guna</td>
                <td>20 Hari</td>
                <td>FOB</td>
                <td>Rp55.600.000</td>
                <td>
                  <a href="#detailPbl" data-toggle="modal" class="btn btn-default btn-sm">Detail</a>
                </td>
              </tr>
              <tr>
                <td>PT Simulasi Saja</td>
                <td>20 Hari</td>
                <td>FOB</td>
                <td>Rp55.500.000</td>
                <td>
                  <a href="#detailPbl" data-toggle="modal" class="btn btn-default btn-sm">Detail</a>
                </td>
              </tr>
              <tr>
                <td>PT Baik Sekali</td>
                <td>20 Hari</td>
                <td>FOB</td>
                <td>Rp55.400.000</td>
                <td>
                  <a href="#detailPbl" data-toggle="modal" class="btn btn-default btn-sm">Detail</a>
                </td>
              </tr>
              <tr>
                <td>PT Guna Sejahtera</td>
                <td>20 Hari</td>
                <td>FOB</td>
                <td>Rp55.300.000</td>
                <td>
                  <a href="#detailPbl" data-toggle="modal" class="btn btn-default btn-sm">Detail</a>
                </td>
              </tr>
              <tr>
                <td>
                  <a href="detail-item.html">PT Sindang Mulia</a>
                </td>
                <td>20 Hari</td>
                <td>FOB</td>
                <td>Rp53.000.000</td>
                <td>
                  <a href="#detailPbl" data-toggle="modal" class="btn btn-default btn-sm">Detail</a>
                  <a href="#" class="btn btn-success btn-sm accept-item">Accept</a>
                  <a href="#meetingReq" data-toggle="modal" class="btn btn-primary btn-sm">Meeting Schedule</a>
                  <a href="#rejectOffer" data-toggle="modal" class="btn btn-danger btn-sm">Reject</a>
                  <a href="../../storage/sample.pdf" class="btn btn-warning btn-sm">Download Quote</a>
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
                  <label>Filter By Section</label>
                  <select class="form-control selectpicker" data-live-search="true">
                    <option value="">Choose section</option>
                    <option value="1" selected="">Mining and quarrying</option>
                    <option value="2">Manufacturing</option>
                    <option value="3">Electricity, gas, steam, and air conditioner supply</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>Filter By Division</label>
                  <select class="form-control selectpicker" data-live-search="true">
                    <option value="">Choose divison</option>
                    <option value="1" selected="">Manufacture of food products</option>
                    <option value="2">Forestry and logging</option>
                    <option value="3">Fishing and aquaculture</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Filter company only for approved vendor
                  </label>
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
            <a href="post-buy-lead.html" class="btn btn-orange btn-lg padding-transition active-orange no-border-radius">
              <i class="pull-left fa fa-pencil-square padding-top-2px padding-right-8px"></i> <span>Post Buy Lead</span>
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

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <a class="btn btn-warning btn-sm" href="post-buy-lead.html"><i class="fa fa-arrow-left"></i> Back</a>
      </div>
    </div>
  </div>

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
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Revise Quote</h4>
        </div>
        <div class="modal-body">
          <form>
            <div class="row">
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>Quote</label>
                  <div class="input-group">
                    <span class="input-group-addon">Rp</span>
                    <input type="text" class="form-control" value="52.000.000">
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>Delivery Time</label>
                  <input type="text" class="form-control" value="20 Hari">
                </div>
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>Shipping Term</label>
                  <select class="form-control selectpicker" data-live-search="true">
                    <option value="">Select Shipping Term</option>
                    <option value="fob" selected="">FOB – Free on Board</option>
                    <option value="exw">EXW – Ex Works</option>
                    <option value="fca">FCA – Free Carrier</option>
                    <option value="cpt">CPT – Carriage Paid To</option>
                    <option value="cip">CIP – Carriage and Insurance Paid to</option>
                    <option value="dat">DAT – Delivered At Terminal</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label class="btn btn-primary btn-file">
                    Choose Document <input type="file" class="hidden">
                  </label>
                  <p class="help-block">Format document .docs, .xls, and .pdf</p>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary send-quote" data-dismiss="modal">Send</button>
        </div>
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
          <button type="button" class="btn btn-primary add-ms" data-dismiss="modal">Send</button>
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
              <th>Estimated Budget</th>
              <td>:</td>
              <td>Rp50.000.000</td>
            </tr>
            <tr>
              <th>City</th>
              <td>:</td>
              <td>Jakarta</td>
            </tr>
            <tr>
              <th>Shipping Term</th>
              <td>:</td>
              <td>FOB at Jakarta</td>
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
              <th>Delivery Date</th>
              <td>:</td>
              <td>30 April 2017</td>
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
