@extends('layouts.user.app')

@section('content')
  @include('layouts.user.navbar')

  <div id="main" class="container-fluid">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <h1 class="main-title no-margin-top"><strong>New Discussion</strong></h1>
        <h4></h4>
      </div>
      <div class="col-md-9 col-sm-12 col-xs-12">
        <div class="table-responsive">
          <table id="cmpDb" class="table table-bordered table-hover table-middle">
            <thead class="bg-white">
              <tr>
                <th>Quotation ID</th>
                <th>Company Name</th>
                <th>Item</th>
              </tr>
            </thead>
            <tbody>
              <tr>
               <td>
                 <a href="detail-item.html">BY001-AGU-Q01</a>
               </td>
                <td>PT Agung Aja</td>
                <td>Plate Material</td>
              </tr>
              <tr>
                <td>
                  <a href="detail-item.html">BY001-AGU-Q01</a>
                </td>
                <td>PT Guna Sejahtera</td>
                <td>Vehicle Spareparts</td>
              </tr>
              <tr>
                <td>
                  <a href="detail-item.html">BY001-AGU-Q01</a>
                </td>
                <td>PT Aku Kau Dan Kua</td>
                <td>Fishing Net</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- <div class="col-md-7 col-sm-12 col-xs-12">
        <div class="panel panel-white post">
          <div class="post-heading col-md-12 col-sm-12 col-xs-12">
            <div class="col-md-2 col-sm-2 col-xs-3 no-padding image">
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
                  <div class="no-padding image col-md-2 col-sm-2 col-xs-3">
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
                  <div class="no-padding image col-md-2 col-sm-2 col-xs-3">
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
      </div> -->
      <div class="col-md-3 col-sm-12 col-xs-12 hide-on-med-and-down">
        <ul class="no-ul-style menu-wrapper">
          <li>
            <a href="home.html" class="btn btn-orange btn-lg padding-transition no-border-radius">
              <i class="pull-left fa fa-home padding-top-2px padding-right-8px"></i> <span>Home</span>
            </a>
          </li>
          <li>
            <a href="post-buy-lead.html" class="btn btn-orange btn-lg padding-transition no-border-radius">
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
        <a href="item.html" class="btn btn-warning btn-sm"><i class="fa fa-arrow-left"></i> Back</a>
      </div>
    </div>
  </div>

  <!-- Edit Discussion -->
  <div class="modal fade" id="editDiscuss" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Edit Discussion</h4>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label></label>
              <textarea rows="6" class="form-control no-resize">Menggunakan bahan-bahan dasar yang bagaimana pak?</textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Edit</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Delete Discussion -->
  <div class="modal fade" id="deleteDiscuss" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Are you sure want to delete this?</h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-danger">Delete</button>
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
