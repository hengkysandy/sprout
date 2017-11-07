<div class="container-fluid padding">
  <div class="row">
    <div class="container-fluid">
      
      <form id="company-profile-form" class="form-horizontal margin-top">
        <div class="form-group">
          <label class="col-md-2 col-sm-12 col-xs-12 control-label">Package</label>
          <div class="col-md-3 col-sm-12 col-xs-12">
            <select class="selectpicker form-control" data-live-search="true">
              <option value="">Choose your package</option>
              @foreach($packageData as $packData)
                @if($packData->id == $thisCompany->CompanyPackage()->latest('created_at')->first()->id_package)
                  <option value="{{$packData->id}}" selected="">{{$packData->name}}</option>
                @else
                  <option value="{{$packData->id}}">{{$packData->name}}</option>
                @endif
              @endforeach
            </select>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 col-sm-12 col-xs-12 control-label">Business Entity</label>
          <div class="col-md-3 col-sm-12 col-xs-12">
            <select class="selectpicker form-control">
              <option value="">Choose business entity</option>
              @foreach($businessEntity as $data)
                @if($thisCompany->business_entity == $data)
                  <option value="{{$data}}" selected="">{{$data}}</option>
                @else
                  <option value="{{$data}}">{{$data}}</option>
                @endif
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 col-sm-12 col-xs-12 control-label">Company Name</label>
          <div class="col-md-6 col-sm-12 col-xs-12">
            <input type="text" class="form-control" value="{{$thisCompany->name}}" >
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 col-sm-12 col-xs-12 control-label">Company Tagline</label>
          <div class="col-md-6 col-sm-12 col-xs-12">
            <input type="text" class="form-control" value="{{$thisCompany->tagline}}" >
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 col-sm-12 col-xs-12 control-label">Address</label>
          <div class="col-md-6 col-sm-12 col-xs-12">
            <textarea class="form-control no-resize" rows="6" >{{$thisCompany->address}}</textarea>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 col-sm-12 col-xs-12 control-label">Province &amp; City</label>
          <!-- Note: Untuk Select Province
          Pada saat province yang dipilih adalah banten, maka seluruh city (kota) hanya berada pada cakupan city (kota) yang ada di province tersebut
          -->
          <div class="col-md-3 col-sm-12 col-xs-12">
            <select class="selectpicker form-control" data-live-search="true" >
              <option value="">Select Province</option>
              <option value="1" selected>{{$thisCompany->Province()->first()->name}}</option>
              
            </select>
          </div>
          <div class="col-md-3 col-sm-12 col-xs-12">
            <select class="selectpicker form-control" data-live-search="true" >
              <option value="">Select City</option>
              <option value="1" selected>{{$thisCompany->City()->first()->name}}</option>
              
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 col-sm-12 col-xs-12 control-label">Zip Code</label>
          <div class="col-md-6 col-sm-4 col-xs-4">
            <input type="text" class="form-control" value="{{$thisCompany->zip_code}}" disabled>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 col-sm-12 col-xs-12 control-label">Phone Number</label>
          <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="row">
              <div class="col-md-3 col-sm-3 col-xs-3">
                <input type="text" class="form-control" value="{{substr($thisCompany->phone,0,3)}}" >
              </div>
              <div class="col-md-1 col-sm-1 col-xs-1">
                <label class="control-label">-</label>
              </div>
              <div class="col-md-8 col-sm-8 col-xs-8">
                <input type="text" class="form-control" value="{{substr($thisCompany->phone,3)}}" >
              </div>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 col-sm-12 col-xs-12 control-label">Mobile Phone</label>
          <div class="col-md-6 col-sm-12 col-xs-12">
            <input type="text" class="form-control" value="{{$thisCompany->mobile_number}}" >
          </div>
        </div>
        <div class="wpMainProduct">
          <div id="removeMp" class="form-group">
            @foreach($thisCompany->CompanyMainProduct()->get() as $mp)
              <div class="col-md-12 no-padding main-product">
                <label class="col-md-2 col-sm-12 col-xs-12 control-label labelfirst">Main Product</label>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <input id="mp-1" type="text" class="form-control inline-input" value="{{$mp->main_product_name}}">
                  <button type="button" class="btn btn-sm btn-danger btn-remove-main-product"><i class="fa fa-minus"></i></button>
                </div>
              </div>
            @endforeach
            
            <div id="appendMp"></div>
          </div>
          <div class="form-group">
            <div class="col-md-offset-2 col-sm-12 col-xs-12">
              <button type="button" id="addMainProduct" class="btn btn-sm btn-primary">Add Main Product</button>
            </div>
          </div>
        </div>
        <div class="wrapperCataloguePrf">
          <div id="removeCataloguePrf" class="form-group">
            <div class="">
              <label class="col-md-2 col-sm-12 col-xs-12 control-label">Product Catalogue</label>
              <div class="col-md-6 col-sm-12 col-xs-12">
                <input type="text" class="form-control" placeholder="Product Catalogue gak ada di regis" disabled>
              </div>

              <div class="col-md-4 col-sm-4 col-xs-6 margin-top-med-and-down">
                <input type="file">
                <p class="help-block hide-on-med-and-down">(.docx, .pdf, or photo of document Product Catalogue)</p>
              </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="form-group">
                <label class="col-md-2 col-sm-0 col-xs-0 control-label"></label>
                <div class="col-md-10 col-sm-12 col-xs-12">
                  <a href="#" class="btn btn-success">Open Document</a>
                  <a href="#delete" data-toggle="modal" class="btn btn-danger">Delete Document</a>
                  <p class="help-block">Certificate Halal</p>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-2 col-sm-0 col-xs-0 control-label"></label>
                <div class="col-md-10 col-sm-12 col-xs-12">
                  <a href="../storage/sample.pdf" class="btn btn-success">Open Document</a>
                  <a href="#deleteDoc" class="btn btn-danger">Delete Document</a>
                  <p class="help-block">Catalogue 1</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 col-sm-12 col-xs-12 control-label">Contact Name</label>
          <div class="col-md-6 col-sm-12 col-xs-12">
            <input type="text" class="form-control" value="{{$thisCompany->contact_name}}">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 col-sm-12 col-xs-12 control-label">Interested Program</label>
          <div class="col-md-2 col-sm-2 col-xs-2">
            <div class="checkbox">
              <label>
                <input type="checkbox" name="program[]" {{$thisCompany->CompanyInterestedProgram()->where('id_interested_program', '1')->first() ? 'checked' : ''}}> Selling
              </label>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-3">
            <div class="checkbox">
              <label>
                <input type="checkbox" name="program[]" {{$thisCompany->CompanyInterestedProgram()->where('id_interested_program', '2')->first() ? 'checked' : ''}}> Buying
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 col-sm-12 col-xs-12 control-label">Company Status</label>
          <div class="col-md-2 col-sm-2 col-xs-2">
            <div class="radio">
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" {{$thisCompany->tax_type == 'PKP' ? 'checked' : ''}} >
                PKP
              </label>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-3">
            <div class="radio">
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" {{$thisCompany->tax_type == 'non PKP' ? 'checked' : ''}}>
                Non PKP
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 col-sm-12 col-xs-12 control-label">Required Document</label>
          <div class="col-md-10 col-sm-12 col-xs-12">
            <a href="../storage/sample.pdf" class="btn btn-success">Open Document</a>
            <a href="#delete" data-toggle="modal" class="btn btn-danger">Delete Document</a>
            <p class="help-block">Scan of Business Licence / SIUP</p>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 col-sm-12 col-xs-12 control-label"></label>
          <div class="col-md-10 col-sm-12 col-xs-12">
            <a href="../storage/sample.pdf" class="btn btn-success">Open Document</a>
            <a href="#delete" data-toggle="modal" class="btn btn-danger">Delete Document</a>
            <p class="help-block">Scan of Tax ID / NPWP</p>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 col-sm-12 col-xs-12 control-label">Certification <small><strong>(optional)</strong></small></label>
          <div class="col-md-10 col-sm-12 col-xs-12">

            <a href="../storage/sample.pdf" class="btn btn-success">Open Document</a>
            <a href="#delete" class="btn btn-danger">Delete Document</a>
            <p class="help-block">Certificate 1081</p>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 col-sm-0 col-xs-0 control-label"></label>
          <div class="col-md-10 col-sm-12 col-xs-12" style="margin-bottom: 10px;">
            <img src="../images/amazon.png" class="show-logo" alt="Amazon">
          </div>

          <div class="hide-on-med-and-down">
            <br><br><br><br><br>
          </div>

          <label class="col-md-2 col-sm-12 col-xs-12 control-label">Company Logo</label>
          <div class="col-md-10 col-sm-12 col-xs-12">

            <label class="btn btn-primary btn-file">
              Browse <input type="file" class="hide">
            </label>
            <a href="../../images/amazon.png" class="btn btn-success">Open Logo</a>
            <a href="#delete" data-toggle="modal" class="btn btn-danger">Delete Logo</a>
            <p class="help-block">Insert image logo with format .png</p>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-10 col-md-offset-2 col-sm-12 col-xs-12">
            <button type="button" class="btn btn-primary">Save</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
