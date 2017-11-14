@extends('layouts.dashboard.app')

@section('content')
  @include('layouts.dashboard.navbar')

  <div class="container-fluid">
    <h1 class="main-title no-margin-top">{{$thisCompany->name}}</h1>
    <div class="col-md-10 col-sm-12 col-xs-12 margin-top">
      <ul class="nav nav-tabs nav-justified" role="tablist">
        <li role="presentation" class="active"><a href="#cp" aria-controls="cp" role="tab" data-toggle="tab">Company Profile</a></li>
        <li role="presentation"><a href="#bc" aria-controls="bc" role="tab" data-toggle="tab">Business Category</a></li>
      </ul>
    </div>
    <div class="col-md-10 col-sm-12 col-xs-12">
      <div class="tab-content margin-bottom">
        <div role="tabpanel" class="tab-pane bg-white active border-tab-pane" id="cp">
          <!-- This is for company profile id -->
          @include('post-buy-lead.layouts-view.view-company-profile-tab')
        </div>

        <div role="tabpanel" class="tab-pane bg-white border-tab-pane" id="bc">
          <!-- This is for company profile person -->
          <div class="container-fluid padding">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12 margin-top margin-bottom">
                <a href="#addBc" data-toggle="modal" class="btn btn-primary">
                  Add Business Category
                </a>

              </div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="table-responsive">
                  @if(count($companyBC) == 0)
                    <p>There's no business category yet.</p>
                  @else
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
                        @foreach($companyBC as $bcData)
                          <tr>
                            <td>{{$bcData->Section()->first()->section}}</td>
                            <td>{{$bcData->Section()->first()->name}}</td>
                            <td>
                              @foreach($bcData->Section()->first()->Division()->get() as $dData)
                                {{$dData->name}},
                              @endforeach
                            </td>
                            <td>
                              <a href="#detailBc" data-toggle="modal" class="btn btn-orange btn-sm">Detail</a>
                              <a href="#editBc" data-toggle="modal" class="btn btn-primary btn-sm">Edit</a>
                              <a href="#deleteBc" data-toggle="modal" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  @endif
                </div>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="row">
                  <div class="col-md-8 col-sm-8 col-xs-8">
                    <div class="form-group">
                      <label>Package</label>
                      <input type="text" class="form-control" disabled="" value="Regular +">
                    </div>
                  </div>

                  <div class="col-md-4 col-sm-4 col-xs-4">
                    <div class="wrapper-btn-bc">
                      <a href="#requestAddon" data-toggle="modal" class="btn btn-primary chooseAddEmployee">
                        Add Employee
                      </a>
                    </div>
                  </div>

                  <div class="col-md-8 col-sm-8 col-xs-8">
                    <div class="form-group">
                      <label>Account Duration</label>
                      <input type="text" class="form-control" disabled="" value="10 November 2018">
                    </div>
                  </div>

                  <div class="col-md-4 col-sm-4 col-xs-4">
                    <div class="wrapper-btn-bc">
                      <a href="#reActivate" class="btn btn-success" data-toggle="modal">Re-Activate</a>
                    </div>
                  </div>

                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Reactivate Account -->
  <div class="modal fade" id="reActivate" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Re-Activate</h4>
        </div>
        <div class="modal-body">
          <form>
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                  <label>Package</label>
                  <select class="form-control">
                    <option value="choose_your_package">Choose your package</option>
                    <option value="free_trial">Free Trial</option>
                    <option value="regular">Regular</option>
                    <option value="regular_plus">Regular +</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                  <label>Duration</label>
                  <select class="form-control">
                    <option value="">1 Year</option>
                    <option value="">2 Year</option>
                    <option value="">3 Year</option>
                  </select>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-success re-activate" data-dismiss="modal">Re-Activate</button>
        </div>
      </div>
    </div>
  </div>

@include('post-buy-lead.popup-view.request-add-on-pop-up')
  <!-- Add Account for Purchasing/Sales -->
  <!-- <div class="modal fade" id="addEmployee" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Add Employee</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <div class="row">
              <div class="col-md-12">
                <label>Manager &amp; Staff</label>
                <input type="number" min="0" class="form-control">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal">Add</button>
        </div>
      </div>
    </div>
  </div> -->

  <!-- Add Business Category -->
  <div class="modal fade" id="addBc" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Add Business Category</h4>
        </div>
        <div class="modal-body">
          <div class="margin-bottom">
            <a href="#chooseBc" data-toggle="modal" class="btn btn-orange">Choose From Existing Category</a>
          </div>
          <form>
            <div class="row">

              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                  <label>Choose Section</label>
                  <div class="input-group">
                    <input type="text" class="form-control" value="Section A : Agriculture, forestry and fishing">
                    <span class="input-group-btn">
                      <button class="btn btn-default" data-toggle="modal" data-target="#chooseSect" type="button"><i class="fa fa-folder-open"></i></button>
                    </span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                  <label>Choose Division</label>
                  <div class="input-group">
                    <input type="text" class="form-control" value="Division 1, Division 2">
                    <span class="input-group-btn">
                      <button class="btn btn-default" data-toggle="modal" data-target="#chooseDiv" type="button"><i class="fa fa-folder-open"></i></button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary add-bc" data-dismiss="modal">Add</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Choose Section -->
  <div class="modal fade" id="chooseSect" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Choose Section</h4>
        </div>
        <div class="modal-body">
          <div class="table-responsive">
            <table class="table table-middle table-condensed">
              <thead>
                <tr>
                  <th>Section</th>
                  <th>Section Name</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Section A</td>
                  <td>Agriculture, forestry and fishing</td>
                  <td>
                    <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Section B</td>
                  <td>Mining and quarrying</td>
                  <td>
                    <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Section C</td>
                  <td>Manufacturing</td>
                  <td>
                    <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal">Add</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Choose Division -->
  <div class="modal fade" id="chooseDiv" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Choose Division</h4>
        </div>
        <div class="modal-body">
          <div class="table-responsive">
            <table class="table table-middle table-condensed">
              <thead>
                <tr>
                  <th>Division</th>
                  <th>Description</th>
                  <th>Group</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Division 1</td>
                  <td>Placeholder placeholder placeholder</td>
                  <td>Group 1, Group 2, Group 3</td>
                  <td>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox">
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Division 2</td>
                  <td>Placeholder placeholder placeholder</td>
                  <td>Group 1, Group 2, Group 3</td>
                  <td>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox">
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Division 3</td>
                  <td>Placeholder placeholder placeholder</td>
                  <td>Group 1, Group 2, Group 3</td>
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
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal">Add</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Edit Business Category -->
  <div class="modal fade" id="editBc" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Edit Business Category</h4>
        </div>
        <div class="modal-body">
          <div class="margin-bottom">
            <a href="#chooseBc" data-toggle="modal" class="btn btn-orange">Choose From Existing Category</a>
          </div>
          <form>
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                  <label>Choose Section</label>
                  <div class="input-group">
                    <input type="text" class="form-control" value="Section A : Agriculture, forestry and fishing">
                    <span class="input-group-btn">
                      <button class="btn btn-default" data-toggle="modal" data-target="#chooseSect" type="button"><i class="fa fa-folder-open"></i></button>
                    </span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                  <label>Choose Division</label>
                  <div class="input-group">
                    <input type="text" class="form-control" value="Division 1, Division 2">
                    <span class="input-group-btn">
                      <button class="btn btn-default" data-toggle="modal" data-target="#chooseDiv" type="button"><i class="fa fa-folder-open"></i></button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary edit-bc" data-dismiss="modal">Save</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Choose From Existing Business Category -->
  <div class="modal fade" id="chooseBc" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Choose From Existing Category</h4>
        </div>
        <form method="post" action="{{url('doAddCompanyBC')}}">
          {{csrf_field()}}
          <input type="hidden" name="id_company" value="{{$thisCompany->id}}">
        <div class="modal-body">
          <div class="table-responsive">
            <table class="table table-middle table-condensed table-hover">
              <thead>
                <tr>
                  <th>Section</th>
                  <th>Division</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach($section as $sData)
                  <tr>
                    <td>{{$sData->section}}</td>
                    <td>
                      @foreach($sData->Division()->get() as $dData)
                        {{$dData->name}},
                      @endforeach
                    </td>
                    <td>
                      <div class="radio">
                        <label>
                          <input type="radio" name="sectionOption" value="{{$sData->id}}">
                        </label>
                      </div>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
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

  <!-- Detail Business Category -->
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

  <!-- Delete Business Category -->
  <div class="modal fade" id="deleteBc" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Are you sure want delete this?</h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary delete-bc" data-dismiss="modal">Delete</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Delete Document -->
  <div class="modal fade" id="deleteDoc" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Are you sure want delete this?</h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary delete-doc" data-dismiss="modal">Delete</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Delete Logo -->
  <div class="modal fade" id="deleteLogo" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Are you sure want delete this?</h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary delete-doc" data-dismiss="modal">Delete</button>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="{{asset('js/myscript/admin-member.js')}}"></script>


  @include('layouts.dashboard.menu-mobile')
@endsection
