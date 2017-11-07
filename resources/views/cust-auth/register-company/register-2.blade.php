@extends('layouts.user.app')

@section('content')
  @include('layouts.user.navbar-register')

  <div class="container-fluid">
    <h1 class="main-title no-margin-top text-uppercase">
      <strong>Register your contact person</strong>
    </h1>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8 col-sm-12 col-xs-12">
          <form class="form-horizontal" action="doRegis" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
              <div class="row">
                <label class="col-md-3 col-sm-3 col-xs-12 control-label">Contact Name <small class="text-danger">(required)</small></label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" name="contactName" placeholder="Contact Name" required="">
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <label class="col-md-3 col-sm-3 col-xs-12 control-label">Mobile Number <small>(optional)</small></label>
                <div class="col-md-2 col-sm-2 col-xs-4">
                  <input type="text" id="numericWithPlusChar" name="mobileCode" class="form-control" placeholder="+62" required="">
                </div>
                <div class="col-md-7 col-sm-7 col-xs-8">
                  <input type="text" id="numeric" name="mobileNumber" class="form-control" placeholder="809 073 295" required="">
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-offset-1 col-md-11 col-sm-12 col-xs-12">
                  <h3 class="sub-title">
                    <strong>For assure your company, we need to survey your company address and complete your document</strong>
                  </h3>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <label class="col-md-3 col-sm-3 col-xs-12 control-label">Required Document <small class="text-danger">(required)</small></label>
                <div class="col-md-5 col-sm-4 col-xs-12">
                  <input type="text" name="businessLicense" class="form-control" placeholder="Business Licence / Surat Izin Usaha" readonly="">
                </div>
                
                <div class="col-md-4 col-sm-5 col-xs-12 margin-top-med-and-down">
                  <input type="file" name="businessLicenseImage" required="">
                  <p class="help-block hide-on-med-and-down">(.docx, .pdf, or photo of document SIUP)</p>
                </div>

                
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <label class="col-md-3 col-sm-3 col-xs-12 control-label"></label>
                <div class="col-md-5 col-sm-4 col-xs-12">
                  <input type="text" name="tax" class="form-control" placeholder="Tax ID / NPWP" readonly="">
                </div>

                <div class="col-md-4 col-sm-5 col-xs-12 margin-top-med-and-down">
                  <input type="file" name="taxImage" required="">
                  <p class="help-block hide-on-med-and-down">(.docx, .pdf, or photo of document NPWP)</p>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <label class="col-md-3 col-sm-3 col-xs-12 control-label"></label>
                <div class="col-md-2 col-sm-2 col-xs-3">
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios1" value="PKP" checked>
                      PKP
                    </label>
                  </div>
                </div>
                <div class="col-md-7 col-sm-3 col-xs-4">
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios2" value="Non PKP">
                      Non PKP
                    </label>
                  </div>
                </div>
              </div>
            </div>

            <div class="wrapperCatalogue">
              <div id="removeCatalogue" class="form-group">
                <div class="row">
                  <label class="col-md-3 col-sm-3 col-xs-12 control-label">Product Catalogue <small>(optional)</small></label>
                  <div class="col-md-5 col-sm-4 col-xs-12">
                    <input type="text" class="form-control" placeholder="Product Catalogue" disabled>
                  </div>

                  <div class="col-md-4 col-sm-4 col-xs-6 margin-top-med-and-down">
                    <input type="file">
                    <p class="help-block hide-on-med-and-down">(.docx, .pdf, or photo of document Product Catalogue)</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-9 col-md-offset-3 col-sm-9 col-sm-offset-3 col-xs-12">
                  <button id="addCatalogue" class="btn btn-primary">Add another product catalogue</button>
                </div>
              </div>
            </div>

            <div class="wrapperCertificate">
              <div id="removeCertificate" class="form-group">
                <div class="row">

                  <label class="col-md-3 col-sm-3 col-xs-12 control-label">Certificate <small class="text-danger">(required)</small></label>
                  <div class="col-md-5 col-sm-4 col-xs-12">
                    <input type="text" name="certificate" class="form-control" placeholder="Certificate" readonly="">
                  </div>

                  <div class="col-md-4 col-sm-4 col-xs-6 margin-top-med-and-down">
                    <input type="file" name="certificateImage" required="">
                    <p class="help-block hide-on-med-and-down">(.docx, .pdf, or photo of document NPWP)</p>
                  </div>

                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-9 col-md-offset-3 col-sm-9 col-sm-offset-3 col-xs-12">
                  <button id="addCertificate" class="btn btn-primary">Add another certicate</button>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">

                <label class="col-md-3 col-sm-3 col-xs-12 control-label"></label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" required=""> I accept term and condition
                    </label>
                    <a href="disclaimer.html">(disclaimer)</a>
                  </div>
                </div>

              </div>
            </div>

            <div class="form-group">
              <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="pull-left">
                    <a href="register-1.html" class="btn-arrow">
                      <i class="fa fa-arrow-circle-left"></i>
                    </a>
                  </div>

                  <div class="pull-right">
                  <button type="submit" style="background-color: #f9f9f9; border:none">
                    <a href="register-success.html" class="btn-arrow saveDataCompanyRegis2">
                      <i class="fa fa-arrow-circle-right"></i>
                    </a>
                  </button>
                  </div>
                </div>

              </div>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
@endsection