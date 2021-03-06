@extends('layouts.user.app')

@section('content')
  @include('layouts.user.navbar')

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Detail Meeting Summary
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-2 col-sm-12 col-xs-12">
        <a href="detail-item.html" class="btn btn-primary btn-block margin-bottom">Back</a>

        <div class="box box-solid">
          <!--<div class="box-header with-border">
            <h3 class="box-title">Folders</h3>

            <div class="box-tools">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="box-body no-padding">
            <ul class="nav nav-pills nav-stacked">
              <li class="active"><a href="messaging.html"><i class="fa fa-inbox"></i> Inbox
                <span class="label label-primary pull-right">12</span></a>
              </li>
            </ul>
          </div>-->
          <!-- /.box-body -->
        </div>
      </div>
      <!-- /.col -->
      <div class="col-md-7 col-sm-12 col-xs-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Detail Meeting Summary</h3>

            <!--<div class="box-tools pull-right">
              <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Previous"><i class="fa fa-chevron-left"></i></a>
              <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Next"><i class="fa fa-chevron-right"></i></a>
            </div>-->
          </div>
          <!-- /.box-header -->
          <div class="box-body no-padding">
            <div class="mailbox-read-info">
              <h3>Delivery Time and Price Negotiation</h3>
              <h5>By Person: Subroto Dinata
                <span class="mailbox-read-time pull-right">Thursday, May 4th 2017, 10:00 AM</span></h5>
            </div>
            <!-- /.mailbox-read-info -->
            <div class="mailbox-controls with-border text-center">
              <div class="btn-group">
                <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Delete" disabled>
                  <i class="fa fa-trash-o"></i></button>
              </div>
              <!-- /.btn-group -->
              <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="Print">
                <i class="fa fa-print"></i></button>
            </div>
            <!-- /.mailbox-controls -->
            <div class="mailbox-read-message">
              <p>Dear Pak Arifan,</p>

              <p>We would like to revise our quotation. For further information, please do not hesitate to contact us.</p>

              <p>
                Regards,<br>
                Purnomo
              </p>
            </div>
            <!-- /.mailbox-read-message -->
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <ul class="mailbox-attachments clearfix">
              <li>
                <span class="mailbox-attachment-icon"><i class="fa fa-file-pdf-o"></i></span>

                <div class="mailbox-attachment-info">
                  <a href="#" class="mailbox-attachment-name"><i class="fa fa-paperclip"></i> Sep2014-report.pdf</a>
                      <span class="mailbox-attachment-size">
                        1,245 KB
                        <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                      </span>
                </div>
              </li>
              <li>
                <span class="mailbox-attachment-icon"><i class="fa fa-file-word-o"></i></span>

                <div class="mailbox-attachment-info">
                  <a href="#" class="mailbox-attachment-name"><i class="fa fa-paperclip"></i> App Description.docx</a>
                      <span class="mailbox-attachment-size">
                        1,245 KB
                        <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                      </span>
                </div>
              </li>
              <li>
                <span class="mailbox-attachment-icon has-img"><img src="../../images/photo1.png" alt="Attachment"></span>

                <div class="mailbox-attachment-info">
                  <a href="#" class="mailbox-attachment-name"><i class="fa fa-camera"></i> photo1.png</a>
                      <span class="mailbox-attachment-size">
                        2.67 MB
                        <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                      </span>
                </div>
              </li>
              <li>
                <span class="mailbox-attachment-icon has-img"><img src="../../images/photo2.png" alt="Attachment"></span>

                <div class="mailbox-attachment-info">
                  <a href="#" class="mailbox-attachment-name"><i class="fa fa-camera"></i> photo2.png</a>
                      <span class="mailbox-attachment-size">
                        1.9 MB
                        <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                      </span>
                </div>
              </li>
            </ul>
          </div>
          <!-- /.box-footer -->
          <div class="box-footer">
            <button type="button" class="btn btn-default" disabled><i class="fa fa-trash-o" ></i> Delete</button>
            <button type="button" class="btn btn-default"><i class="fa fa-print"></i> Print</button>
          </div>
          <!-- /.box-footer -->
        </div>
        <!-- /. box -->
      </div>
      <!-- /.col -->
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
      <!-- /.column -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->

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
