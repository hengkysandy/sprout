@extends('layouts.dashboard.app')

@section('content')
  @include('layouts.dashboard.navbar')

    <div class="container-fluid">
      <h1 class="main-title no-margin-top">Business Category</h1>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 margin-bottom">
          <div class="btn-group" role="group">
            <a href="#addSect" data-toggle="modal" class="btn btn-primary">Add Section</a>
            <a href="#addDiv" data-toggle="modal" class="btn btn-primary">Add Division</a>
            <a href="#addGroup" data-toggle="modal" class="btn btn-primary">Add Group</a>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-sm-12 col-xs-12">
          <div class="form-group">
            <label>Search Section</label>
            <input type="text" id="findSection" class="form-control" placeholder="Search Section">
          </div>
        </div>

        <div class="col-md-2 col-sm-4 col-sm-12 col-xs-12">
          <div class="form-group">
            <label>Search Section Name</label>
            <input type="text" id="findSectName" class="form-control" placeholder="Search Division">
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-sm-12 col-xs-12">
          <div class="form-group">
            <label>Search Division</label>
            <input type="text" id="findDivision" class="form-control" placeholder="Search Group">
          </div>
        </div>
        <div id="append-bc"></div>

        <div class="col-md-12 col-sm-12 col-xs-12 margin-top">
          <div class="table-responsive">
            <table id="sectionCategory" class="table table-middle table-hover table-bordered">
              <thead class="bg-white">
                <tr>
                  <th>Section</th>
                  <th>Section Name</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              @foreach($sectionData as $sData)
                <tr>
                  <td>{{$sData->section}}</td>
                  <td>{{$sData->name}}</td>
                  <td>
                    <button value="{{$sData->id}}" data-target="#editSect" data-toggle="modal" class="btn btn-primary btn-sm chooseEditSection">Edit</button>
                    <button value="{{$sData->id}}|Section" data-target="#delete" data-toggle="modal" class="btn btn-danger btn-sm chooseDelete">Delete</button>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>


        <div class="col-md-12 col-sm-12 col-xs-12 margin-top">
          <div class="table-responsive">
            <table id="divisionCategory" class="table table-middle table-hover table-bordered">
              <thead class="bg-white">
                <tr>
                  <th>Division</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($divisionData as $dData)
                <tr>
                  <td>{{$dData->name}}</td>
                  <td>{{$dData->description}}</td>
                  <td>
                    <button value="{{$dData->id}}" data-target="#editDiv" data-toggle="modal" class="btn btn-primary btn-sm chooseEditDivision">Edit</button>
                    <button value="{{$dData->id}}|Division" data-target="#delete" data-toggle="modal" class="btn btn-danger btn-sm chooseDelete">Delete</button>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>



        <div class="col-md-12 col-sm-12 col-xs-12 margin-top margin-bottom">
          <div class="table-responsive">
            <table id="groupCategory" class="table table-middle table-hover table-bordered">
              <thead class="bg-white">
                <tr>
                  <th>Group</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              @foreach($groupData as $gData)
                <tr>
                  <td>{{$gData->name}}</td>
                  <td>{{$gData->description}}</td>
                  <td>
                    <button value="{{$gData->id}}" data-target="#editGroup" data-toggle="modal" class="btn btn-primary btn-sm chooseEditGroup">Edit</button>
                    <button value="{{$gData->id}}|Group" data-target="#delete" data-toggle="modal" class="btn btn-danger btn-sm chooseDelete">Delete</button>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>


      </div>
    </div>

    <!-- Add Business Category
    <div class="modal fade" id="addBc" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Add Business Category</h4>
          </div>
          <div class="modal-body">
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
    </div> -->

    <!-- Edit Business Category -->
    <div class="modal fade" id="editBc" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document" >
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Edit Section A</h4>
          </div>
          <div class="modal-body">
            <form>
              <div class="row">
                <div class="col-md-5 col-sm-5 col-xs-12">
                  <div class="form-group">
                    <label>Choose Division</label>
                    <div class="input-group">
                      <input type="text" class="form-control" value="Division 1, Division 2" readonly="true">
                      <span class="input-group-btn">
                        <button class="btn btn-default btnToggleDiv" data-toggle="modal" data-target="#chooseDiv" type="button" disabled><i class="fa fa-folder-open" ></i></button>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="col-md-5 col-sm-5 col-xs-12">
                  <div class="form-group">
                    <label>Choose Group</label>
                    <div class="input-group">
                      <input type="text" class="form-control" value="Group 011, Group 012" readonly="true">
                      <span class="input-group-btn">
                        <button class="btn btn-default btnToggleGroup" data-toggle="modal" data-target="#chooseGroup" type="button" disabled><i class="fa fa-folder-open" ></i></button>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12 top-25">
                  <div class="form-group">
                    <button type="button" id="btnEditBc" class="btnEditBc btn btn-primary btn-sm" >Edit</button>
                    <button type="button" id="btnSaveBc"  class="btnSaveBc btn btn-success btn-sm" style="display:none">Save</button>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-5 col-sm-5 col-xs-12">
                  <div class="form-group">
                    <label>Choose Division</label>
                    <div class="input-group">
                      <input type="text" class="form-control" value="Division 1, Division 2" readonly="true">
                      <span class="input-group-btn">
                        <button class="btn btn-default btnToggleDiv" data-toggle="modal" data-target="#chooseDiv" type="button" disabled><i class="fa fa-folder-open"></i></button>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="col-md-5 col-sm-5 col-xs-12">
                  <div class="form-group">
                    <label>Choose Group</label>
                    <div class="input-group">
                      <input type="text" class="form-control" value="Group 011, Group 012" readonly="true">
                      <span class="input-group-btn">
                        <button class="btn btn-default btnToggleGroup" data-toggle="modal" data-target="#chooseGroup" type="button" disabled><i class="fa fa-folder-open"></i></button>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12 top-25">
                  <button type="button" id="btnEditBc" class="btnEditBc btn btn-primary btn-sm" >Edit</button>
                  <button type="button" id="btnSaveBc"  class="btnSaveBc btn btn-success btn-sm" style="display:none">Save</button>
                </div>
              </div>
              <div>
                <button class="btn btn-primary btn-sm">Add More Division</button>
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

    <!-- Detail Section -->
    <div class="modal fade" id="detailBc" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Detail Section A</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">
                      <a href="#division1" class="no-text-decoration panel-collapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="division1">
                      <div> Division 1 - Crop and animal production, hunting and related service activities <i class="fa fa-chevron-down pull-right"></i></div></a>
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
                      <a href="#division2" class="no-text-decoration panel-collapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="division2">
                      <div>Division 2 - Forestry and logging <i class="fa fa-chevron-down pull-right"></i></div></a>
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
            <h4 class="modal-title">Are you sure want to delete this?</h4>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-danger delete-bc" data-dismiss="modal">Delete</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Add Section Category -->
    <!-- Note: Sebagai Validation
    Ini menjadi wajib pertama yang harus di isi, bila section category belum di buat maka tidak dapat membuat division category, division group category, dan business category. Satu section dapat memiliki banyak division dan group
    -->
    <div class="modal fade" id="addSect" tabindex="-1" role="dialog" mode="save">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Add Section</h4>
          </div>
          <form action="{{url('doInsertSection')}}" method="post">
          {{csrf_field()}}
          <div class="modal-body">
              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                    <label>Section</label>
                    <input type="text" name="section" class="form-control">
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                    <label>Section Name</label>
                    <input type="text" name="name" class="form-control">
                  </div>
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary add-sect">Add</button>
          </div>
          </form>
        </div>
      </div>
    </div>

    <div class="modal fade" id="editSect" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Edit Section</h4>
          </div>
          <form id="inputFormSection" method="post">
          {{csrf_field()}}
          <div class="modal-body">
              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                    <label>Section</label>
                    <input type="text" name="section" id="section" class="form-control">
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                    <label>Section Name</label>
                    <input type="text" name="name" id="section-name" class="form-control">
                  </div>
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary add-sect">Save</button>
          </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Edit Section Category -->

    <!-- pop up Delete for all category -->
    <div class="modal fade" id="delete" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Are you sure want to delete this?</h4>
          </div>
          <div class="modal-footer">
            <div id="btn-confirmation"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Add Division Category -->
    <!-- Note: Sebagai validation
    Bila section category belum di buat, maka division category tidak dapat dibuat. Satu section dapat memiliki banyak division
    -->
    <div class="modal fade" id="addDiv" tabindex="-1" role="dialog" mode="save">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Add Division</h4>
          </div>
          <form action="{{url('doInsertDivision')}}" method="post">
          {{csrf_field()}}
          <div class="modal-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Choose Section</label>
                    <select id="divAddSec" name="sectionId" class="form-control selectpicker" style="display:block !important" data-live-search="true">
                      <option value="" selected>-</option>
                      @foreach($sectionData as $sData)
                        <option value="{{$sData->id}}">{{$sData->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                    <label>Division</label>
                    <input type="text" name="name" class="form-control">
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                    <label>Description</label>
                    <input type="text" name="description" class="form-control">
                  </div>
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary add-div">Add</button>
          </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Edit Division Category -->
    <div class="modal fade" id="editDiv" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Edit Division</h4>
          </div>
          <form id="inputFormDivision" method="post">
          {{csrf_field()}}
          <div class="modal-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Choose Section</label>
                    <select id="divAddSec" name="sectionId" class="form-control selectpicker" style="display:block !important" data-live-search="true">
                      <option value="" selected>-</option>
                      @foreach($sectionData as $sData)
                        <option value="{{$sData->id}}">{{$sData->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                    <label>Division</label>
                    <input type="text" id="name" name="name" class="form-control">
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                    <label>Description</label>
                    <input type="text" id="description" name="description" class="form-control">
                  </div>
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary add-div">Save</button>
          </div>
          </form>
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
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Division 1</td>
                    <td>Crop and animal production, hunting and related service activities</td>
                    <td>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
                        </label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Division 2</td>
                    <td>Forestry and logging</td>
                    <td>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                        </label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Division 3</td>
                    <td>Fishing and aquaculture</td>
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

    <!-- Choose Group -->
    <div class="modal fade" id="chooseGroup" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Choose Group</h4>
          </div>
          <div class="modal-body">
            <div class="table-responsive">
              <table class="table table-middle table-condensed">
                <thead>
                  <tr>
                    <th>Group</th>
                    <th>Description</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Group 1</td>
                    <td>Placeholder placeholder placeholder</td>
                    <td>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">
                        </label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Group 2</td>
                    <td>Placeholder placeholder placeholder</td>
                    <td>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">
                        </label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Group 3</td>
                    <td>Placeholder placeholder placeholder</td>
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

    <!-- Add Group Category -->
    <!-- Note: Sebagai validation
    Bila division category belum di buat, maka group category tidak dapat dibuat. Satu division dapat memiliki banyak group
    -->
    <div class="modal fade" id="addGroup" tabindex="-1" role="dialog" mode="save">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Add Group</h4>
          </div>
          <form action="{{url('doInsertGroup')}}" method="post">
            {{csrf_field()}}
          <div class="modal-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Choose Section</label>
                    <select id="groupAddSec" class="form-control selectpicker" style="display:block !important" data-live-search="true">
                      <option value="0" selected>-</option>
                      @foreach($sectionData as $sData)
                        <option value="{{$sData->id}}">{{$sData->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Choose Division</label>
                    <select id="groupAddDiv" name="divisionId" class="form-control selectpicker" style="display:block !important" data-live-search="true">
                      <option value="" selected>-</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                    <label>Group</label>
                    <input type="text" name="name" class="form-control">
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                    <label>Description</label>
                    <input type="text" name="description" class="form-control">
                  </div>
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary add-group">Add</button>
          </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Edit Group Category -->
    <div class="modal fade" id="editGroup" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Edit Group</h4>
          </div>
          <form id="inputFormGroup" method="post">
            {{csrf_field()}}
          <div class="modal-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Choose Section</label>
                    <select id="groupAddSec" class="form-control selectpicker" style="display:block !important" data-live-search="true">
                      <option value="0" selected>-</option>
                      @foreach($sectionData as $sData)
                        <option value="{{$sData->id}}">{{$sData->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Choose Division</label>
                    <select id="groupAddDiv" name="divisionId" class="form-control selectpicker" style="display:block !important" data-live-search="true">
                      <option value="" selected>-</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                    <label>Group</label>
                    <input type="text" id="name-group" name="name" class="form-control">
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                    <label>Description</label>
                    <input type="text" id="description-group" name="description" class="form-control">
                  </div>
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary add-group">Save</button>
          </div>
          </form>
        </div>
      </div>
    </div>
    
    <script src="js/myscript/business-category.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $.ajax({
          type:"GET",
          url:"business_category_detail",
          success:function(response){
            $('#append-bc').html(response);
          }
        });
      });
    </script>

  @include('layouts.dashboard.menu-mobile')
@endsection
