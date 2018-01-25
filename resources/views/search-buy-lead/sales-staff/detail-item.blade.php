@extends('layouts.user.app')

@section('content')
  @include('layouts.user.navbar')
    <div id="main" class="container-fluid">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 ">
          <h1 class="main-title no-margin-top"><strong>Buy Lead - Plate Material</strong></h1>
          <h4>Buy Lead:</h4>
        </div>
        <!--<div class="col-md-12 col-sm-12 col-xs-12 margin-bottom">
          <a href="#addPbl" data-toggle="modal" class="btn btn-primary">Add Post Buy Lead</a>
          <a href="#addUw" data-toggle="modal" class="btn btn-primary">Add Unit</a>
        </div>-->
        <div class="col-md-9 col-sm-12 col-xs-12">
          <div class="table-responsive">
            <table class="table table-middle table-bordered table-hover">
              <thead class="bg-white">
                <tr>
                  <th>Buyer Name</th>
                  <th>Delivery Time</th>
                  <th>Shipping Term</th>
                  <th>City</th>
                  <th>Estimated Budget</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>PT Agung Aja</td>
                  <td>30 Days</td>
                  <td>Franco</td>
                  <td>Jakarta</td>
                  <td>Rp 900.000.000</td>
                  <td>
                    <a href="#detailBuyLead" data-toggle="modal" class="btn btn-sm btn-default">Detail</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-md-9 col-sm-12 col-xs-12">
          <h4>Quotation:</h4>
        </div>
        <div class="col-md-9 col-sm-12 col-xs-12">
          <div class="table-responsive">
            <!-- <table id="quotation"  class="table table-bordered table-hover table-middle"> kalo dipake js quotation responsive di mobile jadi jelek, tapi jadi gak bisa di sort -->
            <table class="table responsive dt-responsive table-bordered table-middle">
              <thead class="bg-white">
                <tr>
                  <th>Buyer Name</th>
                  <th>Delivery Time</th>
                  <th>Shipping Term</th>
                  <th>City</th>
                  <th>Estimated Budget</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr class="bg-success">
                  <td>PT Agung Aja</td>
                  <td>20 Days</td>
                  <td>FOB</td>
                  <td>Jakarta</td>
                  <td>Rp 52.850.000</td>
                  <td>
                    <a href="#detailPbl" data-toggle="modal" class="btn btn-default btn-sm">Detail</a>
                    <a href="#addMs" data-toggle="modal" class="btn btn-primary btn-sm">Meeting Request</a>
                    <a href="../../storage/sample.pdf" class="btn btn-warning btn-sm">Download Quote</a>
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
                    <table class="table responsive dt-responsive table-bordered table-middle" cellspacing="0" width="100%">
                      <thead class="bg-white">
                        <tr>
                          <th>Revision</th>
                          <th>Buyer Name</th>
                          <th>Delivery Time</th>
                          <th>Shipping Term</th>
                          <th>City</th>
                          <th>Estimated Budget</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>PT Agung Aja</td>
                          <td>20 Days</td>
                          <td>FOB</td>
                          <td>Jakarta</td>
                          <td>Rp 53.000.000</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>PT Agung Aja</td>
                          <td>20 Days</td>
                          <td>FOB</td>
                          <td>Jakarta</td>
                          <td>Rp 52.900.000</td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>PT Agung Aja</td>
                          <td>20 Days</td>
                          <td>FOB</td>
                          <td>Jakarta</td>
                          <td>Rp 52.850.000</td>
                        </tr>
                      </tbody>
                    </table>
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
                    <a href="profile.html" class="btn btn-sm btn-default">Open Company Profile</a>
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
                    <a href="#" class="btn btn-sm btn-default">Download Purchase Order</a>
                    <a href="#reviseQuote" data-toggle="modal" class="btn btn-sm btn-default">Revise Quotation</a>
                    <a href="meeting-summary.html" class="btn btn-sm btn-default">Meeting Summary</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="margin-top">
            <div class="panel panel-white post">
              <div class="post-heading col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-1 col-sm-2 col-xs-3 no-padding image">
                  <img src="http://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
                </div>
                <div class="col-md-8 col-sm-8 col-xs-8 meta no-padding">
                  <div class="title h5">
                    <b>PT Agung Aja</b> - John Legend (Seller)
                  </div>
                  <h6 class="text-muted time">30 minute ago</h6>
                </div>
              </div>
              <div class="post-description">
                <p>Kualitas dari barang kami dijamin pak dengan harga yang sesuai</p>
              </div>
              <a href="#replyMessage" class="no-text-decoration" data-toggle="modal">
                <div class="reply">
                  <i class="fa fa-reply"></i><span class="padding-btn-rl">reply</span>
                </div>
              </a>

              <div class="reply-box col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
                <ul class="reply-list">
                  <li>
                    <div class="reply-heading">
                      <div class="no-padding image col-md-1 col-sm-2 col-xs-3">
                        <img src="http://bootdey.com/img/Content/user_3.jpg" class="img-circle avatar" alt="user profile image">
                      </div>
                      <div>
                        <div class="title h5">
                          <b>PT Citra Tubindo Tbk</b> - Jason Statham (Buyer)
                        </div>
                        <h6 class="text-muted time">10 minute ago</h6>
                      </div>
                    </div>
                    <div class="post-description">
                      <p>Menggunakan bahan-bahan dasar yang bagaimana pak?</p>
                    </div>
                    <a href="" class="no-text-decoration">
                      <div class="reply">
                        <i class="fa fa-reply"></i><span class="padding-btn-rl">reply</span>
                      </div>
                    </a>
                    <hr>
                  </li>
                  <li>
                    <div class="reply-heading">
                      <div class="no-padding image col-md-1 col-sm-2 col-xs-3">
                         <img src="http://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
                      </div>
                      <div>
                        <div class="title h5 ">
                          <b>PT Agung Aja</b> - John Legend (Seller)
                        </div>
                        <h6 class="text-muted time">5 minute ago</h6>
                      </div>
                    </div>
                    <div class="post-description">
                      <p> @Jason Satham Menggunakan bahan-bahan dasar antimainstream pak!</p>
                    </div>
                    <a href="" class="no-text-decoration">
                      <div class="reply">
                        <i class="fa fa-reply"></i><span class="padding-btn-rl">reply</span>
                      </div>
                    </a>
                    <hr>
                  </li>
                </ul>
              </div>
            </div>

            <form class="margin-top">
              <h4>Add Discussion :</h4>
              <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12">
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label></label>
                        <textarea rows="6" class="form-control no-resize" placeholder="Your discussion..."></textarea>
                      </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <a href="#" class="btn btn-primary">Send</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
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
              <a href="buy-lead-list.html" class="btn btn-orange btn-lg padding-transition active-orange no-border-radius">
                <i class="pull-left fa fa-pencil-square padding-top-2px padding-right-8px"></i> <span>Buy Lead List</span>
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
        <div class="col-md-12 col-sm-12 col-xs-12 margin-top">
          <a class="btn btn-warning btn-sm" href="item.html"><i class="fa fa-arrow-left"></i> Back</a>
        </div>
      </div>
    </div>

    <!-- Reject Confirmarion -->
    <div class="modal fade" id="rejectOffer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Are you sure want to reject this buy lead?</h4>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-danger reject-offer" data-dismiss="modal">Reject</button>
          </div>
        </div>
      </div>
    </div>

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

    <!-- Revise Quotation -->
    <div class="modal fade" id="reviseQuote" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Revise Quotation</h4>
          </div>
          <div class="modal-body">
            <form>
              <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Item</label>
                    <input type="text" class="form-control" value="Plate Material" disabled>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Amount</label>
                    <input type="text" class="form-control" value="50">
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Unit</label>
                    <select class="form-control" disabled>
                      <option value="">Select Unit</option>
                      <option value="kg" selected>Kg</option>
                      <option value="ton">Ton</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Estimated Budget</label>
                    <div class="input-group">
                      <span class="input-group-addon">Rp</span>
                      <input type="text" class="form-control" value="50.000.000">
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>City</label>
                    <select class="form-control selectpicker" data-live-search="true">
                      <option value="">Select City</option>
                      <option value="ambon" selected="">Ambon</option>
                      <option value="jakarta">Jakarta</option>
                      <option value="serang">Serang</option>
                      <option value="madura">Madura</option>
                      <option value="surabaya">Surabaya</option>
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
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Delivery Time</label>
                    <div class="input-group">
                      <input type="number" class="form-control">
                      <span class="input-group-addon">Days</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
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
                    <label>Payment Term</label>
                    <input type="text" class="form-control" value="Masih cicil 3x bayar">
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

    <!-- Detail Quotation -->
    <div class="modal fade" id="detailPbl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Detail Quotation</h4>
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
                <th>Unit</th>
                <td>:</td>
                <td>Kg</td>
              </tr>
              <tr>
                <th>Estimated Budget</th>
                <td>:</td>
                <td>Rp 50.000.000</td>
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
                <th>Delivery Time</th>
                <td>:</td>
                <td>30 Days</td>
              </tr>
              <tr>
                <th>Area</th>
                <td>:</td>
                <td>Soekarno Hatta Airport (CGK)</td>
              </tr>
              <tr>
                <th>Payment Term</th>
                <td>:</td>
                <td>Masih cicil 3x bayar</td>
              </tr>
              <tr>
                <th>Document</th>
                <td>:</td>
                <td><a href="../../storage/sample.pdf" class="btn btn-primary btn-xs">Download Document</a></td>
              </tr>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Add Meeting Summary -->
    <div class="modal fade" id="addMs" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
    <div class="modal fade" id="detailBuyLead" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                  <a href="#broadcastComp" data-toggle="modal" class="btn btn-primary btn-xs">View List</a>
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
                <td><a href="#bc1" data-toggle="modal" class="btn btn-primary btn-xs">View List</a></td>
              </tr>
              <tr>
                <th>Business Category 2</th>
                <td>:</td>
                <td><a href="#bc2" data-toggle="modal" class="btn btn-primary btn-xs">View List</a></td>
              </tr>
              <tr>
                <th>Unit</th>
                <td>:</td>
                <td>Ton</td>
              </tr>
              <tr>
                <th>Estimated Budget</th>
                <td>:</td>
                <td>Rp 50.000.000</td>
              </tr>
              <tr>
                <th>Payment Term</th>
                <td>:</td>
                <td>Down Payment 50%, Installment 6 Months</td>
              </tr>
              <tr>
                <th>Shipping Term</th>
                <td>:</td>
                <td>FOB</td>
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
                <td><span class="text-success"><strong>Released</strong></span></td>
              </tr>
              <tr>
                <th>Document</th>
                <td>:</td>
                <td><a href="../../storage/sample.pdf" class="btn btn-primary btn-xs">Download Document</a></td>
              </tr>
            </table>
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
                    <th>Buyer Name</th>
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
        <a href="home.html">
          <i class="fa fa-home"></i> Home
        </a>
        <a href="buy-lead-list.html">
          <i class="fa fa-pencil-square"></i> Buy Lead List
        </a>
        <a href="company-database.html">
          <i class="fa fa-building"></i> Company Database
        </a>
        <a href="meeting-schedule.html">
          <i class="fa fa-calendar"></i> Meeting Schedule
        </a>
        <a href="profile.html">
          <i class="fa fa-gear"></i> Profile
        </a>
        <a href="../home-login.html">
          <i class="fa fa-power-off"></i> Logout
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
