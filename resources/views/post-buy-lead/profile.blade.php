@extends('layouts.profile.profile-layouts')
@section('manage-account')
<div class="col-md-12 col-sm-12 col-xs-12">
  <a href="#manageEmployee" data-toggle="modal" class="btn btn-primary">Manage Employee</a>
</div>
@endsection
@section('company-profile-tab')
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
            <input type="text" class="form-control" value="gak ada saat register" disabled>
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
            <div class="col-md-12 no-padding main-product">
              <label class="col-md-2 col-sm-12 col-xs-12 control-label labelfirst">Main Product</label>
              <div class="col-md-6 col-sm-12 col-xs-12">
                <input id="mp-1" type="text" class="form-control inline-input" value="Frozen Fish">
                <button type="button" class="btn btn-sm btn-danger btn-remove-main-product"><i class="fa fa-minus"></i></button>
              </div>
            </div>
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
                <input type="text" class="form-control" placeholder="Product Catalogue" disabled>
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
            <input type="text" class="form-control" value="Cahyo Gumilang">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 col-sm-12 col-xs-12 control-label">Interested Program</label>
          <div class="col-md-2 col-sm-2 col-xs-2">
            <div class="checkbox">
              <label>
                <input type="checkbox" name="program[]" checked> Selling
              </label>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-3">
            <div class="checkbox">
              <label>
                <input type="checkbox" name="program[]" checked> Buying
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 col-sm-12 col-xs-12 control-label">Company Status</label>
          <div class="col-md-2 col-sm-2 col-xs-2">
            <div class="radio">
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked >
                PKP
              </label>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-3">
            <div class="radio">
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
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
@endsection
@section('business-category-tab')
<div class="container-fluid padding">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 margin-top">
      <div class="table-responsive">
        <table class="table table-middle table-bordered table-hover">
          <thead>
            <tr>
              <th>Section</th>
              <th>Section Name</th>
              <th>Division</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Section A</td>
              <td>Agriculture, forestry and fishing</td>
              <td>Division 1, Division 2</td>
              <td>
                <a href="#detailBc" data-toggle="modal" class="btn btn-orange btn-sm">Detail</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <div class="col-md-12 col-sm-6 col-xs-12">
      <div class="row">
        <div class="col-md-10 col-sm-12 col-xs-12">
          <div class="form-group">
            <label class="block">Package</label>
            <div class="col-md-8 col-sm-8 col-xs-12 no-padding-left">
              <input type="text" class="form-control" disabled value="Regular +">
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <a href="#" class="inline-block"><i class="fa fa-question-circle"></i> Package Information</a>
            </div>
          </div>
        </div>

        <br><br><br><br>

        <div class="col-md-10 col-sm-12 col-xs-12">
          <div class="col-md-8 col-sm-12 col-xs-12 no-padding-left">
            <div class="form-group">
              <label>Account Duration</label>
              <input type="text" class="form-control"  value="{{date('d F Y', strtotime($thisCompany->CompanyPackage()->where('status','confirmed')->latest('created_at')->first()->expired_date)) }}" disabled>
            </div>
          </div>
          @if(session()->get('userSession')[0]->role_id == 2)
          <div class="col-md-4 col-sm-12 col-xs-12 no-padding-left">
            <div class="col-md-6 col-sm-6 col-xs-6">
              <div class="wrapper-btn-bc">
                <a href="#reactivate" class="btn btn-primary" data-toggle="modal">Re-Activate</a>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
              <div class="wrapper-btn-bc">
                <a href="#requestAddon" class="btn btn-primary" data-toggle="modal">Request Add-On</a>
              </div>
            </div>
          </div>
          <div class="col-md-8 col-sm-12 col-xs-12 no-padding-left">
            <div class="form-group">
              <label>Add-On Duration</label>
              <input type="text" class="form-control"  value="10 November 2018" disabled>
            </div>
          </div>
          <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="wrapper-btn-bc">
              <a href="#reactivateAddon" class="btn btn-primary" data-toggle="modal">Re-Activate Add-On</a>
            </div>
          </div>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('modal')

<div class="modal fade" id="detailBc" tabindex="-1" role="dialog">
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
                  <a href="#division1" class="no-text-decoration" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="division1">Division 1 - Crop and animal production, hunting and related service activities</a>
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
                        <td>Growing of non-perennial crops</td>
                      </tr>
                      <tr>
                        <td>012</td>
                        <td>Growing of perennial crops</td>
                      </tr>
                      <tr>
                        <td>013</td>
                        <td>Plant propagation</td>
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
                        <td>Support activities to agriculture and post-harvest crop activities</td>
                      </tr>
                      <tr>
                        <td>017</td>
                        <td>Hunting, trapping and related service activities</td>
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
                      <tr>
                        <td>023</td>
                        <td>Gathering of non-wood forest products</td>
                      </tr>
                      <tr>
                        <td>024</td>
                        <td>Support services to forestry</td>
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

<div class="modal fade" id="reactivate" tabindex="-1" role="dialog">
 <div class="modal-dialog" role="document">
   <div class="modal-content">
     <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
       <h4 class="modal-title">Reactivate Account</h4>
     </div>
     <form action="{{url('doExtendCompanyPackage')}}" method="post">
       {{csrf_field()}}
       <div class="modal-body">
         <div class="row">
           <div class="col-md-6">
             <div class="form-group">
               <label>Package</label>
               <select class="form-control" id="package" name="package">
                <option value="0">Select your package</option>
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
          <div class="col-md-6">
           <div class="form-group">
             <label>Duration</label>
             <select class="form-control" name="yearDuration">
              <option value="0">Select Duration</option>
              <option value="1" selected="">1 Year</option>
              <option value="2">2 Year</option>
              <option value="3">3 Year</option>
            </select>
          </div>
        </div>
        <div class="col-md-12">
         <div class="form-group">
           <label>Price</label>
           <input type="text" class="form-control" name="price" value="0" readonly>
         </div>
       </div>
     </div>
   </div>
   <div class="modal-footer">
     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
     <button type="Submit" data-target="#konfirmasiReactivate" class="btn btn-primary">Submit</button>
   </div>
 </form>
</div>
</div>
</div>

<div class="modal fade" id="requestAddon" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Request Add-On</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Package</label>
                <select class="form-control selectpicker" data-live-search="true">
                  <option value="">Select Package</option>
                  <option value="" selected>Basic</option>
                  <option value="">Regular +</option>
                  <option value="">Premium</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Quantity</label>
                <select class="form-control selectpicker" data-live-search="true">
                  <option value="">Select Quantity</option>
                  <option value="" selected>1</option>
                  <option value="">2</option>
                  <option value="">3</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Duration</label>
                <select class="form-control selectpicker" data-live-search="true">
                  <option value="">Select Duration</option>
                  <option value="" selected>1 Year</option>
                  <option value="">2 Year</option>
                  <option value="">3 Year</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Price</label>
                <input type="text" class="form-control" disabled value="Rp. 1.000.000">
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" data-target="#konfirmasiRequestAddon" class="btn btn-primary" data-toggle="modal">Submit</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="reactivateAddon" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Re-Activate Add-On</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Package</label>
                <select class="form-control selectpicker" data-live-search="true" disabled>
                  <option value="">Select Package</option>
                  <option value="" selected>Basic</option>
                  <option value="">Regular +</option>
                  <option value="">Premium</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Quantity</label>
                <select class="form-control selectpicker" data-live-search="true" disabled>
                  <option value="">Select Quantity</option>
                  <option value="" selected>1</option>
                  <option value="">2</option>
                  <option value="">3</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Duration</label>
                <select class="form-control selectpicker" data-live-search="true">
                  <option value="">Select Duration</option>
                  <option value="" selected>1 Year</option>
                  <option value="">2 Year</option>
                  <option value="">3 Year</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Price</label>
                <input type="text" class="form-control" value="Rp. 1.000.000" disabled>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" data-target="#konfirmasiReactivateAddon" class="btn btn-primary" data-toggle="modal">Submit</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="konfirmasiReactivate" tabindex="1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Are you sure want to Reactivate?</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary reactivate-subs" data-dismiss="modal">Yes</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="konfirmasiRequestAddon" tabindex="1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Are you sure want to Request Add-On?</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary request-addon" data-dismiss="modal">Yes</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="konfirmasiReactivateAddon" tabindex="1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Are you sure want to Reactivate Add-On?</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary reactivate-subs" data-dismiss="modal">Yes</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="manageEmployee" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Manage Employee</h4>
      </div>
      <div class="modal-body">
        <a href="#addEmployee" data-toggle="modal" class="btn btn-primary">Add Employee</a>
        <br><br>
        <h4><label class="label label-success">Manager Quota Left: 3</label> - <label class="label label-warning">Staff Quota Left: 3</label></h4>
        <div class="table-responsive margin-top">
          <table class="table table-hover table-middle">
            <thead>
              <tr>
                <th>ID</th>
                <th>Position</th>
                <th>Name</th>
                <th>Status</th>
                <th>Head Manager</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($user as $key => $value)
              <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->role_name}}</td>
                <td>{{$value->first_name.' '.$value->last_name}}</td>
                <td>
                  @if($value->status == "Active")
                  <label class="btn btn-success btn-sm">
                    <i class="fa fa-check"></i>
                  </label>
                  @else
                  <label class="btn btn-danger btn-sm">
                    <i class="fa fa-close"></i>
                  </label>
                  @endif
                </td>
                <td>
                  @if($value->is_head == 0)
                  <a href="#" class="btn btn-primary btn-sm">Set as head</a>
                  @else
                  <a href="#" class="btn btn-warning btn-sm">Cancel as head</a>
                  @endif
                </td>
                <td>
                <a href="#editEmployee" data-toggle="modal" class="btn btn-primary btn-sm">Edit</a>
                  <a href="#" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure want to delete this?');">Delete</a>
                </td>
              </tr>
              @endforeach
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

<div class="modal fade" id="addEmployee" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="doRegisUser" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Add Account</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>User Type</label>
                <select name="role" class="form-control">
                  <option value="">Choose user type</option>
                  @foreach($role as $key => $value)
                  <option value="{{$value->id}}">{{$value->name}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>First Name</label>
                <input type="text" name="firstName" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Last Name</label>
                <input type="text" name="lastName" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Job Title</label>
                <input type="text" name="jobTitle" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" class="form-control">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Upload Photo</label>
                <input type="file" name="photoImage">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="editEmployee" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit Employee</h4>
      </div>
      <div class="modal-body">
        <form action="">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>User Type</label>
                <select class="form-control">
                  <option value="">Choose user type</option>
                  <option value="">Procurement Staff</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>First Name</label>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Last Name</label>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Job Title</label>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" class="form-control">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <img src="../../images/avatar.jpg" width="150" height="150"><br>
                <label>Upload Photo</label>
                <input type="file">
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="deleteEmployee" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Are you sure want to delete this employee?</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Delete</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="delete" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Are you sure want to delete this?</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Delete</button>
      </div>
    </div>
  </div>
</div>

  @if(session()->get('userSession')[0]->role_id != 2)
    <script type="text/javascript">
      $("#company-profile-form :input").attr("disabled", true);
    </script>
  @endif

@endsection