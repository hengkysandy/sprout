<div class="row">
  <div class="col-md-8 col-sm-8 col-xs-12">
    <div class="row">
      <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="form-group">
          <label>Filter By Section</label>
          <select id="section-purchase-cd" class="form-control selectpicker" data-live-search="true">
            <option value="">-</option>
            @foreach($sectionData as $sData)
              <option value="{{$sData->name}}">{{$sData->name}}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="form-group">
          <label>Filter By Division</label>
          <select id="div-purchase-cd" class="form-control selectpicker" data-live-search="true">
            <option value="">-</option>
          </select>
        </div>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="approved" id="approve-cbx"> Filter company only for approved vendor
          </label>
        </div>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="blacklisted" id="blacklist-cbx"> Filter company only for blacklist vendor
          </label>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="{{asset('js/myscript/filter-section-division.js')}}"></script>