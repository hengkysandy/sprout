<div class="container-fluid padding">
  <div class="row">
    <div class="container-fluid">
      
      <form method="post" action="{{url('doUpdateCompanyData')}}" enctype="multipart/form-data" id="company-profile-form" class="form-horizontal margin-top">
        {{csrf_field()}}
        <input type="hidden" name="id_company" value="{{$thisCompany->id}}">
        <div class="form-group">
          <label class="col-md-2 col-sm-12 col-xs-12 control-label">Package</label>
          <div class="col-md-3 col-sm-12 col-xs-12">
            <select name="package" class="selectpicker form-control" data-live-search="true">
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
            <select name="businessEntity" class="selectpicker form-control">
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
            <input type="text" name="companyName" class="form-control" value="{{$thisCompany->name}}" >
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 col-sm-12 col-xs-12 control-label">Company Tagline</label>
          <div class="col-md-6 col-sm-12 col-xs-12">
            <input type="text" name="companyTagline" class="form-control" value="{{$thisCompany->tagline}}" >
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 col-sm-12 col-xs-12 control-label">Address</label>
          <div class="col-md-6 col-sm-12 col-xs-12">
            <textarea name="address" class="form-control no-resize" rows="6" >{{$thisCompany->address}}</textarea>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 col-sm-12 col-xs-12 control-label">Province &amp; City</label>
          <!-- Note: Untuk Select Province
          Pada saat province yang dipilih adalah banten, maka seluruh city (kota) hanya berada pada cakupan city (kota) yang ada di province tersebut
          -->
          <div class="col-md-3 col-sm-12 col-xs-12">
            <select name="id_province" class="selectpicker form-control" data-live-search="true" >
              <option value="">Select Province</option>
              <option value="{{$thisCompany->Province()->first()->id}}" selected>{{$thisCompany->Province()->first()->name}}</option>
              
            </select>
          </div>
          <div class="col-md-3 col-sm-12 col-xs-12">
            <select name="id_city" class="selectpicker form-control" data-live-search="true" >
              <option value="">Select City</option>
              <option value="{{$thisCompany->City()->first()->id}}" selected>{{$thisCompany->City()->first()->name}}</option>
              
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 col-sm-12 col-xs-12 control-label">Zip Code</label>
          <div class="col-md-6 col-sm-4 col-xs-4">
            <input type="text" name="zipcode" class="form-control" value="{{$thisCompany->zip_code}}" >
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 col-sm-12 col-xs-12 control-label">Phone Number</label>
          <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="row">
              <div class="col-md-3 col-sm-3 col-xs-3">
                <input type="text" name="phoneCode" class="form-control" value="{{substr($thisCompany->phone,0,3)}}" >
              </div>
              <div class="col-md-1 col-sm-1 col-xs-1">
                <label class="control-label">-</label>
              </div>
              <div class="col-md-8 col-sm-8 col-xs-8">
                <input type="text" name="phoneNumber" class="form-control" value="{{substr($thisCompany->phone,3)}}" >
              </div>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 col-sm-12 col-xs-12 control-label">Mobile Phone</label>
          <div class="col-md-6 col-sm-12 col-xs-12">
            <input type="text" name="mobileNumber" class="form-control" value="{{$thisCompany->mobile_number}}" >
          </div>
        </div>
        <div class="wpMainProduct">
          <div id="removeMp" class="form-group">
            @foreach($thisCompany->CompanyMainProduct()->get() as $mp)
              <div class="col-md-12 no-padding main-product">
                <label class="col-md-2 col-sm-12 col-xs-12 control-label labelfirst">Main Product</label>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <input id="mp-1" type="text" name="mainProduct" class="form-control inline-input" value="{{$mp->main_product_name}}">
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
                <input type="text" class="form-control" placeholder="" disabled>
              </div>

              <div class="col-md-4 col-sm-4 col-xs-6 margin-top-med-and-down">
                <input type="file" name="productImage">
                <p class="help-block hide-on-med-and-down">(.docx, .pdf, or photo of document Product Catalogue)</p>
              </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              @foreach($thisCompany->CompanyProductCatalogue()->get() as $data)
              <div class="form-group">
                <label class="col-md-2 col-sm-0 col-xs-0 control-label"></label>
                <div class="col-md-10 col-sm-12 col-xs-12">
                  <a target="_blank" href="{{url('download/file?url='.$data->product_catalogue_image)}}" class="btn btn-success">Download Document</a>
                  <a href="{{url('doDeleteProductCatalogue?id='.$data->id)}}" data-toggle="modal" class="btn btn-danger">Delete Document</a>
                  <p class="help-block">{{$data->CdnMap()->first()->original_filename}}</p>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 col-sm-12 col-xs-12 control-label">Contact Name</label>
          <div class="col-md-6 col-sm-12 col-xs-12">
            <input type="text" name="contactName" class="form-control" value="{{$thisCompany->contact_name}}">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 col-sm-12 col-xs-12 control-label">Interested Program</label>
          <div class="col-md-2 col-sm-2 col-xs-2">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="1" name="interestProgram[]" {{$thisCompany->CompanyInterestedProgram()->where('id_interested_program', '1')->first() ? 'checked' : ''}}> Selling
              </label>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-3">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="2" name="interestProgram[]" {{$thisCompany->CompanyInterestedProgram()->where('id_interested_program', '2')->first() ? 'checked' : ''}}> Buying
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 col-sm-12 col-xs-12 control-label">Company Status</label>
          <div class="col-md-2 col-sm-2 col-xs-2">
            <div class="radio">
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios1" value="PKP" {{$thisCompany->tax_type == 'PKP' ? 'checked' : ''}} >
                PKP
              </label>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-3">
            <div class="radio">
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios2" value="Non PKP" {{$thisCompany->tax_type == 'non PKP' ? 'checked' : ''}}>
                Non PKP
              </label>
            </div>
          </div>
        </div>
        @foreach($thisCompany->CompanyRequiredDocument()->get() as $data)
        <div class="form-group">
          <label class="col-md-2 col-sm-12 col-xs-12 control-label">Required Document</label>
          <div class="col-md-10 col-sm-12 col-xs-12">
            <a target="_blank" href="{{url('download/file?url='.$data->business_license_image)}}" class="btn btn-success">Download Document</a>
            <a href="{{url('doDeleteRequiredDocument?id='.$data->id)}}" data-toggle="modal" class="btn btn-danger">Delete Document</a>
            <p class="help-block">{{$data->CdnMapBli()->first()->original_filename}}</p>
          </div>
        </div>
        @endforeach

        @foreach($thisCompany->Certificate()->get() as $data)
        <div class="form-group">
          <label class="col-md-2 col-sm-12 col-xs-12 control-label">Certification <small><strong>(optional)</strong></small></label>
          <div class="col-md-10 col-sm-12 col-xs-12">

            <a target="_blank" href="{{url('download/file?url='.$data->certificate_image)}}" class="btn btn-success">Download Document</a>
            <a href="{{url('doDeleteCertificate?id='.$data->id)}}" class="btn btn-danger">Delete Document</a>
            <p class="help-block">{{$data->CdnMap()->first()->original_filename}}</p>
          </div>
        </div>
        @endforeach

        <div class="form-group">
          <label class="col-md-2 col-sm-0 col-xs-0 control-label"></label>
          <div class="col-md-10 col-sm-12 col-xs-12" style="margin-bottom: 10px;">
            <img src="{{$thisCompany->logo_image}}" class="show-logo" alt="Amazon">
          </div>

          <div class="hide-on-med-and-down">
            <br><br><br><br><br>
          </div>

          <label class="col-md-2 col-sm-12 col-xs-12 control-label">Company Logo</label>
          <div class="col-md-10 col-sm-12 col-xs-12">

            <label class="btn btn-primary btn-file">
              Browse <input type="file" name="logoImage" class="hide">
            </label>
            <a target="_blank" href="{{$thisCompany->logo_image}}" class="btn btn-success">Download Logo</a>
            <a href="{{url('doDeleteCompanyLogo?id='.$thisCompany->id)}}" data-toggle="modal" class="btn btn-danger">Delete Logo</a>
            <p class="help-block">Insert image logo with format .png</p>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-10 col-md-offset-2 col-sm-12 col-xs-12">
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
