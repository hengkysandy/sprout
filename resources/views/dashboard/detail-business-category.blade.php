<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="table-responsive">
    <table id="businessCategory" class="table table-middle table-hover table-bordered">
      <thead class="bg-white">
        <tr>
          <th>Section</th>
          <th>Division</th>
          <th>Group</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($businessCategory as $key=>$value)
          <tr value="{{$value['section_id']}}">
            <td>{{$value['section_name']}}</td>
            <td>
              @foreach($value['division'] as $row)
                {{$row->name}}
              @endforeach
            </td>
            <td>
              @foreach($value['group'] as $key=>$group)
                @foreach($group as $row)
                  {{$row->name}}
                @endforeach  
              @endforeach
            </td>
            <td>
              <a class="btn btn-orange btn-sm detailBc">Detail</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

<div class="modal fade" id="modalBc" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Detail Section</h4>
      </div>
      <div id="bc-modal-body" class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $('.detailBc').on('click', function(event){
    var id = $(this).closest('tr').attr('value');
    $.ajax({
      type:"GET",
      url:"business_category_modal",
      data:{
        id:id,
      },
      success:function(response){
        $('#bc-modal-body').html(response);
        $('#modalBc').modal();
      }
    });
  });
</script>